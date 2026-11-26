<?php
$privkey = openssl_pkey_get_private("file://_private.pem");

foreach(scandir(".") as $f)
{
	if (substr($f, -4) == ".lua")
	{
		$name = substr($f, 0, -4);
		rename($f, $name.".source.lua");
		passthru("_plutoc -o $name.55.lua $name.source.lua");

		$bc = file_get_contents("$name.55.lua");
		$digest_bytes = sha1($bc, true);
		openssl_sign($digest_bytes, $signature, $privkey);

		$fh = fopen("$name.55.lua", "ab");
		fwrite($fh, "\x0"); // version 0
		fwrite($fh, $signature); // 512 bytes
		fwrite($fh, pack("L", strlen($bc)));

		fclose($fh);
	}
}
