<?php
$data = json_decode(file_get_contents("php://input"),true);

if(empty($data)
	||empty($data["v"])
	||(version_compare($data["v"], "95") >= 0 || version_compare($data["v"], "26.6.1") < 0)
	)
{
	die(json_encode([
		"t"=>"VER_UNSUPP",
	]));
}

if(!isset($data["a"])
	||empty($data["x"])
	||empty($data["i"])||strlen($data["i"])>14
	||empty($data["h"])||strlen($data["h"])>16
	||$data["x"]>(time()+(48*60*60))
	||!isset($data["l"])
	)
{
	die(json_encode([
		"m"=>"Bad request"
	]));
}

require "../src/include.php";

// Query account information
$account_res = $db->query("SELECT `id`, `privilege`, `dev`, `suspended_for`, `custom_root_name`, `last_known_identity`, `last_hwid`, `early_toxic`, `pre100`, `used100`, `rndbool` FROM `accounts` WHERE `activation_key`=? AND `privilege`!=0 AND `migrated_from`!='1' LIMIT 1", "s", $data["a"]);
if(count($account_res) != 1)
{
	die("{}");
}

// Extract provided HWID information
$hwid = $data["h"];

// Update last_known_identity field if need be
if ($data["i"] != $account_res[0]["last_known_identity"]
	&& $data["i"] != "HNLL72M8WDI2YU" // RID 0
	)
{
	$db->query("UPDATE `accounts` SET `last_known_identity`=? WHERE `id`=?", "ss", $data["i"], $account_res[0]["id"]);
}

// Update last_hwid field if need be
if($hwid != $account_res[0]["last_hwid"])
{
	if ($account_res[0]["last_hwid"])
	{
		$db->query("UPDATE `accounts` SET `last_hwid`=?,`hwid_changes`=`hwid_changes`+1 WHERE `id`=?", "ss", $hwid, $account_res[0]["id"]);
	}
	else
	{
		$db->query("UPDATE `accounts` SET `last_hwid`=? WHERE `id`=?", "ss", $hwid, $account_res[0]["id"]);
	}
}

// Extract provided version information
$ver_arr = explode("-", $data["v"]);
$is_stable_build = (count($ver_arr) == 1);
$is_dev_build = (!$is_stable_build && substr($ver_arr[1], 0, 3) == "dev");

// Check privileges
if($is_dev_build && !$account_res[0]["dev"])
{
	die("{}");
}
if($account_res[0]["suspended_for"])
{
	die(json_encode([
		"m"=>"This account has been suspended. Reason: ".$account_res[0]["suspended_for"]."."
	]));
}

// Extract provided identity information
$identity = $data["i"];
if (substr($identity, 0, 1) == "H")
{
	$rid = giv4_decode(substr($identity, 1));
	if ($rid >= 10000 && $rid <= 3000000000)
	{
		if (!$db->query("SELECT `id` FROM `scaccounts` WHERE `id`=?", "i", $rid))
		{
			$db->query("INSERT IGNORE INTO `rid_queue` (`rid`) VALUES (?)", "i", $rid);
		}
	}
}
if (!$is_stable_build && $ver_arr[1] == "devdbg")
{
	$identity .= "#";
}

// Get list of HWIDs currently using this account
$menus = $db->query("SELECT `hwid` FROM `menus` WHERE `account_id`=?", "s", $account_res[0]["id"]);

// Sanity check
if (count($menus) > 1)
{
	die(json_encode([
		"m"=>"Account is in an unexpected state. Not sure how you managed that. Please try again later."
	]));
}

if (count($menus) == 0)
{
	// Account was not being used, bind it to this client now.
	$db->query("INSERT INTO `menus` (`account_id`,`hwid`,`identity`,`session`,`version`,`lang`,`last_heartbeat`) VALUES (?,?,?,?,?,?,?)", "ssssssi", $account_res[0]["id"], $hwid, $identity, $data["s"] ?? "", $data["v"], $data["l"], time());
}
else
{
	// Account is already being used.
	if ((strlen($menus[0]["hwid"]) == 16) == (strlen($hwid) == 16) // Same HWID version?
		&& $menus[0]["hwid"] != $hwid // Different HWID?
		)
	{
		// Attempt to use same account on 2 different devices, deny auth.
		die(json_encode([
			"t"=>"share"
		]));
	}

	// Seems to be the same device that has previously authed, update info.
	if(isset($data["s"]))
	{
		$db->query("UPDATE `menus` SET `session`=? WHERE `account_id`=?", "ss", $data["s"], $account_res[0]["id"]);
	}
	$db->query("UPDATE `menus` SET `identity`=?,`version`=?,`lang`=?,`last_heartbeat`=? WHERE `account_id`=?", "sssis", $identity, $data["v"], $data["l"], time(), $account_res[0]["id"]);
}

// Process per-account unlocks
$unlocks = 0;
if($account_res[0]["early_toxic"])
{
	$unlocks |= 0b1;
}
if($account_res[0]["pre100"])
{
	$unlocks |= 0b10;
}
if($account_res[0]["used100"])
{
	$unlocks |= 0b100;
}
if($account_res[0]["rndbool"])
{
	$unlocks |= 0b1000;
}

// Authenticated, build response data
function signPrivilege($privilege)
{
	global $data;
	$signed_data = $privilege.":".$data["a"].":".$data["x"].":".$data["i"].":".$data["v"];
	$privkey = openssl_pkey_get_private("file://private/private.pem");
	openssl_sign($signed_data, $sig, $privkey);
	return $privilege.bin2hex($sig);
}

function setVersion(&$json)
{
	global $data;
	$latest_version = file("../stand-versions.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)[0];
	if (version_compare($data["v"], "95") >= 0 || version_compare($data["v"], $latest_version) < 0)
	{
		$json["v"] = $latest_version;
	}
}

$json = [
	"s"=>signPrivilege($account_res[0]["privilege"]),
	"u"=>$unlocks,
];
if(empty($data["p"])||$data["p"]!=$account_res[0]["privilege"])
{
	$ed_name = "Error";
	switch($account_res[0]["privilege"])
	{
		case "1":
		$ed_name = "Basic";
		break;

		case "2":
		$ed_name = "Regular";
		break;

		case "3":
		$ed_name = "Ultimate";
		break;
	}
	$json["r"] = $account_res[0]["custom_root_name"] ? $account_res[0]["custom_root_name"] : "Stand {v} ({e})";
	/*if ($ver_arr[0] == "100.2")
	{
		$ver_arr[0] = "💯.2";
	}*/
	$json["r"] = str_replace("{v}", join("-", $ver_arr), $json["r"]);
	$json["r"] = str_replace("{e}", $ed_name, $json["r"]);
}
if(version_compare($data["v"], "26.6.1") < 0)
{
	$json["t"] = "VER_UNSUPP_AUTHONLY";
}
else
{
	/*if ($data["v"] == "107.2")
	{
		$json["m"] = "We're aware of an issue where users of 107.2 have random crashes without traces. See \"Supported Versions\" at std.gg/help.";
	}
	else if ($data["v"] == "107.2-r1" || $data["v"] == "107.2-r2")
	{
		$json["m"] = "Thank you for trying this revision. Please don't forget to give us feedback so we know if the problem is fixed or not.";
	}*/
	if($is_stable_build)
	{
		setVersion($json);
	}
}
if(!empty($data["s"])) // User switched session?
{
	$json["d"] = crc32($data["s"]) ^ 0xc5eef166;
	$peers_res=$db->query("SELECT `identity` FROM `menus` WHERE `session`=? AND `identity`!=?", "ss", $data["s"], $identity);
	if($peers_res)
	{
		$json["p"]=[];
		foreach($peers_res as $peer)
		{
			//if (substr($identity, -1) == "#" || substr($peer["identity"], -1) == "#") // Restrict SUI to devdbg
			{
				array_push($json["p"], $peer["identity"]);
			}
		}
	}
}
else
{
	// Pick a random RID that we know is valid but don't know a name for
	$rid_res = $db->query("SELECT `rid` FROM `rid_queue` ORDER BY RAND() LIMIT 1");
	if ($rid_res)
	{
		$json["c"] = (int)$rid_res[0]["rid"];
	}
}
if(array_key_exists("r", $json)) // Initial heartbeat (with this edition)?
{
	/*if (!array_key_exists("m", $json))
	{
		$json["m"]="PSA: Don't co-load garbage. :)";
	}*/
}
//if(!empty($data["p"])) // Subsequent heartbeat?
{
	$json["a"] = ((filemtime(__DIR__."/bgscript-5.4.txt") << 32) ^ filemtime(__DIR__."/blobfish.txt") ^ filemtime(__DIR__."/tuna.json.php"));
}
die(json_encode($json));
