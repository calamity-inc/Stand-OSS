<p>Time is provided as observed in Central Europe.</p>
<?php printHeader('Stand 26.11.2', '26/11/2026 10:50'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.13.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 26.11.1', '04/11/2026 21:43'); ?>
<ul>
	<li>Updated for latest socialclub</li>
</ul>
<?php printHeader('Stand 26.10.1', '16/10/2026 14:08'); ?>
<ul>
	<li>Fixed some commands not updating their state on the web interface when used via web interface command box</li>
	<li>Lua API: Updated Pluto to 0.13.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 26.9.1', '10/09/2026 21:57'); ?>
<ul>
	<li>Updated the communication protocol of the web interface to be more responsive by using a LAN route when available</li>
</ul>
<?php printHeader('Stand 26.8.1', '22/08/2026 08:05'); ?>
<ul>
	<li>Fixed detach wing</li>
	<li>Lua API: Updated Pluto to 0.13.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 26.7.2', '22/07/2026 07:13'); ?>
<ul>
	<li>Removed Herobrine</li>
</ul>
<?php printHeader('Stand 26.7.1', '14/07/2026 16:02'); ?>
<ul>
	<li>Updated for 1.73-3889.0</li>
	<li>Fixed a rare crash on connection failure</li>
</ul>
<?php printHeader('Stand 26.6.1', '11/06/2026 18:37'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.13.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 26.3.1', '17/03/2026 12:47'); ?>
<ul>
	<li>Updated for 1.72-3788.0</li>
</ul>
<?php printHeader('Stand 26.1.1', '27/01/2026 16:36'); ?>
<ul>
	<li>Updated for 1.72-3751.0</li>
	<li>Lua API: Updated Pluto to 0.12.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 25.12.2', '17/12/2025 13:01'); ?>
<ul>
	<li>Updated for 1.72-3725.0</li>
</ul>
<?php printHeader('Stand 25.12.1', '10/12/2025 13:52'); ?>
<ul>
	<li>Updated for 1.72-3717.0</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.10.2', '26/10/2025 18:22'); ?>
<ul>
	<li>Fixed ILLEGAL_INSTRUCTION on CPUs that don't support BMI2</li>
</ul>
<?php printHeader('Stand 25.10.1', '26/10/2025 14:02'); ?>
<ul>
	<li>
		Changed the default DNS strategy to respecting your Windows settings
		<ul>
			<li>Previously, it would use Cloudflare's Public Encrypted DNS Server for more security. If you want to stay on this mode, you can add "DNS Conduit: Smart" to your Meta State.txt.</li>
		</ul>
	</li>
	<li>Made PI and PJ patterns and hooks optional</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.9.1', '26/09/2025 14:38'); ?>
<ul>
	<li>Fixed "Disable Mechanic Cooldown" not working</li>
	<li>Lua API: Updated Pluto to 0.12.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.8.1', '18/08/2025 22:44'); ?>
<ul>
	<li>Updated translations</li>
	<li>Some fixes for the web interface</li>
	<li>Lua API: Updated Pluto to 0.11.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 25.6.4', '17/06/2025 14:05'); ?>
<ul>
	<li>Updated for game version 1.71-3570.0</li>
	<li>Lua API: Updated Pluto to 0.11.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
</ul>
<?php printHeader('Stand 25.6.3', '10/06/2025 16:49'); ?>
<ul>
	<li>Fixed sometimes causing frame pacing issues</li>
	<li>Reduced memory usage</li>
</ul>
<?php printHeader('Stand 25.6.2', '09/06/2025 18:01'); ?>
<ul>
	<li>Fixed ISP name showing as ???</li>
</ul>
<?php printHeader('Stand 25.6.1', '03/06/2025 20:37'); ?>
<ul>
	<li>
		Lua API: Updated Pluto to 0.11.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)
		<ul>
			<li>Note that table freezing is now no longer available but <code>table.freeze = |t| -> t</code> was added to the runtime to avoid breakage</li>
			<li>util.is_key_down now also accepts F1-F24 for a string argument</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.5.1', '11/05/2025 11:47'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.10.5 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.4.2', '12/04/2025 16:01'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.4.1', '10/04/2025 15:36'); ?>
<ul>
	<li>Updated for game version 1.70-3504</li>
</ul>
<?php printHeader('Stand 25.3.1', '04/03/2025 16:04'); ?>
<ul>
	<li>Fixed crashing on injection with a new Windows 11 24H2 update</li>
	<li>Lua API: Updated Pluto to 0.10.4 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 25.2.1', '05/02/2025 14:17'); ?>
<ul>
	<li>Updated translations</li>
	<li>Fixed no turbulence</li>
	<li>Fixed some unusual event false-positives</li>
</ul>
<?php printHeader('Stand 25.1.1', '23/01/2025 05:13'); ?>
<ul>
	<li>Fixed some kick event false-positives</li>
</ul>
<?php printHeader('Stand 24.12.6', '19/12/2024 11:11'); ?>
<ul>
	<li>Improved protections</li>
	<li>Lua API: Fixed toggle_loop's on_stop not being called when stopping script</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.12.5', '16/12/2024 11:17'); ?>
<ul>
	<li>Fixed session script operations</li>
	<li>Fixed some personal vehicle operations</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.12.4', '13/12/2024 12:34'); ?>
<ul>
	<li>Added Player(s) > Friendly > Give Collectibles > Yuanbao</li>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.12.3', '10/12/2024 17:17'); ?>
<ul>
	<li>Improved Los Santos Customs for Banshee GTS & Firebolt ASP</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.12.2', '10/12/2024 15:35'); ?>
<ul>
	<li>Updated for game version 1.70-3407</li>
</ul>
<?php printHeader('Stand 24.12.1', '03/12/2024 05:40'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.10.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.11.3', '22/11/2024 10:48'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.10.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.11.2', '04/11/2024 22:17'); ?>
<ul>
	<li>
		Lua API
		<ul>
			<li>Updated Pluto to 0.10.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
			<li>Disabled compatibility mode for 'new' and 'class' in .lua files</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.11.1', '03/11/2024 01:20'); ?>
<ul>
	<li>Fixed co-load detection false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.8', '31/10/2024 02:43'); ?>
<ul>
	<li>Lua API: Updated Pluto to 0.10.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.7', '27/10/2024 16:37'); ?>
<ul>
	<li>Added Game > Remove FPS Limit</li>
	<li>Fixed crashing when getting near a player as host</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.6', '26/10/2024 15:25'); ?>
<ul>
	<li>Re-added "find public session" etc (intended for usage with FSL)</li>
	<li>Removed "Block Outgoing Syncs To Host" since that's now been patched</li>
	<li>Fixed join & spectate by code not respecting selected join method</li>
	<li>Fixed automatically rejoin desynced sessions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.5', '15/10/2024 13:25'); ?>
<ul>
	<li>
		Updated for 1.69-3351
		<ul>
			<li>Note that you can go into solo sessions (at your own risk, of course) but you are not able to join public sessions right now.</li>
		</ul>
	</li>
	<li>Lua API: Added entities.get_net_object</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.4', '13/10/2024 14:29'); ?>
<ul>
	<li>Fixed clients leaving when we are the host in an activity session and not running BattlEye</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.3', '11/10/2024 17:15'); ?>
<ul>
	<li>Fixed clients leaving when we are the host and not running BattlEye</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.2', '05/10/2024 11:36'); ?>
<ul>
	<li>Fixed being kicked after host change despite "Block Outgoing Syncs To Host"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.10.1', '02/10/2024 10:49'); ?>
<ul>
	<li>Added Online > Protections > Syncs > Block Outgoing Syncs To Host</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.9', '27/09/2024 22:35'); ?>
<ul>
	<li>Fixed showing host kick imminent message when BE is active locally</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.8', '27/09/2024 09:53'); ?>
<ul>
	<li>Online > Transitions > Matchmaking > Player Magnet: Renamed to Player Count Preference, now available to Basic users as well</li>
	<li>[Regular] Added Online > Session > Player Magnet</li>
	<li>Added Game > Fix Stuttering At High FPS</li>
	<li>Removed Player(s) > Kick > "BattlEye Kick" & "BattlEye Ban" due to being patched</li>
	<li>Fixed showing incorrect person for "next host"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.7', '25/09/2024 19:01'); ?>
<ul>
	<li>Added Self > Movement > Levitation > Keep Momentum</li>
	<li>Added Player > Info > Name Hash</li>
	<li>Added Game > Info Overlay > Host Queue Factor</li>
	<li>Fixed wrong host queue positions and sorting</li>
	<li>Fixed backfiring when kicking the host</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.6', '25/09/2024 12:27'); ?>
<ul>
	<li>Updated for 1.69-3337</li>
	<li>Lua API: Updated Pluto to 0.9.5 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.5', '23/09/2024 11:23'); ?>
<ul>
	<li>[Ultimate] Added Player(s) > Kick > "BattlEye Kick" & "BattlEye Ban"</li>
	<li>Re-added kick all & crash all</li>
	<li>Improved Rapid Fire Vehicle Weapons</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.9.3', '20/09/2024 08:02'); ?>
<ul>
	<li>Updated "no DLLs injected" message to mention BattlEye as a possible reason</li>
</ul>
<?php printHeader('Stand 24.9.4', '19/09/2024 16:36'); ?>
<ul>
	<li>Fixed being unable to go online when Stand was injected late</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.9.3', '18/09/2024 18:40'); ?>
<ul>
	<li>
		Updated for 1.69-3323
		<ul>
			<li>You will need to disable BattlEye (go to Settings in the Rockstar Games Launcher or add -nobattleye to the launch parameters).</li>
			<li>Please note that legit hosts will try to remove you from the session (Stand will warn you about this). We advise you to spoof your host token to sweet spot so you can easily triumph over legits.</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 24.9.2', '16/09/2024 09:48'); ?>
<ul>
	<li>Fixed command box IME input breaking when someone writes a message in chat</li>
	<li>Fixed vehicle indestructible misbehaving with some very specific vehicle configs</li>
	<li>Lua API: Added players.get_ip_string, util.play_wav, util.ui3dscene_set_element_2d_position, util.ui3dscene_set_element_2d_size, util.ui3dscene_set_element_background_colour, util.ip_from_string, util.ip_to_string, util.ip_get_as, util.ip_get_location, & lang.get_country_name</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.9.2', '13/09/2024 08:33'); ?>
<ul>
	<li>Fixed showing in advanced mode until update check is completed</li>
	<li>"Fixed" Forza Horizon 5 crashing when Stand Launchpad is running
		<ul>
			<li>To be clear, this wasn't an issue on our end. The incompetent Forza devs simply decided to blacklist our 'magenta S' icon. It has been imperceptibly changed by mutating 1 byte.</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 24.9.1', '06/09/2024 10:07'); ?>
<ul>
	<li>Added Vehicle > Los Santos Customs > Appearance > Pearlescent Colour</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Interior Colour</li>
	<li>Added Player > Trolling > Vehicle > Downgrade</li>
	<li>Added Stand > Settings > Appearance > Entity Previews > Opaque</li>
	<li>Added Vehicle > Collisions > "No Collision With Peds" & "No Collision With Objects"</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.13', '28/08/2024 07:07'); ?>
<ul>
	<li>Improved invulnerability flag for instanced activities</li>
	<li>Fixed deceive interior checks breaking some story mode missions</li>
	<li>Lua API: Added players.is_in_vehicle</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.12', '22/08/2024 14:00'); ?>
<ul>
	<li>Fixed self flag being applied to other players</li>
	<li>Fixed co-loading false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.11', '21/08/2024 10:21'); ?>
<ul>
	<li>Added Online > Enhancements > Disable Nano Drone Range Limit</li>
	<li>Added Online > Spoofing > Phone Mode Spoofing</li>
	<li>Added Exclude Modders and Exclude Likely Modders to All Players > Excludes and Kick Host When Joining As Next In Queue</li>
	<li>Added Players > Settings > Tags > In Vehicle</li>
	<li>Added more options for Stand > Settings > Appearance > Textures > Leftbound</li>
	<li>Improved protections</li>
	<li>Improved fix vehicle</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.10', '18/08/2024 11:10'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved rendering of list selects to avoid awkward truncations</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.9', '14/08/2024 13:33'); ?>
<ul>
	<li>Fixed a logic error causing some kicks to fail</li>
	<li>Fixed a protection issue when co-loading a certain menu</li>
</ul>
<?php printHeader('Stand 24.8.8', '14/08/2024 09:30'); ?>
<ul>
	<li>Fixed performance regression when loading some Lua scripts</li>
</ul>
<?php printHeader('Stand 24.8.7', '14/08/2024 08:01'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.6', '12/08/2024 07:30'); ?>
<ul>
	<li>Added Online > Session Browser > More Filters > Not Hosted By Known Advertiser (on by default)</li>
	<li>Added Online > Chat > Commands > Reply Visibility > "Me" & "Nobody"</li>
	<li>Super drive now supports analogue input</li>
	<li>Fixed clear blacklist</li>
	<li>Fixed some instances of premature text truncation</li>
	<li>Lua API: Added entities.get_model_uhash</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.5', '08/08/2024 06:02'); ?>
<ul>
	<li>Player History: Fixed not persisting for new users</li>
	<li>Analogue Keyboard Support: Added support for DrunkDeer keyboards</li>
	<li>Lua API: Added util.shoot_thread</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.4', '06/08/2024 05:17'); ?>
<ul>
	<li>Made HF an optional pattern</li>
	<li>Fixed vehprimaryred etc not working as expected when colour command is out of view</li>
	<li>Fixed analogue keyboard support reporting wrong keys where local layout diverges (notably Y & Z keys)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.8.3', '02/08/2024 23:17'); ?>
<ul>
	<li>Fixed some subtle connection issues</li>
</ul>
<?php printHeader('Stand 24.8.2', '02/08/2024 15:17'); ?>
<ul>
	<li>Fixed connection issues</li>
	<li>Fixed an issue where hold mode hotkeys would sometimes remain active when game is unfocused</li>
</ul>
<?php printHeader('Stand 24.8.1', '01/08/2024 03:46'); ?>
<ul>
	<li>Added Vehicle > Movement > Drive On Water</li>
	<li>Added Vehicle > Movement > Disable Heli Auto-Stabilisation</li>
	<li>Added Player > Trolling > Sound Spam</li>
	<li>Replaced Game > Wooting Analog Support with Analogue Keyboard Support</li>
	<li>Lua API: Added util.arspinner_is_enabled, util.graceland_is_enabled, util.graceland_enable, & util.graceland_disable</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 24.7.8', '20/07/2024 20:46'); ?>
<ul>
	<li>Added Player(s) > Friendly > Give Collectibles > Los Santos Tags</li>
	<li>Lua API: Added util.stat_set_int64</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.11', '20/07/2024 15:04'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed some discrepancies with weapon livery components</li>
	<li>Fixed being unable to stop business battle 2 session script</li>
	<li>Lua API: Added directx.blurrect_draw_client</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.10', '17/07/2024 13:36'); ?>
<ul>
	<li>Updated for game version 1.69-3274</li>
	<li>Lua API: util.try_run now returns a bool</li>
</ul>
<?php printHeader('Stand 116.9', '16/07/2024 13:50'); ?>
<ul>
	<lI>Improved weapon modifier options</lI>
	<lI>Fixed Suppress Typing Indicator</lI>
	<lI>Some other improvements and bugfixes</lI>
</ul>
<?php printHeader('Stand 116.8', '06/07/2024 05:00'); ?>
<ul>
	<li>Team Lavender or Team Ruby? Find & rep your team at <a href="https://stand.gg/focus#Stand%3ESettings%3EAppearance%3EAddress%20Bar%3ERoot%20Name" target="_blank">Stand > Settings > Appearance > Address Bar > Root Name</a>!</li>
	<li>Fixed "Thousands Separator For Money" breaking account balance on mobile</li>
	<li>Fixed "Lock Weapons" command names</li>
	<li>Fixed cursor border showing on inactive columns</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.7', '04/07/2024 09:23'); ?>
<ul>
	<li>Fixed being unable to join missions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.6', '04/07/2024 04:54'); ?>
<ul>
	<li>Improved force relay connections</li>
	<li>Slightly reduced memory usage</li>
	<li>
		Lua API
		<ul>
			<li>Added players.detections_root</li>
			<li>Updated Pluto to 0.9.4 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.5', '01/07/2024 11:09'); ?>
<ul>
	<li>Added World > Atmosphere > Override Weather > "Rainy Halloween" & "Snowy Halloween"</li>
	<li>Improved protections</li>
	<li>Fixed mugger loop</li>
	<li>Lua API: Added optional ignore_streamer_spoof argument to players.get_name</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.4', '27/06/2024 01:01'); ?>
<ul>
	<li>Made H9 an optional pattern</li>
	<li>Fixed increased sticky & flare limit</li>
	<li>Fixed false-positives</li>
	<li>Fixed minor issues with listing of new vehicles & weapons</li>
	<li>Fixed pickup reactions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.3', '26/06/2024 02:22'); ?>
<ul>
	<li>Fixed sessions created via Stand not having full slot capacity</li>
	<li>Fixed messages containing '?' being considered profanity filter bypass</li>
	<li>Removed gift vehicle and ban kick as they have been patched</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.2', '25/06/2024 20:35'); ?>
<ul>
	<li>Fixed disable dripfeeding</li>
	<li>Fixed love letter kick</li>
	<li>Fixed session view & join</li>
	<li>Fixed various chat-related stuff</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116.1', '25/06/2024 17:48'); ?>
<ul>
	<li>
		Updated for 1.69-3258
		<ul>
			<li>Note that you should disable transition options for the first time going online so you can dismiss the new welcome message</li>
		</ul>
	</li>
	<li>Improved protections</li>
	<li>Improved "Delete All Attackers"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 116', '17/06/2024 14:48'); ?>
<ul>
	<li>Added Self > Movement > Levitation > Presets</li>
	<li>Punishments: Added Show Model Name</li>
	<li>Added Vehicle > Movement > Super Drive > Presets</li>
	<li>Removed Vehicle > Movement > Horn Boost</li>
	<li>Added Online > Session > Block Joins > Notifications > Player Join Reactions</li>
	<li>Added Game > Custom DLCs > Spoof Models > "Vehicles", "Motorcycles", "Planes", "Helicopters", "Boats" & "Cycles"</li>
	<li>Added Stand > Settings > Appearance > Max Columns</li>
	<li>Added Stand > Settings > Appearance > Address Bar > Width Affected By Columns</li>
	<li>Removed Stand > Settings > Appearance > Header > Legacy Positioning</li>
	<li>Added Stand > Settings > Appearance > Notifications > "Padding" & "Timing"</li>
	<li>Stand > Profiles: Replaced "Active" with "Load On Inject"</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.11', '14/06/2024 17:15'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.10', '08/06/2024 11:02'); ?>
<ul>
	<li>Added Stand > Experiments > Run Network Diagnostics</li>
	<li>Improved Fix Asset Hashes</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.9', '06/06/2024 18:36'); ?>
<ul>
	<li>Fixed some request failures due to path encoding</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.8', '06/06/2024 13:28'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved networking to help people behind Great Firewalls</li>
	<li>Fixed empty strings in Portuguese</li>
	<li>Lua API: Updated Pluto to 0.9.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.7', '31/05/2024 05:18'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.6', '29/05/2024 00:43'); ?>
<ul>
	<li>Fixed failing to inject when requests are taking too long</li>
	<li>Fixed crashing when loading straight to Online with game pool size multiplier</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.5', '27/05/2024 22:52'); ?>
<ul>
	<li>Added logging for critical request failures</li>
	<li>Fixed activating while in Online causing bad state unload</li>
	<li>Fixed rare instances of being logged out despite no connection errors</li>
	<li>Lua API: Added players.get_millis_since_discovery</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.4', '23/05/2024 02:59'); ?>
<ul>
	<li>Compiled with an older version of Visual Studio (thanks, Microsoft)</li>
</ul>
<?php printHeader('Stand 115.3', '23/05/2024 00:21'); ?>
<ul>
	<li>Additional improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.2', '22/05/2024 22:25'); ?>
<ul>
	<li>Further improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115.1', '22/05/2024 08:12'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 115', '21/05/2024 22:08'); ?>
<ul>
	<li>Stand is now available in Italian thanks to Il Mac!</li>
	<li>Added Self > Movement > Levitation > "Acceleration" & "Only Rotate On Movement"</li>
	<li>Added Self > Maximum Health</li>
	<li>Added Vehicle > Personal Vehicles > Save All To Garage</li>
	<li>Added Online > Protections > Anti-Detection > "Indestructible Vehicle" & "Modded Health"</li>
	<li>Added Player > Information > Stats > "Favourite Vehicle" & "Favourite Weapon"</li>
	<li>Added Player > Trolling > Vehicle > Detach Wing</li>
	<li>Added Player > Trolling > Particle Spam > Hide Locally</li>
	<li>Added Game > Disables > Disable Wanted Level Music</li>
	<li>Added Stand > Settings > Appearance > Entity Previews</li>
	<li>Stand > Lua Scripts: Added "Compatibility Layer"</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.13', '18/05/2024 18:22'); ?>
<ul>
	<li>Improved pattern scan performance</li>
	<li>Fixed toggle correlations not working correctly on Lua script commands</li>
	<li>Fixed context menu staying open if underlying command is detached or deleted</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.12', '13/05/2024 13:37'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.11', '07/05/2024 17:24'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.10', '07/05/2024 15:26'); ?>
<ul>
	<li>Fixed issues with hotkeys on Lua script commands</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.9', '07/05/2024 12:39'); ?>
<ul>
	<li>Optimised state operations</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.8', '02/05/2024 09:20'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.7', '09/04/2024 04:59'); ?>
<ul>
	<li>Improved BST loop's death handling</li>
	<li>Fixed rapid fire projectile incongruence</li>
	<li>Lua API: Added lang.is_builtin</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.6', '26/04/2024 04:13'); ?>
<ul>
	<li>Fixed watch_dogs like world hacking & ar markers for non-16:9</li>
	<li>Fixed social club dm notification to console & log not working</li>
	<li>Lua API: Updated Pluto to 0.9.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.5', '16/04/2024 16:05'); ?>
<ul>
	<li>
		Updated for game version 1.68-3179
		<ul>
			<li>Sorry for not being awake sooner, cuties</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.4', '13/04/2024 01:53'); ?>
<ul>
	<li>Fixed exception when receiving SC DMs</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.3', '12/04/2024 15:56'); ?>
<ul>
	<li>Disabled slot machine rigging for safety</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.2', '11/04/2024 16:33'); ?>
<ul>
	<li>Fixed Player > Trolling > Cage</li>
	<li>Fixed exceptions when switching fullscreen mode</li>
	<li>Fixed regression with tabs being disabled on initial load</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 114.1', '07/04/2024 16:58'); ?>
<ul>
	<li>Fixed failing to initialise with only default fonts</li>
</ul>
<?php printHeader('Stand 114', '07/04/2024 12:22'); ?>
<ul>
	<li>Stand is now available in Vietnamese (Tiếng Việt) thanks to Nhất Linh!</li>
	<li>Added "Session Code" to session views in Player History & Session Browser</li>
	<li>Added Online > Session > Stand User Identification > HostShare™</li>
	<li>Added Online > Enhancements > Disable Business Battle Music</li>
	<li>Added Online > Social Club DM Notifications</li>
	<li>Added Players > Settings > Tags > Organisation Member</li>
	<li>Added Player > Information > Status > "Language", "Controller" & "Interior ID"</li>
	<li>Added World > Inhabitants > NPC ESP > Colour</li>
	<li>Added World > Inhabitants > Player ESP > Colours</li>
	<li>Added "Current Colour (Hex)" to colour commands</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.readonly_name, memory.alloc_float, & memory.scan_script</li>
			<li>Updated Pluto to 0.9.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
			<li>Compatibility mode is now disabled for .pluto files</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 113.5', '28/03/2024 10:44'); ?>
<ul>
	<li>Stand is now more proactive about advertisements in SC DMs, instead of a manual blacklist we are now employing techniques similar to our unmatched chat ad-blocking</li>
	<li>Improved protections</li>
	<li>Fixed watch_dogs-like world hacking no longer working while in freecam</li>
	<li>Fixed chat > always open breaking command box IME support</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.9', '24/03/2024 02:07'); ?>
<ul>
	<li>Added arrow buttons to the advanced interface to reorder the DLL list, with thanks to alessandromrc.</li>
	<li>Fixed "Check For Updates" saying "Everything up-to-date" when the request failed.</li>
	<li>Fixed crashing when configuration was corrupted, now the error is detected and a message is shown.</li>
</ul>
<?php printHeader('Stand 113.4', '17/03/2024 00:52'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed spectating not working on some modders</li>
	<li>Fixed unstable detour hooks with some co-loads</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 113.3', '16/03/2024 00:25'); ?>
<ul>
	<li>
		Known DM advertisers now automatically get blocked on SocialClub
		<ul>
			<li>This is currently implemented in the background script with a staff-curated list of RIDs as we do not want Stand to read DMs</li>
		</ul>
	</li>
	<li>Watch_Dogs-Like World Hacking
		<ul>
			<li>Now ignores inputs in store menus</li>
			<li>Improved name logic</li>
		</ul>
	</li>
	<li>Improved logic for "invulnerable" and "in interior" player tags</li>
	<li>Reworked VPN detection so it's not all hard-coded</li>
	<li>Lua API: Added util.sc_is_blocked, util.sc_block & util.sc_unblock</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 113.2', '09/03/2024 13:40'); ?>
<ul>
	<li>Improved protections</li>
	<li>Lua API: Added optional 'perm' parameter to menu.toggle_loop</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 113.1', '07/03/2024 16:26'); ?>
<ul>
	<li>Fixed preset font not including all glyphs for Japanese</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 113', '07/03/2024 13:54'); ?>
<ul>
	<li>Stand is now available in Japanese (日本語) thanks to Rem1ria!</li>
	<li>Self > Weapons > Lock Weapons: Added "Livery" & "Livery Tint" where applicable</li>
	<li>Added Self > Weapons > Super Melee</li>
	<li>Added Vehicle > Movement > Handling Editor > Base > Mass</li>
	<li>Added Online > Session > Clear Blacklist</li>
	<li>Added Online > Enhancements > Disable LSC Restrictions</li>
	<li>Added Online > Protections > Detections > Modded Data</li>
	<li>[Ultimate] Added Online > Spoofing > Session Spoofing > Hide Session > Offline</li>
	<li>Improved Self > Weapons > Vehicle Gun</li>
	<li>
		Lua API
		<ul>
			<li>Updated Pluto to 0.8.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
			<li>Added optional 'perm' parameter to menu.toggle</li>
			<li>Added menu.default_and_delete, menu.recursively_apply_default_state, menu.get_perm, & util.draw_sphere</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 112.4', '26/02/2024 09:35'); ?>
<ul>
	<li>Improved protections</li>
	<li>Command Box: Added IME input support</li>
	<li>Fixed vehicle search for non-latin languages</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.11', '23/02/2024 05:49'); ?>
<ul>
	<li>Fixed RGL launch option</li>
</ul>
<?php printHeader('Stand 112.3', '18/02/2024 01:38'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved script vm error recovery</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 112.2', '13/02/2024 00:19'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved rendering</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 112.1', '02/02/2024 19:08'); ?>
<ul>
	<li>Safety update. Advise restarting the game if you had injected 112.</li>
</ul>
<?php printHeader('Stand 112', '31/01/2024 10:15'); ?>
<ul>
	<li>Context Menu: Added "being session host" toggle correlation </li>
	<li>NPC Punishments: Added "Weaken"</li>
	<li>Added Self > Appearance > Outfit > Wardrobe > Search</li>
	<li>Vehicle > Los Santos Customs: Added "LSC Colour" to primary, secondary, & wheel colour lists</li>
	<li>Added Vehicle > Show Bomb Trajectory</li>
	<li>Added Online > Protections > Host-Controlled Kicks > Love Letter Lube > Disabled</li>
	<li>Added Online > Protections > Disable Turning Into Beast</li>
	<li>Added Stand > Settings > Appearance > Address Bar > Root Name > Stand</li>
	<li>Added Stand > Settings > Info Text > Drop Shadow</li>
	<li>
		Lua API
		<ul>
			<li>Added entities.get_bomb_bay_position</li>
			<li>Added directx.has_texture_loaded, directx.get_texture_dimensions, directx.get_texture_character, directx.draw_texture_by_points, & directx.draw_circle</li>
			<li>Added optional draw_origin_3d parameter to directx.draw_text</li>
		</ul>
	</li>
	<li>Fixed crash event NB false-positives</li>
	<li>Fixed weirdness with colour transparency</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.7', '24/01/2024 06:16'); ?>
<ul>
	<li>Improved Online > Transitions > Seamless Session Switching</li>
	<li>Fixed Online > Enhancements > Disable Nano Drone Ability Cooldown</li>
	<li>Lua API: Fixed directx.get_text_size_client</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.6', '17/01/2024 00:15'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed World > Atmosphere > Override Weather</li>
	<li>Fixed sometimes causing failure to join job sessions via phone invites</li>
	<li>Fixed being able to die despite immortality in rare circumstances</li>
	<li>Fixed jank with session type spoofing and session codes</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.5', '08/01/2024 16:34'); ?>
<ul>
	<li>Reverted default DNS strategy</li>
	<li>Lua API: async_http fail callback now receives a reason string</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.4', '06/01/2024 14:25'); ?>
<ul>
	<li>Improved Online > Session > Be Alone</li>
	<li>Updated default DNS strategy so connections are hopefully established more reliably</li>
	<li>Fixed a race condition with command box suggestions</li>
	<li>Lua API: Updated Pluto to 0.8.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.3', '31/12/2023 06:27'); ?>
<ul>
	<li>Fixed Online > Session > Be Alone: Left Due To Cheating</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.2', '27/12/2023 05:22'); ?>
<ul>
	<li>Improved love letter lube detection</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111.1', '26/12/2023 05:34'); ?>
<ul>
	<li>Added Online > Protections > Detections > Love Letter Lube</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 111', '23/12/2023 01:32'); ?>
<ul>
	<li>
		Context Menu
		<ul>
			<li>Added "Apply Default State To Children"</li>
			<li>Added "chatting" toggle correlation</li>
		</ul>
	</li>
	<li>Added Self > Weapons > When Shooting... & When Aiming... > Repair</li>
	<li>Added Vehicle > Spawner > List Of Spawned Vehicles</li>
	<li>Added Vehicle > Movement > Smooth Coasting</li>
	<li>Added Vehicle > Movement > Drift Mode</li>
	<li>Added Vehicle > Light Signals > Mute Sirens</li>
	<li>Added Vehicle > Lock On To All Vehicles</li>
	<li>Added Online > Enhancements > All Players In Player List</li>
	<li>Added Player(s) > Friendly > Give RP</li>
	<li>Added Player > Trolling > Vehicle > Lock Doors</li>
	<li>Updated Pluto to 0.8.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.14', '18/12/2023 19:35'); ?>
<ul>
	<li>Fixed Stand User Identification not working consistently</li>
	<li>Fixed Spoofed K/D and Spoofed Rank false-positives</li>
	<li>Fixed Copy Address: Focus Link sometimes using wrong name</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.13', '15/12/2023 18:42'); ?>
<ul>
	<li>Improved pop tyres to allow popping of specific tyres</li>
	<li>Fixed failing to save Player History on fresh installations</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.12', '14/12/2023 00:04'); ?>
<ul>
	<li>Fixed exceptions when aiming at players with watch_dogs-like world hacking</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.11', '13/12/2023 20:15'); ?>
<ul>
	<li>Improved vehicle kick protection</li>
	<li>Fixed join ceo/mc</li>
	<li>Fixed kick event false-positive with new interiors</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.10', '12/12/2023 23:34'); ?>
<ul>
	<li>Fixed unusual event false-positives</li>
	<li>Fixed auto-deploy countermeasures</li>
	<li>Fixed reading of RPM</li>
	<li>Fixed reading of remote player waypoints</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.9', '12/12/2023 19:34'); ?>
<ul>
	<li>Fixed love letter kick</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.8', '12/12/2023 18:01'); ?>
<ul>
	<li>Updated for game version 1.68-3095</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.7', '09/12/2023 13:03'); ?>
<ul>
	<li>Fixed unintended Lua errors</li>
</ul>
<?php printHeader('Stand 110.6', '08/12/2023 10:55'); ?>
<ul>
	<li>Improved command box tab completions</li>
	<li>Fixed speedometer not working while parachuting</li>
	<li>Fixed some issues with command box suggestions</li>
	<li>
		Lua API
		<ul>
			<li>Added v3.addNew, v3.subNew, v3.mulNew, v3.divNew</li>
			<li>List action item data can now specify value independent of order</li>
			<li>List action item data can now specify category</li>
			<li>Fixed player commands not having their states defaulted when player leaves</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.5', '01/12/2023 07:30'); ?>
<ul>
	<li>Improved World > AR GPS</li>
	<li>Fixed always detecting khanjali as indestructible</li>
	<li>
		Lua API
		<ul>
			<li>Added util.get_gps_route</li>
			<li>Fixed inconsistent order of list action items</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.4', '24/11/2023 01:55'); ?>
<ul>
	<li>All block join options are now applied as a kick reaction when non-host for consistency</li>
	<li>Improved input handling</li>
	<li>Improved "Lessen Tyre Burnouts"</li>
	<li>Fixed modded explosion false-positives</li>
	<li>Fixed some instances of command box input leaking to the game</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.3', '18/11/2023 02:37'); ?>
<ul>
	<li>Optimised garbage collection for internal Lua script data</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.2', '16/11/2023 01:09'); ?>
<ul>
	<li>Addressed a safety concern when unloading Stand</li>
	<li>Improved mobile radio & lock radio station</li>
	<li>Fixed outfit previews not applying props like helmets</li>
	<li>Lua API: Added entities.is_invulnerable</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110.1', '12/11/2023 17:13'); ?>
<ul>
	<li>Fixed "chatting without typing" detection</li>
	<li>Fixed chat timestamp not showing for some outgoing messages</li>
	<li>Fixed yeet: legacy</li>
	<li>Lua API: Added players.is_out_of_sight</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 110', '11/11/2023 16:41'); ?>
<ul>
	<li>Added Self > Appearance > Animations > Object Animations</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > License Plate > Lock License Plate Text</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Roof Livery</li>
	<li>Added Vehicle > Movement > Lessen Tyre Burnouts</li>
	<li>Added Vehicle > Countermeasures > Periodic Deployment</li>
	<li>Added Vehicle > Fly Through Windscreen</li>
	<li>Added Online > Protections > Events > Unusual Event</li>
	<li>Added Online > Quick Progress > Stat Editor</li>
	<li>Added Online > Chat > Timestamp In Messages</li>
	<li>Added Player(s) > Teleport > Teleport To My Objective</li>
	<li>Added Player > Trolling > Attackers > Presets > "Send Military (Combined Arms)" & "Send Spooky Phantoms"</li>
	<li>Added Player > Trolling > Gravitate NPCs</li>
	<li>Made more teleport commands available for other players</li>
	<li>Lua API: Updated Pluto to 0.7.4 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.6', '07/11/2023 21:28'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved World > Inhabitants > Traffic > Traffic Colour</li>
	<li>Improved command box tab completions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.5', '04/11/2023 19:18'); ?>
<ul>
	<li>Fixed false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.4', '31/10/2023 11:58'); ?>
<ul>
	<li>Fix vehicle control issues with no blood</li>
	<li>Lua API: Replaced SCRIPT_CAN_CONTINUE and SCRIPT_SILENT_STOP with util.can_continue</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.3', '24/10/2023 13:08'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.2', '20/10/2023 08:13'); ?>
<ul>
	<li>[Regular] Re-added "Request Member List" to session views in player history & session browser</li>
	<li>Re-added Stand > Settings > Session Joining > Check If Join Will Succeed</li>
	<li>Reworked Player > Trolling > Vehicle > Spin</li>
	<li>Fixed World > Inhabitants > NPC Aim Punishments > Punish Only If Aiming At Me</li>
	<li>Fixed some more cases of mouse position being updated when it shouldn't be</li>
	<li>Fixed possible exceptions when Lua start was delayed</li>
	<li>Fixed possibly corrupting Lua stack when requesting stop</li>
	<li>
		Lua API
		<ul>
			<li>Added directx.get_text_size_client, fixed directx.get_text_size being client-based</li>
			<li>Added "game" field to menu.get_version's result</li>
			<li>Fixed util.is_bigmap_active sometimes incorrectly reporting true during SP-to-MP transition</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109.1', '12/10/2023 02:57'); ?>
<ul>
	<li>Fixed issues with co-loading</li>
	<li>Fixed chat commands reacting to chat command replies</li>
	<li>Fixed updating mouse position in response to focus updates that were not caused by user input</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 109', '11/10/2023 05:34'); ?>
<ul>
	<li>Added Self > Movement > Levitation > Apply Pitch to Entity</li>
	<li>Added Self > Weapons > Bullets In Shotgun Batch</li>
	<li>Added Vehicle > Lock Doors > Exclude Other's Personal Vehicles</li>
	<li>Added Vehicle > Auto-Drive > Drive To... > Objective</li>
	<li>Added Vehicle > Auto-Drive > No Vehicle Collision While Auto-Driving</li>
	<li>Added Online > Enhancements > Disable Nano Drone Ability Cooldown</li>
	<li>Added Online > Request Services > Request Nano Drone</li>
	<li>Added Player(s) > Trolling > Vehicle > Spin</li>
	<li>Added Player > Trolling > Vehicle > Flip</li>
	<li>Added Game > Info Overlay > Outgoing Network Events</li>
	<li>Added Game > YEET: Legacy</li>
	<li>Added Stand > Experiments > Chat Gadget</li>
	<li>Lua API: Added entities.request_control, chat.get_history, util.utf8_to_utf16 & util.utf16_to_utf8</li>
	<li>Fixed chat command replies not showing to others</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.10', '03/10/2023 23:15'); ?>
<ul>
	<li>Fixed instabilities</li>
</ul>
<?php printHeader('Stand 108.9', '03/10/2023 18:12'); ?>
<ul>
	<li>Updated for game version 1.67-3028</li>
	<li>Fixed failing to teleport while parachuting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.8', '02/10/2023 20:24'); ?>
<ul>
	<li>Fixed Lua scripts fatally erroring when attempting to play a sound</li>
</ul>
<?php printHeader('Stand 108.7', '01/10/2023 20:36'); ?>
<ul>
	<li>Fixed random "assertion failed" when typing in command box</li>
</ul>
<?php printHeader('Stand 108.6', '01/10/2023 16:04'); ?>
<ul>
	<li>Improved player arm & disarm features</li>
	<li>Fixed some weapon features behaving weirdly with vehicle weapons</li>
	<li>Fixed issues with Proton and Wine</li>
	<li>Fixed recognising numpad decimal key as delete</li>
	<li>Lua API: Added players.is_using_rc_vehicle</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.5', '24/09/2023 14:34'); ?>
<ul>
	<li>Fixed various jank with menu navigation in mouse mode</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.4', '22/09/2023 10:05'); ?>
<ul>
	<li>Improved rapid fire</li>
	<li>Improved web interface connection stability</li>
	<li>Fixed a crash when using World Editor's "Teleport To Where I'm Looking" via mouse</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.3', '19/09/2023 19:19'); ?>
<ul>
	<li>Fixed giving weapons to bodyguard pets</li>
	<li>Fixed crash when injecting on main menu</li>
	<li>Lua API: Updated Pluto to 0.7.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.2', '15/09/2023 17:55'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved time scale options, can now go above 1.0</li>
	<li>Fixed tposing with levitation</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108.1', '10/09/2023 22:36'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed command name ambiguities</li>
	<li>Lua API: Added async_http.prefer_ipv6</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 108', '06/09/2023 08:59'); ?>
<ul>
	<li>Added Self > Appearance > Death Effect</li>
	<li>
		Self > Weapons > Lock Weapons
		<ul>
			<li>Added loadouts</li>
			<li>Added "Only Remove Selected Weapons"</li>
			<li>Added tint & component locking</li>
		</ul>
	</li>
	<li>Added Self > Bodyguards > Presets</li>
	<li>Added Self > No Combat Roll Cooldown</li>
	<li>Replaced Vehicle > "Turn Engine Off" with "Toggle Engine On/Off"</li>
	<li>Added Online > Transitions > Show Array Synch Progress</li>
	<li>[Regular] Online > Player History: Added Stats</li>
	<li>Added Online > Enhancements > "Disable Kosatka Missile Cooldown" & "Disable Kosatka Missile Range Limit"</li>
	<li>Added Player > Teleport > Teleport To Player...</li>
	<li>Added Player > Trolling > Attackers > Spawn > Accuracy</li>
	<li>Added Player(s) > Trolling > Loop Bounty</li>
	<li>Added World > Inhabitants > Clear Area > No Delay</li>
	<li>Fixed regression in processing of backing out of search results causing preview entities to stay spawned</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.14', '01/09/2023 09:16'); ?>
<ul>
	<li>Fixed weapon features reading controller inputs wrong when in vehicle</li>
	<li>
		Lua API
		<ul>
			<li>Added async_http.set_method</li>
			<li>Updated Pluto to 0.7.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.13', '26/08/2023 21:54'); ?>
<ul>
	<li>Lua API: Reverted native invoker int semantics for legacy invoker, recommend upgrading to 2944b/unified invoker so errors don't go unreported</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.12', '25/08/2023 23:34'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.11', '24/08/2023 17:20'); ?>
<ul>
	<li>Improved protections</li>
	<li>
		Lua API
		<ul>
			<li>Added entities.is_player_ped</li>
			<li>Fixed nil passed to native's int parameter not raising an error</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.10', '22/08/2023 20:08'); ?>
<ul>
	<li>Fixed saved commands lagging with big player history</li>
	<li>Fixed delay when applying Lua command states</li>
	<li>Fixed a "prevented a crash" false-positive in "Monkey Business" story mission</li>
	<li>Fixed AR & ESP features for multihead monitor configurations</li>
	<li>
		Lua API
		<ul>
			<li>Added util.get_screen_coord_from_world_coord_no_adjustment</li>
			<li>Added optional single_only parameter to menu.player_list_players_shortcut</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.9', '16/08/2023 17:39'); ?>
<ul>
	<li>Fixed bodyguards cleanup</li>
	<li>Fixed issues when going from online to story mode with free edition</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.7', '14/08/2023 16:54'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed not being able to inject on Windows 7</li>
	<li>
		Lua API
		<ul>
			<li>Added players.get_lan_ip & players.get_lan_port</li>
			<li>Added optional font parameter to directx.get_text_size</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.6', '09/08/2023 16:37'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed issues when early-injecting with certain IPLs enabled in state</li>
	<li>Fixed issues when changing language while lua scripts are running</li>
	<li>Fixed issues when loading story mode save with free edition</li>
	<li>
		Lua API
		<ul>
			<li>Added directx.create_font</li>
			<li>Added optional font parameter to directx.draw_text & directx.draw_text_client</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.5', '04/08/2023 03:21'); ?>
<ul>
	<li>Fixed a race condition resulting in freezing and "Bad Timing" errors</li>
</ul>
<?php printHeader('Stand 107.4', '04/08/2023 02:08'); ?>
<ul>
	<li>Addressed "Bad Timing" errors</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.3', '03/08/2023 18:53'); ?>
<ul>
	<li>Lua API: Added CommandAny:getPhysical & CommandRef:getFocusPhysical</li>
	<li>Fixed random "attempt to call a nil value" errors</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.2', '02/08/2023 15:08'); ?>
<ul>
	<li>Improved protections</li>
	<li>Updated preset fonts to include characters missing from weapon components</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107.1', '26/07/2023 20:10'); ?>
<ul>
	<li>Improved protections and fixed false-positives</li>
	<li>Patched everyone in session triggering Rockstar Anti Cheat (3) for some users</li>
	<li>Lua API: Fixed some cases where players.on_flow_event_done's "extra" was merged into "name"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 107', '22/07/2023 18:13'); ?>
<ul>
	<li>Added Self > Appearance > PTFX Trails</li>
	<li>Added Self > Weapons > Aimbot > "Magic Bullets" & "Target Bone"</li>
	<li>Added Vehicle > Movement > Handling Editor > View Handling Scripts (if you have Command Box Scripts in a "Handling" sub-folder)</li>
	<li>Added Vehicle > Movement > Special Flight</li>
	<li>Added Vehicle > Light Signals</li>
	<li>Added Online > Protections > Syncs > Attachment Spam</li>
	<li>Added Online > Protections > Block Player Model Swaps > Excludes</li>
	<li>Added Online > Protections > Force Relay Connections</li>
	<li>
		Player > Information > Connection
		<ul>
			<li>Added LAN IP</li>
			<li>Improved data availability when players are behind a relay</li>
		</ul>
	</li>
	<li>Added Player > Trolling > Vehicle > Turn Around</li>
	<li>Added Player > Trolling > Attackers > Presets > "Send BMX Gang", "Send Farmers" & "Send Minitanks"</li>
	<li>Added Player > Copy Their Waypoint</li>
	<li>Added Stand > Settings > Input > Context Option Hotkeys</li>
	<li>Context Menu: Added Copy Address: Focus Link</li>
	<li>
		Lua API
		<ul>
			<li>Added players.get_ip & players.get_port</li>
			<li>Updated Pluto to 0.7.1</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 106.4', '19/07/2023 13:07'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed love letter kick backfiring with strict NAT type</li>
	<li>
		Lua API
		<ul>
			<li>Added players.teleport_2d, players.teleport_3d, util.is_this_model_a_submarine_car, util.calculate_luminance, util.calculate_contrast & util.is_contrast_sufficient</li>
			<li>Updated Pluto to 0.7.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
			<li>Disabled compatibility mode for 'parent'</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 106.3', '12/07/2023 12:16'); ?>
<ul>
	<li>Improved semantics of using sliders via command box</li>
	<li>Fixed breaking CEO vehicles</li>
	<li>Fixed anti-entity spam interfering with survival missions</li>
	<li>Fixed modded event (T0) false-positives during casino heist</li>
	<li>Removed "Block Love Letter Kicks" (patched by R*)</li>
	<li>
		Lua API
		<ul>
			<li>Added CommandRef:setState (menu.set_state)</li>
			<li>Added entities.get_can_migrate</li>
			<li>Updated native invoker to treat 0 as falsey if given for a boolean argument</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 106.2', '08/07/2023 09:31'); ?>
<ul>
	<li>Fixed being unable to use raiju for attackers</li>
	<li>Fixed leave reasons showing real name despite streamer spoof</li>
	<li>Fixed hostility punishments overwriting existence & proximity punishments</li>
	<li>Fixed owoify labels breaking cellphone avatars</li>
	<li>Fixed session browser "asset hashes" filter</li>
	<li>Fixed "assertion failed" when right-clicking with phone out with laser sights</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.inline_rainbow & util.set_cam_quaternion</li>
			<li>menu.link can now be used with menu.set_visible & menu.get_visible</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.10', '01/07/2023 07:43'); ?>
<ul>
	<li>Fixed sometimes downloading already-downloaded DLL on inject</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.9', '01/07/2023 07:06'); ?>
<ul>
	<li>Fixed not recognising EGS installation for some users</li>
	<li>Fixed double-downloading DLL</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.7', '30/06/2023 16:36'); ?>
<ul>
	<li>Made "Launch" button more idiot-proof</li>
	<li>Fixed not cleaning up bin files</li>
</ul>
<?php printHeader('Stand 106.1', '29/06/2023 06:42'); ?>
<ul>
	<li>Improved laser sights, should now work more consistently in first-person</li>
	<li>Fixed reacting to kick event (P0) a thousand times</li>
	<li>Lua API: Added menu.list_get_focus (:getFocus)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 106', '23/06/2023 10:52'); ?>
<ul>
	<li>Added Self > Movement > Drunk Mode</li>
	<li>Added Vehicle > Current Personal Vehicle > Return To Storage</li>
	<li>Added Vehicle > Los Santos Customs > Random Upgrade: "Only Visually", "Only Performance", & "Only Performance & Spoiler"</li>
	<li>Added Vehicle > Auto-Drive</li>
	<li>Added Online > Enhancements > Thousands Separator For Money</li>
	<li>Added Online > Request Services > Request Helicopter Pickup: Supervolito</li>
	<li>Re-added Player(s) > Kick > Ban</li>
	<li>Added World > Inhabitants > NPC Hostility Punishments</li>
	<li>Added Game > Info Overlay > Keep-Alive Connections</li>
	<li>Added Stand > Settings > Appearance > Command Info Text > Show Owning Script</li>
	<li>Improved "Fix Asset Hashes"</li>
	<li>Fixed PTFX protections</li>
	<li>
		Lua API
		<ul>
			<li>Added players.send_sms, util.get_objects, util.get_model_info, util.is_valid_file_name, util.rgb2hsv, util.hsv2rgb, util.set_waypoint, memory.tunable & memory.tunable_offset</li>
			<li>Changed window to create stateful commands from 1 to 100 ticks</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.9', '18/06/2023 12:46'); ?>
<ul>
	<li>Fixed script locals regression</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.8', '18/06/2023 10:14'); ?>
<ul>
	<li>Fixed "disable daily expenses", "reveal off the radar players" & "remote control any vehicle" not working consistently</li>
	<li>Fixed tuning for Hao's Special Works vehicles</li>
	<li>Lua API: Added util.spoof_script_thread</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.7', '15/06/2023 12:05'); ?>
<ul>
	<li>Improved player summoning</li>
	<li>Improved vtol management</li>
	<li>Fixed leave reasons</li>
	<li>Fixed invite to session</li>
	<li>Fixed not doing early-out when opening third eye</li>
	<li>Removed other patched features: transaction error, send sms, send to cutscene, indecent exposure crash</li>
	<li>
		Lua API
		<ul>
			<li>Updated players.add_detection to return CommandRef</li>
			<li>Fixed players.get_org_type</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.6', '14/06/2023 10:59'); ?>
<ul>
	<li>
		Updated for game version 1.67-2944
		<ul>
			<li>Removed breakup, ban, & confusion kicks</li>
			<li>Removed host kick karma</li>
			<li>Removed breakup kick reactions</li>
			<li>Removed lessen breakup kicks as host</li>
			<li>Removed player(s) > teleport to cayo perico</li>
		</ul>
	</li>
	<li>Improved Lock Time to also save locked time in its state</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.5', '10/06/2023 11:31'); ?>
<ul>
	<li>Improved fix vehicle's behaviour as passenger</li>
	<li>Fixed vanishing of Online > Chat > "Always Open" & "Open Chat When Scrolling"</li>
	<li>Fixed screenshot mode with Online > Chat > Always Open</li>
	<li>Fixed rendering issues with game pools size multiplier</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.4', '08/06/2023 06:56'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.3', '06/06/2023 06:37'); ?>
<ul>
	<li>Improved speed of repository downloads</li>
	<li>Fixed sometimes being unable to move after transforming</li>
	<li>Lua API: Fixed latest natives lib not loading for some users</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.2', '01/06/2023 07:47'); ?>
<ul>
	<li>Patched a crash related to first-person view</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.player_list_players_shortcut, players.is_visible, entities.get_upgrade_value, entities.get_upgrade_max_value & entities.set_upgrade_value</li>
			<li>Added entities.delete, entities.give_control, & updated many entities functions to take handle or pointer</li>
			<li>Updated v3 void functions to return first argument</li>
			<li>Improved TLS implementation for more compatibility and to side-step some server bugs</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105.1', '28/05/2023 18:48'); ?>
<ul>
	<li>Fixed modded event TA false-positives</li>
	<li>Fixed movement commands not respecting sprint multiplier below 1.0</li>
	<li>Fixed respawn in SP with floppy mode</li>
	<li>Fixed blocking game when log to console is blocked by selection</li>
	<li>
		Lua API
		<ul>
			<li>Added players.add_detection, util.new_toast_config & util.toast_config_get_flags</li>
			<li>Added click_type argument to menu.colour's on_change callback</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 105', '27/05/2023 02:46'); ?>
<ul>
	<li>Added Self > Movement > Floppy Mode</li>
	<li>Added Self > Weapons > Proximity Rockets</li>
	<li>Added Self > Weapons > Instant Proximity Mine Detonation</li>
	<li>Vehicle > Los Santos Customs > Appearance > Wheels > Wheels Category: Added track wheels</li>
	<li>Added Vehicle > Movement > Gravity Multiplier > Not In Aircraft</li>
	<li>Added Vehicle > Lock Doors > Only When Vacant</li>
	<li>Added Online > Protections > Detections > Hidden From Player List</li>
	<li>Added Online > Protections > Block Player Model Swaps</li>
	<li>Added Online > Reset Ped Headshots</li>
	<li>Added Player(s) > Friendly > Vehicle > Fix Vehicle</li>
	<li>Added World > Inhabitants > Delete All Ropes</li>
	<li>Added Game > Info Overlay > Projectiles</li>
	<li>Added Game > Wooting Analog Support</li>
	<li>Added analog input support to Stand's movement commands</li>
	<li>Lua API: Updated Pluto to 0.6.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 104.3', '23/05/2023 17:39'); ?>
<ul>
	<li>Fixed random exceptions</li>
	<li>Lua API: Added support for menu.delete of link</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 104.2', '21/05/2023 15:08'); ?>
<ul>
	<li>Added support for sub-folders in "Profiles"</li>
	<li>Fixed failing to download ISP data</li>
	<li>
		Lua API
		<ul>
			<li>Added entities.get_head_blend_data & util.ujoaat</li>
			<li>Added "class" to inner tables in util.get_vehicles result</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.6', '19/05/2023 03:37'); ?>
<ul>
	<li>Fixed failing to open for first-time users</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.5', '18/05/2023 22:51'); ?>
<ul>
	<li>Title bar for changelog window is now in dark mode as well (thanks to alessandromrc)</li>
	<li>Fixed being able to open multiple instances</li>
</ul>
<?php printHeader('Stand 104.1', '16/05/2023 12:53'); ?>
<ul>
	<li>Improved performance of bodyguards</li>
	<li>Fixed "driveby with all weapons" not correctly restoring data on disable</li>
	<li>Fixed "game pool size multiplier" not being capped if memory pool size is unmodified</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 104', '14/05/2023 11:56'); ?>
<ul>
	<li>Context menu: Added "being in freemode" toggle correlation</li>
	<li>Added Self > Movement > Total Freedom</li>
	<li>Added Self > Regeneration Rate</li>
	<li>Added Vehicle > Spawner > Spawned Vehicles License Plate</li>
	<li>Added Vehicle > Countermeasures</li>
	<li>Added Online > Protections > Detections > Modded Organisation Name</li>
	<li>Added Online > Protections > Delete Modded Pop Multiplier Areas</li>
	<li>Added Player > Information > Status > Organisation</li>
	<li>Added Player > Trolling > Attackers > Spawn > Vehicle</li>
	<li>Added Player > Trolling > Attackers > "Presets" & "Fill Vehicles"</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Sticky Selection</li>
	<li>Added Game > Info Overlay > GPU Overhead (ms)</li>
	<li>Lua API: Added menu.get_indicator_type, menu.set_indicator_type & CommandRef.indicator_type</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103.5', '13/05/2023 13:21'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed crash event T6 false-positives</li>
	<li>Fixed modded event N5 false-positives</li>
	<li>Fixed several issues that could happen while the repository is updating scripts</li>
	<li>Fixed unpausing in SP taking exponentially longer if a lua script is running</li>
	<li>Fixed crash after force-unloading when certain features were enabled</li>
	<li>Lua API: Added async_http.have_access</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103.4', '08/05/2023 11:52'); ?>
<ul>
	<li>Improved crash protection</li>
	<li>Improved kick from personal vehicle protection</li>
	<li>Lua API: Fixed chat.send_message</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103.3', '05/05/2023 14:44'); ?>
<ul>
	<li>Fixed bypass profanity filter</li>
	<li>Fixed error resumption in script vm reimplementation</li>
	<li>
		Lua API
		<ul>
			<li>Added players.list_only & players.list_except</li>
			<li>Updated Pluto to 0.6.2 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103.2', '03/05/2023 09:35'); ?>
<ul>
	<li>Fixed anti-entity spam interfering with rapid-fire of some weapons</li>
	<li>Fixed "request & drive at my position" re-requesting personal vehicle that's already out</li>
	<li>Fixed modded event T1 & T6 false-positives</li>
	<li>Lua API: Added optional "flavour" argument to util.require_natives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103.1', '28/04/2023 10:16'); ?>
<ul>
	<li>Added Player > Status > Weapon</li>
	<li>Fixed blocked report attempt showing string not found error</li>
	<li>Fixed logging outgoing messages twice with "send all chat messages"</li>
	<li>Fixed Player(s) > Friendly > Vehicle > Upgrade</li>
	<li>Fixed getting stuck in PRE_FM_LAUNCH_SCRIPT when doing quittosp with xmas weather override</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 103', '27/04/2023 10:09'); ?>
<ul>
	<li>Command Box: Added tab completion</li>
	<li>Added Self > Respawn Delay</li>
	<li>Added Vehicle > Spawner > On Foot & In Vehicle Behaviour > Spawn Like Personal Vehicle</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > License Plate > "Randomise" & "Ticks Per Second"</li>
	<li>Added Online > Session > Custom Vote Kick Threshold</li>
	<li>Added Online > Enhancements > Ensure Clean Races</li>
	<li>Added Online > Chat > Send All Chat Messages</li>
	<li>Online > Chat > Show All Chat Messages is now available in Free Edition</li>
	<li>Added Online > Spoofing > Hide From Player List</li>
	<li>Added Player(s) > Trolling > Vehicle > Slippery Tyres</li>
	<li>
		World > Inhabitants > Player Aim Punishments
		<ul>
			<li>Added more exclusions</li>
			<li>Added "Die" punishment</li>
		</ul>
	</li>
	<li>Improved bypass profanity filter</li>
	<li>Improved "remote control" & "follow me"</li>
	<li>Fixed error handling in script vm reimplementation</li>
	<li>
		Lua API
		<ul>
			<li>Added players.are_stats_ready, players.on_flow_event_done, entities.give_control_by_handle, entities.give_control_by_pointer, util.get_session_code, util.stat_get_type, util.stat_get_int64, memory.read_binary_string & memory.write_binary_string</li>
			<li>Added read & write methods to allocated memory userdata</li>
			<li>Disabled compatibility mode for 'export'</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 102.1', '22/04/2023 05:34'); ?>
<ul>
	<li>You can now exclude friends from Online > Reactions > RID Join Reactions</li>
	<li>Improved reliablity of attackers</li>
	<li>Fixed a modded event (T6) false-positive</li>
	<li>Lua API: Added util.get_tps</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 102', '16/04/2023 03:48'); ?>
<ul>
	<li>Context menu: Added format selection to "Copy Address"</li>
	<li>Added Self > Appearance > Outfit > Hair Colour: Highlight</li>
	<li>Self > Weapons: Added "Range" to target selection for aimbot & triggerbot</li>
	<li>Added Vehicle > Lock Doors</li>
	<li>Replaced Online > Session > Block Joins > "From Kicked Players" with "From Removed Players"</li>
	<li>Added Online > Session > Automatically Rejoin Desynced Sessions</li>
	<li>Online > Protections > Block Join Karma > Block Join Karma: Added notification options</li>
	<li>Added Online > Quick Progress > Nightclub Popularity > Lock Nightclub Popularity</li>
	<li>Added Players > All Players > Excludes > Exclude Organisation Members</li>
	<li>Added Player(s) > Friendly > Vehicle > Can't Be Locked On</li>
	<li>Added Player(s) > Weapons > Give Weapons</li>
	<li>Fixed "Blips On Spawned Vehicles" preventing others from driving your spawned vehicles</li>
	<li>
		Lua API
		<ul>
			<li>Added optional include_crew_members & include_org_members arguments to players.list</li>
			<li>Updated Pluto to 0.6.1</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.4', '12/04/2023 05:30'); ?>
<ul>
	<li>Title bar is now dark to fit theme (thanks to Maddy)</li>
</ul>
<?php printHeader('Stand 101.3', '09/04/2023 20:55'); ?>
<ul>
	<li>Fixed a crash event false-positive</li>
	<li>Fixed player bar not respecting screenshot mode</li>
	<li>Fixed screenshot mode not hiding ambient challenges leaderboard</li>
	<li>Fixed "prevent renderer working to death" also preventing buildings/ground from drawing</li>
	<li>Lua API
		<ul>
			<li>Added util.give_script_host</li>
			<li>Updated Pluto to 0.6.0 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)
				<ul>
					<li>Compatibility mode is enabled for 'new', 'class', 'parent' & 'export' so you can make sure nothing will break when we disable it soon</li>
				</ul>
			</li>
			<li>Fixed util.write_colons_file not escaping keys</li>
		</ul>
	</li>
	<li>Some other improvement and bugfixes</li>
</ul>
<?php printHeader('Stand 101.2', '03/04/2023 20:04'); ?>
<ul>
	<li>Fixed lock weapons still giving infinite ammo</li>
	<li>Fixed player history search via rid</li>
	<li>Lua API: Added entities.detach_wheel</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 101.1', '26/03/2023 16:57'); ?>
<ul>
	<li>Fixed some modded explosion false-positives</li>
	<li>Fixed lock weapons giving infinite ammo</li>
	<li>Fixed double-encoding path for lua http requests</li>
	<li>Lua API: Added util.set_nullptr_preference</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 101', '22/03/2023 13:28'); ?>
<ul>
	<li>Added Self > Appearance > Preserve Walk Style During Combat</li>
	<li>Added Self > Weapons > Lock Weapons</li>
	<li>Added Self > Weapons > Triggerbot > Magic Bullets</li>
	<li>Added Vehicle > Spawner > Blips On Spawned Vehicles</li>
	<li>Added Vehicle > Movement > Horn Boost</li>
	<li>Added Vehicle > Weapon Wheel In Vehicles</li>
	<li>Added Online > Player History > Meta > Tracked Players</li>
	<li>Added Online > Protections > Events > Remove Weapon Event</li>
	<li>Added Online > Protections > Detections > "Explosion Blaming" & "Modded Explosion"</li>
	<li>Added Online > Mental State > Lock Mental State</li>
	<li>Added Player > Trolling > Ram > Invisibility</li>
	<li>Added Player > Trolling > Fake Money Drop</li>
	<li>Improved protections and fixed false-positives</li>
	<li>Fixed block join reaction set to strangers also blocking friends</li>
	<li>Lua API: Added entities.set_rpm, entities.vehicle_get_handling, entities.handling_get_subhandling & util.open_folder</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.10', '15/03/2023 20:27'); ?>
<ul>
	<li>Fixed co-loading detection</li>
	<li>Fixed indecent exposure crash</li>
	<li>Fixed being unable to apply some modded outfits</li>
	<li>Fixed watch_dogs-like world hacking not resolving some vehicle labels</li>
	<li>Fixed attempting to skip warning too soon playing error sound even with sfx off</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.9', '12/03/2023 18:21'); ?>
<ul>
	<li>Fixed random crashes relating to pickups</li>
</ul>
<?php printHeader('Stand 100.8', '12/03/2023 14:45'); ?>
<ul>
	<li>Patched being unable to upload custom avatars</li>
	<li>Improved protections</li>
	<li>"Reveal Invisible Players" will no longer reveal yourself</li>
	<li>Futher improved cacheless pattern scan performance</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.7', '10/03/2023 08:21'); ?>
<ul>
	<li>Improved cacheless pattern scan performance</li>
	<li>Fixed teleport gun</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.6', '08/03/2023 08:00'); ?>
<ul>
	<li>Improved receive consistency with bypass profanity filter</li>
	<li>Fixed detecting self for damage multiplier despite anti-detection</li>
	<li>Fixed Engwish & Howny Engwish</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.5', '06/03/2023 08:27'); ?>
<ul>
	<li>Improved bypassed message filter detection</li>
	<li>Improved chat spam detection</li>
	<li>
		Lua API
		<ul>
			<li>Added players.get_weapon_damage_modifier & players.get_melee_weapon_damage_modifier</li>
			<li>Fixed menu.get_menu_name, menu.get_commands_names, & menu.get_help_text not working on detached commands</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.4', '02/03/2023 08:38'); ?>
<ul>
	<li>Fixed sending of targeted messages</li>
	<li>Fixed breakup bandaid breaking chat message sending</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.3', '02/03/2023 07:07'); ?>
<ul>
	<li>Re-added bypass profanity filter</li>
	<li>Fixed a send to job false-positive when starting gang attack</li>
	<li>Removed buttplug kick</li>
	<li>Removed blind-fire breakup kick</li>
	<li>Lua API: Updated Pluto to 0.5.3 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100.2', '28/02/2023 16:02'); ?>
<ul>
	<li>
		Updated for 1.66-2845
		<ul>
			<li>Removed profanity filter bypass</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 100.1', '27/02/2023 03:47'); ?>
<ul>
	<li>Game pool size multiplier now increases "HandlingData" pool again</li>
	<li>Fixed not being able to load custom dlcs with mouse click</li>
	<li>Fixed fatal game error when using elegant on all</li>
	<li>Fixed exception when using buttplug kick as host with mouse click</li>
	<li>Fixed duplicate "Extra Checksum" in profile</li>
	<li>Fixed "Mock Chat Message" & "OwO-ify Chat Messages" not being toggles</li>
	<li>Fixed engine power multiplier tick handler staying registered even when set to 1.0</li>
	<li>Fixed changing notifcation type from "custom position" to "next to map" not causing grid update</li>
	<li>Fixed view staying in active list when doing repeat tutorial with tabs off</li>
	<li>Fixed straight to voicemail not disabling</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 100', '25/02/2023 02:14'); ?>
<ul>
	<li>Replaced Self > Bodyguards > Spawn > "Weapon" with "Primary Weapon" & "Secondary Weapon"</li>
	<li>Added Self > Bodyguards > Behaviour</li>
	<li>Added Vehicle > Movement > Handling Editor > Save As Command Box Script</li>
	<li>Added Vehicle > Movement > Engine Power Multiplier</li>
	<li>Added Online > Transitions > Matchmaking > Asset Hashes (join sessions with modified assets & restrict sessions with custom checksums)</li>
	<li>Added Online > Session > Block Joins > "From Strangers" & "Notifications"</li>
	<li>Added Online > Session Browser > More Filters > Asset Hashes</li>
	<li>Added Online > Reactions > Particle Spam Reactions</li>
	<li>Added Player(s) > Friendly > Vehicle > Engine Power Multiplier</li>
	<li>Added Player > Trolling > Block Passive Mode</li>
	<li>Added Player > Trolling > Particle Spam > "Scale" & "Interval (ms)"</li>
	<li>[SP|Regular] Added Game > Custom DLCs (load & spawn add-on vehicles with ease)</li>
	<li>Added Stand > Settings > Appearance > Header > Background Blur</li>
	<li>Improved Vehicle > Movement > Handling Editor: Now with more precision</li>
	<li>Improved Game > Early Inject Enhancements > Game Pools Size Multiplier (should now cause a lot less problems, and you're gonna need it if you wanna load 15+ custom DLCs at once)</li>
	<li>Session: Thunder Weather is now available in Basic Edition</li>
	<li>Fixed fill ammo & infinite ammo not working with special types (incendiary, etc.)</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.link, menu.get_target, menu.set_target and respective CommandRef shorthands</li>
			<li>Added menu.get_precision, menu.set_precision, menu.add_value_replacement and respective CommandRef shorthands</li>
			<li>Float sliders are now their own type (COMMAND_SLIDER_FLOAT) instead of COMMAND_SLIDER</li>
			<li>Renamed action_slider to textslider and slider_text to textslider_stateful (friendly reminder that list_action and list_select should be preferred)</li>
			<li>Fixed entities.set_can_migrate always implying true</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99.5', '21/02/2023 21:31'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed a "Kick From Vehicle" false positive during seamless transition</li>
	<li>
		Lua API
		<ul>
			<li>Added INVALID_GUID constant as a less magic-y way to check if entities.get_user_vehicle_as_handle had no return</li>
			<li>Re-added os.remove & os.rename</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99.4', '18/02/2023 21:12'); ?>
<ul>
	<li>Improved "RC Vehicle" Tag</li>
	<li>Fixed session code only showing "N/A" for some people</li>
	<li>Lua API: Updated Pluto to 0.5.2 (Enum statement now supports compile-time constant variables when setting value)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99.3', '14/02/2023 21:06'); ?>
<ul>
	<li>Fixed Lua "require" not working on some systems</li>
	<li>Lua API: Added pointer return type for native invoker (natives-1676318796 now available in the repository)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99.2', '13/02/2023 15:00'); ?>
<ul>
	<li>Fixed a rare lua script starting issue</li>
	<li>
		Lua API
		<ul>
			<li>Added lang.is_code_valid, lang.find_builtin, lang.is_mine & util.draw_centred_text</li>
			<li>Added optional reinterpret_floats argument to util.trigger_script_event</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99.1', '11/02/2023 13:22'); ?>
<ul>
	<li>Fixed teleport to waypoint placing you too high up</li>
	<li>Lua API: Updated Pluto to 0.5.1 (<a href="https://pluto.do/changes" target="_blank">https://pluto.do/changes</a>)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 99', '10/02/2023 12:29'); ?>
<ul>
	<li>Added Vehicle > Can't Be Dragged Out</li>
	<li>Online > Player History: Added "Fake Friend" as an additional tracking option</li>
	<li>
		Online > Protections
		<ul>
			<li>Added Events > Modded Damage Event</li>
			<li>Replaced "session spoofing" detection with "presence spoofing" detection</li>
			<li>Added Delete Stale Objects</li>
			<li>Added options to exempt friends from some breakup and buttplug kick reactions</li>
		</ul>
	</li>
	<li>Added Online > Spoofing > Position Spoofing</li>
	<li>Added Online > "Reveal Invisible Players" & "Pulsating Mental State"</li>
	<li>Added Players > Settings > Tags > Invisible</li>
	<li>Added Player(s) > Friendly > Impact Particles</li>
	<li>Added Player > Trolling > Vehicle > "Detach Wheel" & "Break Off Tail Boom"</li>
	<li>Added Player > Trolling > Ram > Speed</li>
	<li>Added Player(s) > Trolling > Kill</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Hacks > Player Actions > Kill</li>
	<li>Added Game > Info Overlay > Who's Spectating Who</li>
	<li>Improved Show Camera and respective API functions to also work on people using ninja spectate method</li>
	<li>Improved spectate tag to also work on people using ninja spectate or legit with anti-detection</li>
	<li>Renamed ninja spectate method to nuts method</li>
	<li>Lua API: Added players.get_spectate_target</li>
	<li>Teleport to waypoint can now be used by other players via chat commands</li>
	<li>Fixed dinput8.dll patch</li>
	<li>Fixed util.register_file not working on some systems</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 98.6', '06/02/2023 07:05'); ?>
<ul>
	<li>Fixed nuts join method</li>
	<li>Fixed rejoin session</li>
	<li>Fixed constant blip flickering with player tags on blips</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 98.5', '05/02/2023 09:42'); ?>
<ul>
	<li>Hotfix for failures to connect to auth</li>
</ul>
<?php printHeader('Stand 98.4', '04/02/2023 08:56'); ?>
<ul>
	<li>Fixed block join karma false-positives</li>
	<li>Fixed 255.255.255.255 in player help text</li>
	<li>Fixed remote player waypoint stuff</li>
	<li>Threw the leftovers in the bin</li>
</ul>
<?php printHeader('Stand 98.3', '03/02/2023 12:04'); ?>
<ul>
	<li>
		Updated for 1.66-2824
		<ul>
			<li>Name, RID, and IP spoofing have been patched; we elected to keep name spoofing as a local-only option, the rest is gone now</li>
			<li>Removed Irresponsible Disclosure Crash (we got $800 for reporting and retesting it — next time you find a way to overwrite a vftable pointer do it yourself)</li>
			<li>Removed Pipebomb Crash</li>
			<li>Removed blind-fire non-host & buttplug kicks</li>
			<li>Removed some detections and protections that were broken/useless now</li>
		</ul>
	</li>
	<li>Patched being unable to read chat with legit spectate method</li>
</ul>
<?php printHeader('Stand 98.2', '30/01/2023 07:37'); ?>
<ul>
	<li>Fixed more lua issues with non-latin usernames</li>
</ul>
<?php printHeader('Stand 98.1', '30/01/2023 04:59'); ?>
<ul>
	<li>Added Online > Session > Session Scripts > Criminal Damage > Score</li>
	<li>Fixed back resets cursor possibly resulting in rendering bugs</li>
	<li>Fixed lua issues with non-latin usernames</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 98', '26/01/2023 23:51'); ?>
<ul>
	<li>Added "Ragdoll" to "When Aiming...", "When Shooting...", proximity punishments, & aim punishments</li>
	<li>Added Self > Weapons > Vehicle Gun</li>
	<li>
		Online > Chat
		<ul>
			<li>Added "In Team Chat" to "Bypass Message Filter" & "Bypass Character Filter"</li>
			<li>Added "Always Open"</li>
			<li>Added "Open Chat When Scrolling"</li>
		</ul>
	</li>
	<li>Added Online > Player Tags On Blips</li>
	<li>Added Player(s) > Friendly > Vehicle > Upgrade</li>
	<li>Added Player(s) > Friendly > "Fast Run Ability", "Set Rank" & "Explosive Hits"</li>
	<li>Added Player > Trolling > Ram</li>
	<li>Added Player(s) > Trolling > Trigger Business Raid</li>
	<li>Added Online > Protections > Events > Trigger Business Raid</li>
	<li>Added Stand > Settings > Appearance > Notifications > Invert Flow</li>
	<li>Added Stand > Tutorial > Dismiss</li>
	<li>Removed thunder join & script host klepto options due to serving no real purpose and being prone to breaking the session</li>
	<li>Fixed hard-coded tabs height for borders</li>
	<li>Lua API: Updated Pluto to 0.5.0 — View the changes at <a href="https://pluto.do/changelog" target="_blank">https://pluto.do/changelog</a> and documentation at <a href="https://pluto.do/docs" target="_blank">https://pluto.do/docs</a></li>
	<li>Native Invoker: Patched a possible crash when calling APPLY_FORCE_TO_ENTITY</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97.7', '24/01/2023 21:37'); ?>
<ul>
	<li>Improved protections</li>
	<li>Potential fix for "send to job" blocking heist start</li>
	<li>Fixed evacuation from deleted list ignoring how you got there</li>
</ul>
<?php printHeader('Stand 97.6', '23/01/2023 02:18'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved ceo kick to work on bosses again</li>
	<li>Improved bypass interior restrictions to allow you to stay in the clucking bell factory, likely more</li>
	<li>Fixed an instance where a new player history entry was created even tho the player was already in history</li>
	<li>There have been a variety of additional enhancements and modifications made to the menu in order to improve its overall functionality and performance. Additionally, several issues that were identified as bugs have been addressed and resolved. These efforts have resulted in a more stable and efficient menu for all users.</li>
</ul>
<?php printHeader('Stand 97.5', '21/01/2023 03:53'); ?>
<ul>
	<li>Added Stand > Experiments > Unbrick Account (also available in free edition)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97.4', '20/01/2023 19:17'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97.3', '19/01/2023 23:33'); ?>
<ul>
	<li>Fixed mobile radio not disabling in Online</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97.2', '13/01/2023 13:37'); ?>
<ul>
	<li>Fixed streamer spoofing not instantly updating player names on blips</li>
	<li>Lua API: Fixed menu.hyperlink instances being considered "unowned"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97.1', '11/01/2023 18:58'); ?>
<ul>
	<li>Patched being bailed from session when unloading with RID spoofing enabled</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 97', '07/01/2023 13:29'); ?>
<ul>
	<li>The tutorial has been overhauled</li>
	<li>Added Self > Weapons > Laser Sights</li>
	<li>Added Vehicle > "Set Vehicle Seat" & "Turn Engine Off"</li>
	<li>[Ultimate] Added non-host kick to historic players & remote session members</li>
	<li>Added Online > Protections > Events > "Kick From Interior" & "Ragdoll Event"</li>
	<li>Added Online > Protections > Detections > Modded Bounty Amount</li>
	<li>Added Online > Quick Progress > Unlocks > Unlock Free Orbital Cannon Shot</li>
	<li>Added Players > Settings > "Stop Spectating" & "Hoisted Tags"</li>
	<li>Added Player(s) > Trolling > "Set Wanted Level" & "Kick From Interior"</li>
	<li>Improved Player(s) > Trolling > Ragdoll</li>
	<li>Added Player > Information > Status > Vehicle</li>
	<li>Added World > Atmosphere > Clock > Use System Time</li>
	<li>Added Game > Disables > Disable Camera Shake</li>
	<li>Added Stand > Settings > Input > Back Resets Cursor</li>
	<li>Added some stuff to Stand > Experiments</li>
	<li>Lua API: Added players.set_wanted_level</li>
	<li>Fixed switching model not persisting weapon components</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 96.2', '02/01/2023 07:43'); ?>
<ul>
	<li>Fixed issues with disabling Script VM Reimplementation</li>
	<li>Fixed RID spoofing impacting character switcher's MP ped headshot</li>
	<li>
		Lua API
		<ul>
			<li>Added optional include_last_driven arg to get_user_vehicle functions</li>
			<li>Fixed filesystem.list_files not using UTF-8 to encode resulting paths</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 96.1', '30/12/2022 00:13'); ?>
<ul>
	<li>Fixed session browser not working with Regular edition</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 96', '29/12/2022 21:34'); ?>
<ul>
	<li>Added Self > Appearance > Respawn Effect</li>
	<li>Added Online > Chat > Reactions > Chat Spam</li>
	<li>[Ultimate] Online > Player History: Added Blind-Fire Buttplug Kick & Send Pipebomb</li>
	<li>[Regular] Online > Player History: Added Blind-Fire Breakup Kick</li>
	<li>Session Browser: Now available in Regular Edition</li>
	<li>Player History & Session Browser: Added ability to get list of session members [Regular] and kick and crash them [Ultimate]</li>
	<li>Added Online > Protections > Events > "Camera Shaking" & "Explosion Spam"</li>
	<li>[Ultimate] Online > Rockstar ID Tools: Added "Kick" & "Send Pipebomb" by name & rid</li>
	<li>Added Online > Remove Bounty</li>
	<li>Added Player(s) > Trolling > "Ragdoll" & "Shake Camera"</li>
	<li>[Regular] Added Player(s) > Kick > Ban</li>
	<li>[Regular] Added Player(s) > Crash > Pipebomb</li>
	<li>Added Stand > Settings > Session Joining > Check If Join Will Succeed</li>
	<li>Removed bad boy timeout</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 95.1', '27/12/2022 23:37'); ?>
<ul>
	<li>Improved input blocking when command box is opened</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.apply_default_state & CommandRef:applyDefaultState</li>
			<li>Added SCRIPT_CAN_CONTINUE</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 95', '24/12/2022 22:50'); ?>
<ul>
	<li>Added more animations to Self > Appearance > Animations > Animations</li>
	<li>Added "Model: Player" option to clone appearance for bodyguards & attackers</li>
	<li>Added Self > Weapons > Components</li>
	<li>Added Vehicle > Movement > Handling Editor > Car</li>
	<li>Added Online > Protections > Detections > "Chatting Without Typing" & "Bounty Spam"</li>
	<li>Replaced "Bypassed Profanity Filter" detection with "Bypassed Message Filter"</li>
	<li>Added Online > Reactions > Bounty Reaction</li>
	<li>Added new collectibles to Player(s) > Friendly > Give Collectibles</li>
	<li>Added Player(s) > Friendly > Drop Playing Cards</li>
	<li>Added Player > Trolling > Vehicle > EMP</li>
	<li>Added Player > Trolling > CEO/MC Kick</li>
	<li>Improved speculative connections</li>
	<li>Made rejoin more snappy when not the host</li>
	<li>Modded health, damage multiplier, & super jump detections are now disabled in activity sessions</li>
	<li>Fixed "leave engine running" not being persistent enough</li>
	<li>
		Lua API
		<ul>
			<li>Added players.get_bounty, players.get_net_player, players.give_pickup_reward & entities.has_handle</li>
			<li>Fixed players.get_waypoint</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.94.4', '20/12/2022 20:39'); ?>
<ul>
	<li>Fixed "disable vip work cooldown" (this was causing the interaction menu to die)</li>
	<li>Reworked modded driveby detection to fix various false-positives</li>
	<li>Improved robustness of renderer</li>
	<li>
		Lua API
		<ul>
			<li>Added CommandAny:equals(CommandAny)</li>
			<li>Added menu.set_temporary & CommandRef:setTemporary()</li>
			<li>Added CommandRef:setListActionOptions(...) & :setActionSliderOptions(...)</li>
			<li>Added CommandUniqPtr:ref()</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.94.3', '18/12/2022 18:08'); ?>
<ul>
	<li>Fixed driveby with all weapons not allowing use of throwables and some other weapons</li>
	<li>Fixed sometimes leaving script stack pointer in bad state after error recovery when not using script vm reimplementation</li>
	<li>Invoker: Fixed CLEAR_PED_TASKS_IMMEDIATELY not working on player peds</li>
	<li>Lua API: Updated Pluto to 0.4.5</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.94.2', '15/12/2022 15:18'); ?>
<ul>
	<li>Updated objects list for world editor</li>
	<li>Improved unloading and autosave</li>
	<li>Improved freeze event detection</li>
	<li>Fixed freezing players</li>
	<li>Fixed script error recovery when not using script vm reimplementation</li>
	<li>Removed drop cash, ceo kick, ceo ban & turn into random animal due to R* patching these features</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.94.1', '13/12/2022 23:34'); ?>
<ul>
	<li>Updated for 1.64-2802 Drug Wars</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.94', '11/12/2022 20:19'); ?>
<ul>
	<li>Added Self > Weapons > "No Spread", "No Recoil", "Rocket Speed Multiplier" & "Impact Particles"</li>
	<li>Added Vehicle > Los Santos Customs > Random Upgrade</li>
	<li>Added Vehicle > Leave Engine On When Exiting</li>
	<li>Added Online > Transitions > Join Group Override</li>
	<li>Added Online > Protections > Detections > Off The Radar For Too Long</li>
	<li>Added Online > Reactions > Report Reactions</li>
	<li>Added Player(s) > Kick > Pool's Closed</li>
	<li>Added World > Places > Teleportation Effect</li>
	<li>Improved Player > Join CEO/MC</li>
	<li>Fixed stream-proof rendering not working on newer Windows 11 builds</li>
	<li>
		Lua API
		<ul>
			<li>Added util.on_pre_stop</li>
			<li>Updated Soup Lua Bindings: Now with audio</li>
			<li>Fixed implicit keep_running not persisting through util.restart_script</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.93.4', '04/12/2022 11:38'); ?>
<ul>
	<li>Fixed instant lock-on</li>
	<li>Fixed player list not being refreshed when distance sorting becomes out-of-date</li>
	<li>Fixed some modded driveby false positives</li>
	<li>Lua API: Fixed on_stop handlers being called before commands are set to default state</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.93.3', '03/12/2022 10:39'); ?>
<ul>
	<li>Lua Scripts: Now also shows .pluto files</li>
	<li>Fixed "adminsnote" and "friendsnote" commands not being found</li>
	<li>Fixed prolonged "preparing teleport" when going beyond world borders</li>
	<li>Fixed crash on transition with player list distance sorting</li>
	<li>Fixed not showing centred text after submitting GeoGuessr guess</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.93.2', '29/11/2022 08:11'); ?>
<ul>
	<li>Fixed some modded driveby false-positives</li>
	<li>Addressed an error condition where other menus could interfere and cause issues</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.93.1', '25/11/2022 00:41'); ?>
<ul>
	<li>Lua API: Added lang.is_automatically_translated & lang.is_english</li>
	<li>Optimised finding commands by command name</li>
	<li>Fixed stopping session scripts</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.93', '23/11/2022 01:34'); ?>
<ul>
	<li>Added Self > Appearance > Outfit > Disable In-Vehicle Hair Scaling</li>
	<li>Added Self > Appearance > Animations</li>
	<li>Added more options to Self > Appearance > Walk Style</li>
	<li>Added Online > Protections > Detections > Modded Driveby Weapon</li>
	<li>Added Players > All Players > Issue Commands On Everyone's Behalf</li>
	<li>Added Player(s) > Friendly > Vehicle > Indestructible</li>
	<li>Added Player > Chat > Send Private Message</li>
	<li>Added Player > Trolling > Aggressive NPCs</li>
	<li>Added Player > Trolling > Particle Spam</li>
	<li>Added World > Inhabitants > Clear Area > Cages</li>
	<li>[Regular] Added World > Inhabitants > Player ESP > Box ESP</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.get_current_menu_list, menu.get_current_ui_list, menu.get_version, memory.scan(module_name, pattern) & memory.get_name_of_this_module</li>
			<li>Added optional on_active_list_update parameter to menu.list</li>
		</ul>
	</li>
	<li>Native Invoker: Patched UI3DSCENE_ASSIGN_PED_TO_SLOT so it works now</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92.5', '21/11/2022 18:11'); ?>
<ul>
	<li>Improved protections</li>
	<li>Lua API: Updated Soup Lua Bindings: Added version_compare</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92.4', '15/11/2022 17:26'); ?>
<ul>
	<li>Improved protections</li>
	<li>Lua API: Added util.set_busy</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92.3', '14/11/2022 21:39'); ?>
<ul>
	<li>Improved Self > Clumsiness</li>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92.2', '13/11/2022 02:39'); ?>
<ul>
	<li>Fixed player-specific network event reactions</li>
	<li>
		Lua API
		<ul>
			<li>Updated Pluto to 0.4.4</li>
			<li>async_http.init now supports insecure HTTP if host has "http://" prefix</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92.1', '11/11/2022 13:08'); ?>
<ul>
	<li>Improved smart kick</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.92', '10/11/2022 13:58'); ?>
<ul>
	<li>
		Self > Bodyguards
		<ul>
			<li>Added "Aggression"</li>
			<li>Added list of spawned bodyguards</li>
		</ul>
	</li>
	<li>Added Online > Protections > Detections > Blocked Network Event</li>
	<li>Added Online > Protections > Buttplug Kick Reactions</li>
	<li>Added Player > Teleport > Teleport To Their Waypoint</li>
	<li>Added Player > Trolling > Attackers</li>
	<li>Player(s) > Trolling > Vehicle > Slingshot: Added direction options</li>
	<li>Added Player > Kick > Buttplug</li>
	<li>Added Player(s) > Crash > Irresponsible Disclosure</li>
	<li>Added Game > Set Game Language</li>
	<li>Added Game > Use Script VM Reimplementation</li>
	<li>Added Stand > Clear Notifications</li>
	<li>Lua API: Added players.get_waypoint</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.3', '10/11/2022 12:27'); ?>
<ul>
	<li>Improved handling of some error conditions</li>
</ul>
<?php printHeader('Stand 0.91.4', '08/11/2022 09:48'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed other players using wanted command affecting the slider value</li>
	<li>Possibly fixed random crashes during missions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.91.3', '04/11/2022 07:48'); ?>
<ul>
	<li>Improved protections and some other stuff</li>
</ul>
<?php printHeader('Stand 0.91.2', '03/11/2022 01:49'); ?>
<ul>
	<li>Improved protections</li>
	<li>Patched being unable to go online with dinput8.dll</li>
	<li>Fixed exception when toggling "driveby with all weapons" in mouse mode</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.apply_command_states & util.request_model</li>
			<li>Fixed various thread scheduling issues</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.91.1', '01/11/2022 11:25'); ?>
<ul>
	<li>
		Lua API:
		<ul>
			<li>Added players.add_command_hook & entities.get_weapon_manager</li>
			<li>Added CommandRef:onTickInViewport, :onFocus, :onBlur, & :removeHandler</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.91', '31/10/2022 04:50'); ?>
<ul>
	<li>Added Self > Weapons > No Spooling</li>
	<li>Added Online > Transitions > Speed Up > Don't Wait For Mission Launcher</li>
	<li>Added Online > Transitions > Disable Spawn Activities</li>
	<li>Added Online > Session > Block Joins > Message</li>
	<li>
		Crashes
		<ul>
			<li>{Players > All Players > Crash} is now exclusive to Ultimate edition</li>
			<li>Individual player crashes except for Elegant are now exclusive to Regular edition</li>
			<li>[Regular] Added "BDSM" & "Indecent Exposure" crashes to individual players</li>
			<li>[Ultimate] Added "BDSM" & "Indecent Exposure" crashes to "All Players"</li>
		</ul>
	</li>
	<li>
		Added World > Watch_Dogs-Like World Hacking > Hacks
		<ul>
			<li>You can customise available hacks here</li>
			<li>Added Vehicle Actions > "Ignite" & "Slingshot"</li>
			<li>Added Player Actions > Cage</li>
		</ul>
	</li>
	<li>Added Game > Early Inject Enhancements > Speed Up Startup (on by default)</li>
	<li>
		Lua API
		<ul>
			<li>Added SCRIPT_SILENT_STOP & util.on_pad_shake</li>
			<li>util.keep_running is now implicit when creating commands or registering event handlers</li>
		</ul>
	</li>
	<li>Many other improvements and some bugfixes</li>
</ul>
<?php printHeader('Stand 0.90.5', '27/10/2022 03:20'); ?>
<ul>
	<li>Fixed refill armour</li>
	<li>Fixed vehicle indestructible with helis</li>
	<li>Fixed projectile pool patch</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.90.4', '26/10/2022 04:02'); ?>
<ul>
	<li>Updated to the latest version of TODO: &lt;File description&gt;</li>
	<li>Removed "left due to cheating" option from be alone (btw., you guys should probably reset that value in CNetGamePlayer::Shutdown if you want to avoid this message having "false-positives")</li>
</ul>
<?php printHeader('Stand 0.90.3', '24/10/2022 04:18'); ?>
<ul>
	<li>Improved personal vehicle request to also work for aircraft & special vehicles</li>
	<li>Fixed some instances where "write to log file" also controlled writing to console</li>
	<li>
		Lua API
		<ul>
			<li>Added lang.find_registered & lang.get_localised</li>
			<li>
				Updated Soup Lua Bindings
				<ul>
					<li>Added FileReader, StringReader, ZipReader, & string.fromFile</li>
					<li>Fixed json.decode getting confused by empty objects</li>
				</ul>
			</li>
			<li>Updated Pluto to 0.4.3</li>
			<li>Completely disabled compatibility mode so you don't need the "pluto_" prefix for anything anymore</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.90.2', '19/10/2022 21:44'); ?>
<ul>
	<li>
		Lua API
		<ul>
			<li>Added entities.get_owner, entities.set_can_migrate, players.is_using_vpn, players.get_host_queue_position, players.get_host_queue, & util.is_soup_netintel_inited</li>
			<li>Improved async_http.init: host can now specify port</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.90.1', '17/10/2022 17:47'); ?>
<ul>
	<li>Fixed teleport into their vehicle not working on far-away players</li>
	<li>Fixed inverted condition for "kick next host in queue" excludes</li>
	<li>Fixed joining session via code always joining as spectator</li>
	<li>Lua API: Added players.get_org_type</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.90', '16/10/2022 16:00'); ?>
<ul>
	<li>Added Self > Bodyguards</li>
	<li>Added Online > Transitions > Speed Up > "Don't Wait For Data Broadcast" & "Don't Ask For Permission To Spawn"</li>
	<li>Added Online > Session > Session Code > Spectate Session Via Code</li>
	<li>Added Online > Session > Restart Freemode Script</li>
	<li>Added Online > Player History > Meta > Clear History > Keep Players With Join Reactions</li>
	<li>Added Online > Protections > Block Entity Spam > Automatically Use Anti-Crash Cam</li>
	<li>Added Online > Protections > Prevent Renderer Working To Death</li>
	<li>Added Online > Spoofing > RID Spoofing > RID Spoofing > Level 2</li>
	<li>[Ultimate] Online > Spoofing > Host Token Spoofing > Kick Host When Joining As Next In Queue: Added player excludes</li>
	<li>Added Player > Crash > Steamroller (Rockstar feel free to get in touch with us and we'll give you a patch, no strings attached)</li>
	<li>Added Game > Rendering > Mostly Disable Rendering</li>
	<li>Added Game > Patches > Projectile Pool</li>
	<li>
		Session Joining
		<ul>
			<li>Improved Ninja & Friend Methods: Now can join solo sessions (doesn't work with RID spoof level 1)</li>
			<li>Improved Matchmaking Method: Now automatically changes targeting mode so it doesn't randomly fail</li>
			<li>Added Nuts Method (similar to matchmaking method but more reliable and can join solo sessions)</li>
			<li>Added Stand > Settings > Session Joining > Automatically Change Targeting Mode (for Ninja & Friend Methods)</li>
		</ul>
	</li>
	<li>
		Logger Rewrite
		<ul>
			<li>You will need to reconfigure "Log Chat Messages"</li>
			<li>Renamed "Write To Log" reaction to "Write To Log File"</li>
			<li>Added "Write To Console" reaction</li>
			<li>Lua API: Added TOAST_CONSOLE and TOAST_FILE; TOAST_LOGGER is now a shorthand for (TOAST_CONSOLE | TOAST_FILE)</li>
		</ul>
	</li>
	<li>
		Lua API
		<ul>
			<li>Added CommandRef:trigger, :getState, & :getDefaultState</li>
			<li>Added menu.get_name_for_config, menu.set_name_for_config, menu.is_focused, menu.get_parent, menu.get_type, menu.get_children, and the respective constants and shorthands</li>
			<li>Added util.get_closest_hud_colour</li>
			<li>Updated Pluto to 0.4.2</li>
			<li>Disabled compatibility mode for switch so you don't have to use pluto_switch anymore</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.89.4', '13/10/2022 22:20'); ?>
<ul>
	<li>Fixed block joins showing as enabled while being disabled</li>
	<li>
		Lua API
		<ul>
			<li>Updated Soup Lua Bindings: Now with json encode & decode</li>
			<li>Updated util.get_label_text to also take a hash</li>
			<li>Updated menu.remove_handler & util.remove_handler to return a boolean for success</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.89.3', '07/10/2022 17:02'); ?>
<ul>
	<li>Cumulative update to improve performance, stability, and safety</li>
</ul>
<?php printHeader('Stand 0.89.2', '05/10/2022 14:28'); ?>
<ul>
	<li>Improved performance when changing language and completing tutorial</li>
	<li>Fixed inconsistent command completion hints</li>
	<li>Fixed possibly failing to unregister hotkey when stopping lua script</li>
	<li>Lua API: Added CommandRef:refByRelPath</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.89.1', '03/10/2022 07:51'); ?>
<ul>
	<li>Improved performance when starting lua scripts</li>
	<li>Fixed projectile pool possibly overflowing</li>
	<li>Lua API: Fixed entities.get_rotation</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.89', '02/10/2022 07:54'); ?>
<ul>
	<li>
		Added Self > Weapons > "Increased Sticky Limit" & "Increased Flare Limit"
		<ul>
			<li>Patched the way the game deals with full projectile pool (delete oldest instead of refusing to spawn new projectiles)</li>
		</ul>
	</li>
	<li>Added Vehicle > Movement > Handling Editor</li>
	<li>Added Online > Enhancements > Disable Event End Countdown Audio</li>
	<li>Added Online > Player History > Meta > Clear History</li>
	<li>Added Online > Player History > [Player] > Delete</li>
	<li>Online > Session > Session Scripts: Added "Score" to "Challenges"</li>
	<li>Improved Online > Session > Player Leave Reasons: Now detects leave due to game close, orgasm kick, and NETWORK_BAIL</li>
	<li>Online > Session > Be Alone: Added "left due to cheating" option</li>
	<li>Added Player(s) > Teleport > Teleport To Casino</li>
	<li>Added Player(s) > Trolling > Vehicle > Destroy Propellers</li>
	<li>[Ultimate] Added Player > Trolling > Mugger Loop</li>
	<li>Added Stand > Settings > Command Box > Max Shown Matching Commands</li>
	<li>Added Stand > Settings > Speculative Connections</li>
	<li>Lua API: Added players.is_typing</li>
	<li>Improved Online > Reveal Off The Radar Players to also show dead players</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.88.1', '26/09/2022 00:23'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.88', '24/09/2022 23:27'); ?>
<ul>
	<li>Added Self > Movement > Freeze</li>
	<li>Added Vehicle > Garage > Search</li>
	<li>Added Vehicle > Personal Vehicles > Search</li>
	<li>Added Online > Protections > Breakup Kick Reactions</li>
	<li>Added Online > Protections > Knockoff Breakup Kick Reactions > Someone Else</li>
	<li>[Ultimate] Online > Session Browser: Added "Max Players", "Region", "Hidden", & "Bad Sport" filters</li>
	<li>[Regular] Added Online > Session > Thunder Weather</li>
	<li>
		Player(s) > Kick
		<ul>
			<li>Merged "Breakdown" into "Breakup"</li>
			<li>[Regular] Added Confusion</li>
		</ul>
	</li>
	<li>Added Game > Disable Keyboard Hook</li>
	<li>Added Stand > ASI Mods > Settings > Use Temp Folder</li>
	<li>Dropped support for C++ API</li>
	<li>
		Lua API
		<ul>
			<li>You can now add commands anywhere in the menu</li>
			<li>Added menu.shadow_root, menu.replace, menu.detach, menu.attach, menu.attach_after, menu.attach_before, menu.is_ref_valid, menu.get_applicable_players, menu.collect_garbage, & players.list_all_with_excludes</li>
			<li>Added :isValid, :delete, :detach, :attach, :attachAfter, :attachBefore, :focus, & :getApplicablePlayers methods to command references</li>
			<li>Added shorthand property accessors to command references (.menu_name, .command_names, ...)</li>
			<li>Added shorthand create methods to command references (:list, :action, ...)</li>
			<li>Improved performance of menu.delete</li>
			<li>Updated menu.ref_by_path, menu.ref_by_rel_path, & menu.ref_by_command_name to not throw an error when failed to resolve, instead returns reference where :isValid returns false</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.87.2', '20/09/2022 22:42'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved stability of Game Pools Size Multiplier</li>
	<li>Fixed labels registered by Lua scripts not properly showing on web interface</li>
	<li>Lua API: Fixed menu.set_help_text not taking a Label</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.87.1', '16/09/2022 23:13'); ?>
<ul>
	<li>Fixed chat commands reply prefix</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.87', '13/09/2022 14:33'); ?>
<ul>
	<li>Added Self > "Refill Health" & "Refill Armour"</li>
	<li>
		Online > Enhancements
		<ul>
			<li>Added "Speed Up Dialing"</li>
			<li>Improved "Disable Passive Mode Cooldown" to also skip disable cooldown</li>
		</ul>
	</li>
	<li>Added Online > Protections > Syncs > "Cage" & "World Object Sync"</li>
	<li>Added Online > Chat > Commands > "Reply Prefix" & "Reply Visibility"</li>
	<li>
		Online > Player History
		<ul>
			<li>Added Meta > SC Friends</li>
			<li>Improved search to also check notes</li>
		</ul>
	</li>
	<li>Added Player(s) > Trolling > Vehicle > "Ignite", "Pop Tyres", "Slingshot" & "Remove Doors"</li>
	<li>Added Player(s) > Trolling > Cage</li>
	<li>Replaced Stand > "Open Web Interface" with "Web Interface"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86.6', '10/09/2022 12:07'); ?>
<ul>
	<li>
		Lua API
		<ul>
			<li>Added util.on_transition_finished</li>
			<li>Chat message handlers now also receive networked & is_auto arguments</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86.5', '09/09/2022 19:21'); ?>
<ul>
	<li>Guys, help, I pressed the crash button in the mode manu and now my underwear is wet and sticky; is there a protection for this?</li>
</ul>
<?php printHeader('Stand 0.86.4', '09/09/2022 14:05'); ?>
<ul>
	<li>Improved protections</li>
	<li>Lua API: Added util.restart_script</li>
	<li>Potential fix for being unable to inject Stand after 0.86.3 (we're still not sure what causes this, so please get in touch with us, if you're affected by this)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86.3', '07/09/2022 09:06'); ?>
<ul>
	<li>Improved protections</li>
	<li>
		Lua API
		<ul>
			<li>Added util.is_interaction_menu_open</li>
			<li>async_http success callback is now also provided with header_fields & status_code</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86.2', '05/09/2022 21:08'); ?>
<ul>
	<li>
		Lua API
		<ul>
			<li>Added Soup Lua Bindings</li>
			<li>Added players.get_connect_ip, players.get_connect_port, players.get_online_ip, players.get_online_port, & lang.get_code_for_soup</li>
		</ul>
	</li>
	<li>Fixed the Command Box' "Please wait..." text being 3 pixels wider than the rest of the Command Box (We are truly sorry for any harm this oversight may have caused)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86.1', '04/09/2022 07:23'); ?>
<ul>
	<li>Fixed entity spam false-positive in LS Car Meet & Music Locker</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.86', '02/09/2022 08:02'); ?>
<ul>
	<li>Added Online > Protections > Block Entity Spam</li>
	<li>Added Online > Player History > [Player] > Whitelist Join</li>
	<li>Added Online > Player History > Meta > Players With Whitelisted Join</li>
	<li>
		Added Online > Session > Block Joins
		<ul>
			<li>Added "From Non-Whitelisted"</li>
			<li>Added a list of kicked players with the option to unblock them</li>
		</ul>
	</li>
	<li>Added Players > Settings > Tags > VPN</li>
	<li>Added Player(s) > Friendly > Turn Into Random Animal</li>
	<li>Added Player(s) > Trolling > Vehicle > "Kill" & "Delete"</li>
	<li>[Ultimate] Added Player > Trolling > Turn Into Beast</li>
	<li>[Regular] Added Player > Kick > Breakdown</li>
	<li>Added World > Editor > Tools > Delete All Spawned</li>
	<li>Updated Pluto to 0.4.0</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.15', '30/08/2022 07:43'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed some exceptions caused by new GeoIP</li>
	<li>Fixed vehicle spawn + modification command chaining</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.14', '24/08/2022 08:31'); ?>
<ul>
	<li>Fixed breakup kick backfiring when used against host</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.13', '23/08/2022 01:35'); ?>
<ul>
	<li>Fixed starting arcade game session scripts</li>
	<li>Fixed false-positives</li>
	<li>Lua API: Added players.get_focused</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.12', '18/08/2022 21:26'); ?>
<ul>
	<li>Improved protections and detections</li>
	<li>Updated GeoIP</li>
	<li>Fixed taking control of vehicle when using an "enter" command</li>
	<li>Fixed exception when player leaves while in their info list</li>
	<li>
		Lua API
		<ul>
			<li>Improved performance of invoking natives by about 58% (newer natives lib needed)</li>
			<li>Added alternative "uno" invoker mode that can push v3 instances as 3 floats</li>
			<li>Updated Pluto to 0.3.2</li>
			<li>Fixed error with invoking warning cancel callback</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.11', '06/08/2022 16:46'); ?>
<ul>
	<li>This one goes out to the suckers that pay for crash luas</li>
	<li>And the R* employees that add shit like "Stand 0.85.1" to the sigscans</li>
	<li>And the Stand developers that have no option to push silent updates</li>
	<li>👊</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.2', '04/08/2022 14:03'); ?>
<ul>
	<li>Improved handling when injection fails due to anti-virus</li>
</ul>
<?php printHeader('Stand 0.85.10', '04/08/2022 14:03'); ?>
<ul>
	<li>Fixed "commands with non-default state"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.9', '03/08/2022 22:34'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.8', '03/08/2022 16:04'); ?>
<ul>
	<li>Fixed a crash event false-positive</li>
	<li>
		Lua API:
		<ul>
			<li>Added menu.get_default_state</li>
			<li>Fixed some instances where menu.get_state reported default state as empty string</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.7', '01/08/2022 13:16'); ?>
<ul>
	<li>Fixed session scripts</li>
	<li>Fixed processing hotkeys when chatbox is open during seamless transition</li>
	<li>Removed chat spoofing related stuff as R* patched it</li>
	<li>Lua API: Added menu.get_state, players.is_marked_as_modder_or_admin, players.is_marked_as_admin, players.get_cam_pos & players.get_cam_rot</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.85.6', '29/07/2022 16:40'); ?>
<ul>
	<li>Rockstar seems to have fixed the chat issue, but we've added {Online > Chat > Show All Chat Messages} in case our patch is needed again.</li>
	<li>Fixed "gift spawned vehicles"</li>
</ul>
<?php printHeader('Stand 0.85.5', '27/07/2022 16:51'); ?>
<ul>
	<li>Reverted the patch regarding sending messages due to seemingly making things worse, but you will still be able to receive chat messages like normal just by having Stand injected.</li>
</ul>
<?php printHeader('Stand 0.85.4', '27/07/2022 14:42'); ?>
<ul>
	<li>Patched being unable to receive chat messages (This also goes for Free edition!)</li>
	<li>Patched other players being unable to receive your chat messages (this only works on some people and we're not quite sure why, but it's also available with Free edition.)</li>
	<li>
		Changes to the Lua Environment:
		<ul>
			<li>Updated to Pluto 0.3.0: https://github.com/well-in-that-case/Pluto/releases/tag/0.3.0</li>
			<li>Added Stand > Lua Scripts > Settings > enable\_warnings</li>
			<li>You can now use "continue" without the "pluto\_" prefix</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 0.85.3', '27/07/2022 07:45'); ?>
<ul>
	<li>Fixed player magnet causing crash</li>
	<li>Fixed a crash event false-positive</li>
	<li>Fixed a kick event false-positive</li>
	<li>Fixed various minor issues</li>
</ul>
<?php printHeader('Stand 0.85.2', '26/07/2022 21:12'); ?>
<ul>
	<li>Join/Spectate: Replaced "Ninja Method" with "Femboy Method"</li>
	<li>Fixed blamed explosions</li>
	<li>Fixed a modded health false-positive</li>
	<li>Fixed a kick event false-positive</li>
</ul>
<?php printHeader('Stand 0.85.1', '26/07/2022 17:56'); ?>
<ul>
	<li>Updated for 1.61-2699 The Criminal Enterprises</li>
</ul>
<?php printHeader('Stand Launchpad 1.8.1', '25/07/2022 16:40'); ?>
<ul>
	<li>Fixed problems with non-ascii usernames</li>
	<li>Fixed custom dll names being truncated in advanced view when opened in basic view</li>
</ul>
<?php printHeader('Stand 0.85', '16/07/2022 22:41'); ?>
<ul>
	<li>Added Vehicle > "Driveby In All Vehicles" & "Driveby With All Weapons"</li>
	<li>Added Online > Player History > Meta > Rockstar Admins</li>
	<li>Added Online > Session > Set Session Type</li>
	<li>Added Game > Info Overlay > Session Code</li>
	<li>Improved find commands matching algorithm</li>
	<li>Fixed send text message</li>
	<li>
		Changes to the Lua Environment, powered by Pluto:
		<ul>
			<li>We're going to gradually disable compatibility mode, starting with "case" and "when", you can now use them without the "pluto_" prefix</li>
			<li>Added _PVERSION</li>
			<li>Added repeat when</li>
			<li>Added more functions to string library</li>
			<li>Added more functions to io library</li>
			<li>"a":upper() etc is now valid</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 0.84.8', '11/07/2022 16:57'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed idle lua scripts being detected as stuck in an infinite loop under rare circumstances</li>
	<li>Updated pluto: Now has ..=</li>
</ul>
<?php printHeader('Stand 0.84.7', '28/06/2022 13:07'); ?>
<ul>
	<li>Replaced Lua with Pluto (Compatibility Mode), which adds new features, improvements, and optimisations while being compatible with existing Lua code. Learn more at <a href="https://github.com/well-in-that-case/Pluto">https://github.com/well-in-that-case/Pluto</a>.</li>
	<li>Fixed sometimes showing a warning when timeout expires</li>
</ul>
<?php printHeader('Stand 0.84.6', '28/06/2022 12:07'); ?>
<ul>
	<li>Improved player teleport to me/waypoint options</li>
	<li>Fixed sometimes being detected as co-loading despite not co-loading</li>
</ul>
<?php printHeader('Stand 0.84.5', '28/06/2022 08:17'); ?>
<ul>
	<li>Lua API: Improved util.call_foreign_function</li>
	<li>Improved stability of game pools size multiplier</li>
	<li>Fixed list rendering on non-16:9</li>
	<li>Fixed releasing hold mode hotkeys if multiple commands match</li>
</ul>
<?php printHeader('Stand 0.84.4', '19/06/2022 03:34'); ?>
<ul>
	<li>Improved crash protections</li>
</ul>
<?php printHeader('Stand 0.84.3', '18/06/2022 05:39'); ?>
<ul>
	<li>Removed a trap that caused Stand to ignore certain things with Free edition in Online</li>
</ul>
<?php printHeader('Stand 0.84.2', '17/06/2022 23:56'); ?>
<ul>
	<li>Everyone can now have an ad-free GTA Online experience and benefit from our mission-friendly protections by simply having Stand injected — no activation required!</li>
	<li>Improved crash protections</li>
	<li>Improved aimbot first-person and sniper behavior</li>
	<li>Fixed a K/D spoofing false-positive</li>
	<li>Fixed some bugs that slowed down injection-to-ui performance</li>
</ul>
<?php printHeader('Stand 0.84.1', '15/06/2022 17:50'); ?>
<ul>
	<li>Fixed transaction errors with rig blackjack and roulette</li>
	<li>Fixed disabling aimbot while aiming</li>
	<li>Fixed not enforcing silent lua start/stop with help text</li>
</ul>
<?php printHeader('Stand 0.84', '14/06/2022 16:59'); ?>
<ul>
	<li>Added Self > Weapons > Aimbot > "Show Box", "Re-engage Time (ms)", "Smoothing" & "Line-of-Sight Check"</li>
	<li>
		Online > Transitions > Matchmaking
		<ul>
			<li>"Region Override" & "Disable" are now available in Basic (Player Magnet remains exclusive to Regular and up)</li>
			<li>Added "Pool Override"</li>
		</ul>
	</li>
	<li>Added Online > Protections > Events > "Give Collectible" & "Give Collectible (Not My Boss)"</li>
	<li>Added Online > Protections > Detections > "Rockstar QA Flag" & "Cheater Flag"</li>
	<li>Added Online > Spoofing > "Rockstar QA Flag" & "Cheater Flag"</li>
	<li>Replaced player vehicle teleport options with equivalent player teleport options (that don't require them to be in/on a vehicle)</li>
	<li>Added Player(s) > Friendly > "Give Collectibles" & "Drop Cash"</li>
	<li>Added World > Places > "Teleport To..." & "Waypoint On..." > Landmarks > Mount Chiliad</li>
	<li>Replaced {Game > Camera > Field of View} slider with per-context sliders</li>
	<li>Added Game > Rendering > Visual Settings</li>
	<li>Added Game > Early Inject Enhancements > "Game Pools Size Multiplier" & "Memory Pool Size"</li>
	<li>Lua API: Added util.teleport_2d</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.83.3', '12/06/2022 21:53'); ?>
<ul>
	<li>Fixed a crash event false-positive</li>
	<li>Fixed being kicked from nightclub when armed despite total freedom</li>
	<li>Lua API: Added menu.readonly, players.send_sms, util.blip_handle_to_pointer & util.get_blip_display</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.83.2', '08/06/2022 15:32'); ?>
<ul>
	<li>Fixed infinite phone ringing</li>
	<li>Fixed pickup reactions</li>
	<li>
		For Lua Developers
		<ul>
			<li>Added Stand > Experiments > Command Gallery</li>
			<li>Added menu.slider_text</li>
			<li>Fixed v3.new</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.83.1', '07/06/2022 11:50'); ?>
<ul>
	<li>Fixed session browser</li>
</ul>
<?php printHeader('Stand 0.83', '07/06/2022 11:20'); ?>
<ul>
	<li>Added Online > Quick Progress > Casino > "Roulette Outcome" & "Always Win Blackjack"</li>
	<li>Added Online > Protections > Events > Infinite Phone Ringing</li>
	<li>
		Online > Protections > Detections
		<ul>
			<li>Improved "Invalid RP"</li>
			<li>Renamed "Invalid RP" to "Invalid Rank/RP"</li>
			<li>Added "RP-Rank Mismatch", "Spoofed Rank" & "Spoofed K/D"</li>
		</ul>
	</li>
	<li>Added Player > Friendly > Give Script Host</li>
	<li>Added Player(s) > Trolling > Infinite Phone Ringing</li>
	<li>Reworked Stand > Lua Scripts > Settings</li>
	<li>
		Lua API
		<ul>
			<li>Added util.get_clipboard_text</li>
			<li>Added alternative <code>v3.new(...)</code> syntax: <code>v3(...)</code></li>
			<li>Added <code>:</code> syntax to use v3 apis on v3 instances</li>
			<li>Added <code>#</code> syntax to get magnitude of v3 instances</li>
			<li>Natives returning Vector3s can now be used like v3 instances and, vice-versa, v3 instances can now be used like tables with x, y & z fields</li>
			<li>Removed v3.free & memory.free, this is now handled by Lua's GC</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82.5', '05/06/2022 10:24'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed some rendering bugs</li>
	<li>Fixed random failures to resolve rid to name or name to rid</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82.4', '03/06/2022 10:23'); ?>
<ul>
	<li>Fixed an invalid model sync false-positive</li>
	<li>Fixed not refreshing personal vehicles when transition is finished</li>
	<li>Fixed being unable to save state of some toggles in all players</li>
	<li>Fixed web interface bugs with select inputs</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82.3', '02/06/2022 07:04'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed rockstar id spoofing being able to be seen through when hosting session</li>
	<li>Fixed "announce in chat" not working for some events</li>
	<li>Fixed seamless for sp to mp</li>
	<li>Lua API: Added menu.set_list_action_options, players.get_position, entities.get_user_personal_vehicle_as_handle, entities.get_current_gear, entities.set_current_gear, entities.get_next_gear, entities.set_next_gear, entities.get_rpm, entities.get_gravity, entities.set_gravity, entities.set_gravity_multiplier, entities.get_draw_handler, entities.vehicle_draw_handler_get_pearlecent_colour, entities.vehicle_draw_handler_get_wheel_colour, entities.get_vehicle_has_been_owned_by_player, entities.get_player_info, entities.player_info_get_game_state, util.reverse_joaat, util.is_this_model_a_blimp, util.is_this_model_an_object, util.is_this_model_a_submarine, util.is_this_model_a_trailer, util.get_vehicles, util.is_key_down, util.call_foreign_function, util.get_rtti_name, util.get_rtti_hierarchy & util.set_particle_fx_asset</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82.2', '31/05/2022 07:44'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed super jump preventing combat roll when aiming a throwable</li>
	<li>Fixed rank & k/d spoofing not affecting pause menu player list (you still won't see it on your end, tho)</li>
	<li>Fixed wheels category & player bar background blur sliders</li>
	<li>Fixed being unable to save radio station overrides</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82.1', '29/05/2022 06:08'); ?>
<ul>
	<li>Fixed ranges on key repeat interval sliders and lua click_sliders</li>
	<li>Fixed resetting run speed on injection</li>
	<li>Fixed showing "is already on"-type responses for scripted clicks</li>
	<li>Fixed possibly showing command box in response to scripted click</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.82', '29/05/2022 02:55'); ?>
<ul>
	<li>[Regular|Story Mode] Added Vehicle > Last Vehicle > Follow Me</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Wheels > Wheels Colour</li>
	<li>Added Online > Enhancements > "Toggleable Big Map" & "Allow Pausing"</li>
	<li>Added World > Inhabitants > Clear Area</li>
	<li>
		World > Watch_Dogs-Like World Hacking
		<ul>
			<li>Replaced "Show Reticle" and "Draw Line To Targets" with separate toggles for when a target is or isn't selected</li>
			<li>Added "Show Box" with separate toggles for when a target is or isn't selected</li>
		</ul>
	</li>
	<li>
		Stand > Settings > Appearance
		<ul>
			<li>Added Tabs > "Height" & "Text"</li>
			<li>Added Commands > Text</li>
			<li>Added List Height</li>
			<li>Added Font & Text > Command Box Input Text</li>
		</ul>
	</li>
	<li>Removed Font & Text > Big Text</li>
	<li>Added Stand > Settings > Set High Priority If Injected Early</li>
	<li>Lua API: Added players.get_host_token_hex</li>
	<li>Fixed address bar not having background blur</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.15', '28/05/2022 02:12'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed super jump preventing combat roll</li>
	<li>Potential fix for random connection errors</li>
	<li>Silent start of Lua scripts is now being enforced, so luas saved in your profile will no longer annoy you on injection</li>
	<li>
		Lua API
		<ul>
			<li>Added SCRIPT_SILENT_START</li>
			<li>Added menu.get_step_size & menu.set_step_size</li>
			<li>Fixed menu.action not accepting nil for on_command</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.14', '25/05/2022 03:06'); ?>
<ul>
	<li>Fixed being unable to spawn objects under some circumstances</li>
</ul>
<?php printHeader('Stand 0.81.13', '25/05/2022 00:55'); ?>
<ul>
	<li>Fixed being unable to use cinematic cam with fov override</li>
	<li>Fixed random exceptions</li>
</ul>
<?php printHeader('Stand 0.81.12', '24/05/2022 23:46'); ?>
<ul>
	<li>Improved performance</li>
	<li>Fixed being unable to spawn pseudo-objects (this also fixes burger king foot lettuce not working)</li>
	<li>Improved invoking of CREATE_PED_INSIDE_VEHICLE</li>
	<li>Lua: Added <code>+=</code>, <code>-=</code>, <code>*=</code>, <code>/=</code>, <code>//=</code>, <code>%=</code>, and <code>!=</code></li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.11', '23/05/2022 18:55'); ?>
<ul>
	<li>Improved protections</li>
	<li>Improved invoking of create ped and object natives</li>
	<li>Fixed disabling scorched keeping vehicle scorched</li>
	<li>Fixed lua-related exceptions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.10', '23/05/2022 01:14'); ?>
<ul>
	<li>Made script vm infinite loop detection less sensitive</li>
</ul>
<?php printHeader('Stand 0.81.9', '22/05/2022 22:30'); ?>
<ul>
	<li>Improved Game > Camera > Field of View [now with up to 360° of vision]</li>
	<li>Game > Edit Labels now has access to all game labels</li>
	<li>Improved crash protections</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.slider_float, menu.click_slider_float, menu.list_select, menu.list_action, menu.action_slider, menu.get_menu_name, menu.get_command_name, menu.get_help_text, menu.get_visible, menu.get_min_value, menu.get_max_value, menu.set_visible, menu.set_value, menu.set_min_value, menu.set_max_value, menu.set_action_slider_options, players.user_ped, util.get_weapons, util.get_label_text, util.register_label, lang.register, lang.set_translate, lang.translate, lang.find, lang.get_string, memory.read_ubyte, memory.read_short, memory.read_ushort, memory.read_uint, memory.write_ubyte, memory.write_short, memory.write_ushort, & memory.write_uint</li>
			<li>Added optional perm parameter to menu.action</li>
			<li>menu.action's on_command callback now receives additional effective_issuer argument</li>
			<li>Renamed menu.get_language to lang.get_current</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.8', '19/05/2022 21:10'); ?>
<ul>
	<li>Fixie-wixied a wittwe wegwession on de cwash pwotections &gt;w&lt;</li>
</ul>
<?php printHeader('Stand 0.81.7', '19/05/2022 15:57'); ?>
<ul>
	<li>Added Low Latency Rendering to Name ESP</li>
	<li>Moved Name ESP from Basic to Regular</li>
	<li>Moved Desync Kick Karma from Basic to Regular</li>
	<li>Moved Host Kick Karma from Ultimate to Regular</li>
	<li>Improved Player(s) > Trolling > Kick from Vehicle</li>
	<li>Improved "kick from vehicle" protections</li>
	<li>Improved crash protections</li>
	<li>Lua: Fixed toggle_loop not having on_stop called when script stops</li>
	<li>Lua: Fixed on_focus possibly being called multiple times without focus change</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.6', '15/05/2022 12:23'); ?>
<ul>
	<li>Fixed vehicle neon light toggles</li>
	<li>Fixed desync kick karma not always serving karma</li>
	<li>Fixed various instances of rendering despite screenshot mode being active</li>
	<li>Friendly reminder that bugs should be explained calmly in the issues forum on Guilded and not screamed into staff's DMs</li>
	<li>Lua API: Added profiling.once & profiling.tick</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.5', '14/05/2022 12:25'); ?>
<ul>
	<li>Fixed disable forced rc perspective</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.4', '13/05/2022 13:33'); ?>
<ul>
	<li>Improved crash protections</li>
	<li>Fixed vehicle extras not working</li>
	<li>Fixed screenshot mode not hiding typing indicator</li>
	<li>Possibly fixed rockstar anti-cheat detections while doing missions with "lessen breakup kicks as host" enabled</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.3', '11/05/2022 08:48'); ?>
<ul>
	<li>Fixed "lessen breakup kicks as host" triggering rockstar anti-cheat</li>
	<li>Fixed session hopper not working without seamless session switching enabled</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.2', '09/05/2022 07:01'); ?>
<ul>
	<li>Improved handling when injected early</li>
	<li>Fixed a crash event T9 false-positive</li>
	<li>Fixed "block joins from kicked players" targeting players you have not kicked</li>
	<li>Fixed exceptions when joining quick jobs with "lessen breakup kicks as host" enabled</li>
	<li>Fixed send to clubhouse false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.81.1', '08/05/2022 07:10'); ?>
<ul>
	<li>Fixed visual elements like "preparing teleport" staying on screen under some circumstances</li>
</ul>
<?php printHeader('Stand 0.81', '08/05/2022 06:17'); ?>
<ul>
	<li>Breakup Kick is now available in Regular Edition</li>
	<li>Added Online > Quick Progress > Rig Slot Machines</li>
	<li>Added Online > Protections > Events > "Start Freemode Mission", "Start Freemode Mission (Not My Boss)", "Send To Clubhouse", & "Send To Clubhouse (Not My President)"</li>
	<li>Added Online > Protections > Lessen Breakup Kicks As Host</li>
	<li>Added Online > Chat > Reactions > Spoofed Message (As Me)</li>
	<li>Added Online > Session > Block Joins > From Kicked Players</li>
	<li>Added Players > Settings > Tags > Classification Tags On Self</li>
	<li>Added Player(s) > Trolling > Force Into Freemode Mission</li>
	<li>Fixed Game > Rendering > "Night Vision" & "Thermal Vision"</li>
	<li>Improved performance</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.9', '06/05/2022 07:08'); ?>
<ul>
	<li>Improved protections</li>
	<li>Fixed "block joins" possibly interfering when joining a session</li>
	<li>Seamless Session Switching: Fixed vehicles driven across sessions not appearing to players in new session</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.8', '04/05/2022 05:08'); ?>
<ul>
	<li>Improved protections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.7', '03/05/2022 06:14'); ?>
<ul>
	<li>Added Player > Crash > Burger King Foot Lettuce</li>
	<li>Improved protections</li>
	<li>Fixed "register as a ceo/vip" and "start a motorcycle club"</li>
	<li>Fixed "disable outfit restrictions"</li>
	<li>Fixed session scripts: checkpoint collection: start instantly</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.6', '30/04/2022 01:58'); ?>
<ul>
	<li>Added towtruck & towtruck2 to "custom model sync reactions" default state</li>
	<li>Improved non-host kick</li>
	<li>Improved protections</li>
	<li>Improved session hopper</li>
	<li>Fixed breaking Blaine County Radio's behaviour even when set to "don't override"</li>
	<li>Fixed "teleport to warehouse (not my ceo)" not counting towards classification</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.5', '27/04/2022 21:47'); ?>
<ul>
	<li>Added Player > Crash > Next-Gen</li>
	<li>Removed Player > Crash > Burger King Foot Lettuce as R* patched it</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.4', '26/04/2022 22:06'); ?>
<ul>
	<li>Fixed crash when attempting to spawn unreleased next-gen vehicles (you can't spawn them, the data is incomplete)</li>
	<li>Fixed "disabled daily expenses" and "bypass time trial vehicle suitability"</li>
	<li>Lua: Added players.get_language</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.3', '26/04/2022 20:29'); ?>
<ul>
	<li>Updated for 1.59-2612 Next Gen Patches</li>
	<li>Improved the controller experience</li>
	<li>Lua API
		<ul>
			<li>Added players.get_name_with_tags, directx.pos_hud_to_client, directx.size_hud_to_client, directx.pos_client_to_hud, directx.size_client_to_hud, & util.get_char_slot</li>
			<li>Fixed util.write_colons_file with boolean values</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80.2', '22/04/2022 18:54'); ?>
<ul>
	<li>Hotfixes for hotfixes and hotfixes of hotfixes</li>
</ul>
<?php printHeader('Stand 0.80.1', '22/04/2022 17:44'); ?>
<ul>
	<li>Fixed being unable to enter personal interiors with rid spoofing enabled</li>
	<li>Fixed "save outfit" not allowing subfolder path</li>
	<li>Improved crash protections</li>
	<li>Removed soft rid spoofing</li>
	<li>Removed lua infinite loop detection</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.80', '18/04/2022 14:18'); ?>
<ul>
	<li>Added Self > Movement > "Increased Friction" & "Graceful Landing"</li>
	<li>Improved Self > Movement > "Super Jump" & "Super Flight"</li>
	<li>Added Self > Appearance > Outfit > Disable Outfit Restrictions</li>
	<li>Replaced Self > "Infinite Parachutes" with "Lock Parachutes"</li>
	<li>Vehicle > Personal Vehicles: Added "Delete"</li>
	<li>Added Online > Transitions > Unstuck</li>
	<li>Added Online > Protections > Events > "Teleport To Warehouse", "Teleport To Warehouse (Not My CEO)" & "Send To Cutscene"</li>
	<li>Online > Player History > Settings: Replaced "Write Tracking Updates To Log" with "On Tracking Update..."</li>
	<li>Added Players > Settings > Tags > Brackets</li>
	<li>Added Players > Settings > When Entering Player's List... > Spectate Them</li>
	<li>Added Player(s) > Trolling > Send To Cutscene</li>
	<li>Added World > Inhabitants > NPC Proximity Punishments</li>
	<li>Added Game > Info Overlay > Country Breakdown</li>
	<li>Added Game > Edit Labels > OwO-ify Labels</li>
	<li>Added Stand > Lua Scripts > Settings > Offline Mode</li>
	<li>Fixed total freedom not working for strip club</li>
	<li>Lua API: Added optional on_stop parameter to menu.toggle_loop</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.79.4', '12/04/2022 08:07'); ?>
<ul>
	<li>Stand is now available in Polish thanks to DumbBird!</li>
	<li>Added custom textures for player tags</li>
	<li>Fixed timeouts not properly disabling</li>
	<li>Lua API: Renamed util.current_unix_time_millis to util.current_unix_time_seconds</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.8', '10/04/2022 09:11'); ?>
<ul>
	<li>Added launch options when game is not open</li>
	<li>Added "check for updates" button</li>
	<li>
		Advanced Mode
		<ul>
			<li>Added drag & drop</li>
			<li>Added multi-select</li>
			<li>Added ability to remove dlls by pressing delete key</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.79.3', '07/04/2022 07:23'); ?>
<ul>
	<li>Fixed vehicle levitation regression</li>
	<li>Fixed saving state preventing visual updates</li>
	<li>Fixed gift vehicle not working on distant players</li>
	<li>Fixed forcequit command not chaining e.g. with new session</li>
	<li>
		Lua API
		<ul>
			<li>Added players.is_using_controller and util.execute_in_os_thread</li>
			<li>Reduced lag when stopping scripts with lots of commands</li>
			<li>Fixed random exceptions when creating commands</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.79.2', '03/04/2022 23:24'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.79.1', '03/04/2022 22:28'); ?>
<ul>
	<li>Improved levitation</li>
	<li>Fixed disabling "show online tracked players on injection" not having an effect</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.79', '01/04/2022 18:29'); ?>
<ul>
	<li>Smooth scrolling is now enabled by default</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Scorched</li>
	<li>Added Vehicle > Movement > Drive Underwater</li>
	<li>Added Vehicle > AR Speedometer > Native Rendering</li>
	<li>Added Online > Enhancements > Phone Animations</li>
	<li>Added World > Places > IPLs > Plane Crash Trench</li>
	<li>Added World > Water > Z Differential</li>
	<li>Added Game > AR Notifications [Regular; always available in Story Mode]</li>
	<li>Added Stand > Settings > Language > English (US)</li>
	<li>Improved smart kick</li>
	<li>Improved seamless to prevent chat from being closed</li>
	<li>Fixed an issue where you would not have your weapons after joining a session</li>
	<li>Fixed false-positive damage multiplier detection on the beast</li>
	<li>Fixed screenshot mode not hiding chat</li>
	<li>Lua API: Added util.draw_box and util.register_file</li>
	<li>Some other— oh fuck, they're here</li>
</ul>
<?php printHeader('Stand Launchpad 1.7.2', '01/04/2022 02:28'); ?>
<ul>
	<li>Fixed "No DLL was injected" hint showing when closing game</li>
</ul>
<?php printHeader('Stand 0.78.3', '23/03/2022 17:18'); ?>
<ul>
	<li>"Block Background Script" is now no longer enabled by default</li>
	<li>
		Lua
		<ul>
			<li>Added v3 api as a performant and readable alternative to tables with core api integration</li>
			<li>Added menu.are_tabs_visible and util.draw_ar_beacon</li>
			<li>Updated to Lua 5.4.4</li>
			<li>Improved vm performance</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.78.2', '23/03/2022 09:35'); ?>
<ul>
	<li>Improved injection performance</li>
	<li>Added header: Stand And Fight by PRB Dess</li>
	<li>Improved crash protections</li>
	<li>Improved rejoin session</li>
	<li>Improved block joins from known advertisers</li>
	<li>Fixed lag when scrolling through "commands with non-default state"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.78.1', '18/03/2022 11:15'); ?>
<ul>
	<li>Some bugprovements and imfixes</li>
</ul>
<?php printHeader('Stand 0.78', '18/03/2022 08:52'); ?>
<ul>
	<li>Added Online > Protections > Detections > Damage Multiplier</li>
	<li>Added Online > Protections > Anti-Detection > "Invulnerable", "Spectating" & "Damage Multiplier"</li>
	<li>Added Online > Protections > Presence Events > "Block Friend Stat Notifications" & "Block Job Invites"</li>
	<li>Added Online > Player History > Settings > Show Online Tracked Players On Injection</li>
	<li>Added Player > Information > Status > "Weapon Damage Multiplier" & "Melee Damage Multiplier"</li>
	<li>Added Player > Spectate > Legit Method</li>
	<li>Added Game > Minimap > Sleek Minimap</li>
	<li>Added Stand > Settings > Appearance > Tabs > Icons Use Text Colour</li>
	<li>
		Lua API
		<ul>
			<li>Added memory.alloc_int</li>
			<li>Removed previously-deprecated "util" functions that were moved to "entities"</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.77.5', '12/03/2022 02:07'); ?>
<ul>
	<li>Fixed freeze event being blocked by default as it might break missions</li>
	<li>Fixed jank with lua scripts and hold mode hotkeys</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.77.4', '07/03/2022 06:35'); ?>
<ul>
	<li>Improved patch for force join 2: electric boogaloo</li>
</ul>
<?php printHeader('Stand 0.77.3', '07/03/2022 01:20'); ?>
<ul>
	<li>Patched force join 2: electric boogaloo</li>
	<li>Command Box: Fixed toggle parameters being processed case-sensitively</li>
</ul>
<?php printHeader('Stand 0.77.2', '03/03/2022 18:20'); ?>
<ul>
	<li>Improved seamless session switching, now disables news</li>
	<li>Fixed lock outfit igoring bracelet variation in state</li>
	<li>Fixed model blacklist not saving newer reactions</li>
	<li>Command Box: Fixed automatic collapsing not working if command name is not all lowercase</li>
	<li>Lua API: Added players.get_vehicle_model</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.77.1', '28/02/2022 14:49'); ?>
<ul>
	<li>Fixed personal vehicles list not showing bicycles consistently</li>
	<li>Fixed cursor border ignoring smooth scrolling</li>
	<li>Lua API: Fixed blur rect draw scheduling</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.77', '25/02/2022 14:34'); ?>
<ul>
	<li>Stand is now available in Turkish thanks to Emre!</li>
	<li>Added Online > Enhancements > Disable Empty Notifications</li>
	<li>[Ultimate] Added Online > Protections > Host Kicks > Host Kick Karma</li>
	<li>Added Online > Session > Block Joins > From Known Advertisers [on by default]</li>
	<li>Added Player > Vehicle > "Teleport To Me" & "Teleport To Waypoint"</li>
	<li>Added Player(s) > Kick > Blacklist</li>
	<li>Added Stand > Settings > Appearance > Smooth Scrolling</li>
	<li>Lua API: Added menu.command_box_get_dimensions, directx.blurrect_new, directx.blurrect_free, directx.blurrect_draw</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.76.1', '21/02/2022 09:54'); ?>
<ul>
	<li>Improved non-host join blocking</li>
	<li>Block Join Karma is now available in Regular Edition</li>
	<li>Improved smart kick</li>
	<li>To accompany this release is a little hotfix to the Streaming profile available on our website as it did not disable Stand User Identification</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.76', '18/02/2022 03:07'); ?>
<ul>
	<li>Added Online > Protections > Knockoff Breakup Kick Reactions</li>
	<li>[Ultimate] Added Online > Protections > Block Join Karma</li>
	<li>Replaced Online > Session > "Log Leaving Players" with "Player Leave Notifications"</li>
	<li>Added Online > Reactions > RID Join Reactions</li>
	<li>World > Inhabitants > Traffic: Replaced "Disable Parked Cars" with {Disable: Enabled, Including Parked Cars}</li>
	<li>
		[Regular] World > Editor
		<ul>
			<li>Added Tools > Teleport To Where I'm Looking</li>
			<li>Added "Focus In Stand" context option when looking at spawned object</li>
			<li>Added snapping to spawner</li>
		</ul>
	</li>
	<li>Added Game > Disables > Disable New Invites Indicator</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.7', '15/02/2022 00:01'); ?>
<ul>
	<li>This update fixes a subtle bug that has been introduced in 0.75.4 and caused the anti-anti-cheat component to not work as intended. As a result, some users with high earnings have been banned, and we are terribly sorry for that. Note that reinjecting Stand will not suffice to update this component; a game restart is needed.</li>
</ul>
<?php printHeader('Stand 0.75.6', '14/02/2022 22:39'); ?>
<ul>
	<li>Improved seamless session switching</li>
	<li>Improved loading of non-system language on injection</li>
	<li>Fixed saving state interfering with rendering</li>
	<li>Fixed a kick event false-positive</li>
	<li>Fixed a crash when switching language too fast</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.5', '14/02/2022 00:07'); ?>
<ul>
	<li>Improved co-loading</li>
	<li>Fixed being unable to disable script error recovery</li>
	<li>Lua/C++ API: Updated list focus/blur callback logic</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.4', '08/02/2022 19:19'); ?>
<ul>
	<li>Improved speed of Stand User Identification</li>
	<li>Fixed "write to log" reaction for chat messages not logging the message</li>
	<li>Lua API
		<ul>
			<li>Added menu.command_box_is_open</li>
			<li>menu.toggle's on_change now receives click_type as an additional parameter</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.3', '01/02/2022 12:12'); ?>
<ul>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.2', '30/01/2022 08:06'); ?>
<ul>
	<li>Improved breakup kick</li>
	<li>Fixed rid-session mismatch false-positives</li>
	<li>Fixed slow notification queue rundown with many notifications</li>
	<li>Fixed search results disappearing when switching tabs</li>
	<li>Fixed player leave reasons spamming notifications when using be alone</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.75.1', '29/01/2022 13:08'); ?>
<ul>
	<li>Fixed issues with Steam build</li>
</ul>
<?php printHeader('Stand 0.75', '29/01/2022 11:36'); ?>
<ul>
	<li>
		Online > Protections
		<ul>
			<li>Added Events > Love Letter Kick Blocking Event</li>
			<li>Added Love Letter & Desync Kicks > Block Love Letter Kicks</li>
		</ul>
	</li>
	<li>Added timeout to player options, flags and reactions</li>
	<li>[Ultimate] Added Player > Kick > Breakup</li>
	<li>Added Player > Crash > Vehicular Manslaughter</li>
	<li>Added World > Inhabitants > Traffic > Disable Parked Cars</li>
	<li>Added Game > Disables > Disable Recordings</li>
	<li>Added Stand > Settings > Appearance > Notifications > "Flash Colour" & "Background Colour"</li>
	<li>Added button instructions and an option to disable them to levitation and freecam</li>
	<li>Replaced "Host Kick" reaction with "Love Letter Kick" reaction</li>
	<li>Lua API: Added players.dispatch_on_join, players.get_name & chat.send_targeted_message</li>
	<li>An updated streaming profile is available on our website</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.74.5', '28/01/2022 07:47'); ?>
<ul>
	<li>Fixed gift vehicle</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.74.4', '27/01/2022 04:40'); ?>
<ul>
	<li>Improved love letter kick</li>
	<li>Improved desync kick karma</li>
	<li>Improved fill all ammo & infinite ammo to work with vehicle guns</li>
	<li>Fixed rejoin not working when host</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.74.3', '25/01/2022 03:09'); ?>
<ul>
	<li>Fixed orgasm kick</li>
	<li>Fixed custom model sync reactions not applying to transformed players</li>
	<li>Fixed host change reactions being triggered on injection</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.74.2', '23/01/2022 04:21'); ?>
<ul>
	<li>Fixed issues with personal vehicles section</li>
</ul>
<?php printHeader('Stand 0.74.1', '23/01/2022 01:59'); ?>
<ul>
	<li>Added more notification options to player leave reasons</li>
	<li>Vehicle extras are now supported by vehicle save and load options</li>
	<li>Set default state for "Notification When Love Letter Kicked" to off</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.74', '22/01/2022 02:52'); ?>
<ul>
	<li>Added join method 3</li>
	<li>Added Vehicle > Spawner > Colour Spawned Vehicles</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Extras</li>
	<li>Added Player(s) > Weapons > Give Parachute</li>
	<li>
		Player > Kick
		<ul>
			<li>Added Love Letter</li>
			<li>Removed Desync</li>
			<li>Improved Smart</li>
		</li>
	</li>
	<li>
		Online > Protections
		<ul>
			<li>Added Notification When Love Letter Kicked</li>
			<li>Added Desync Kick Karma</li>
		</ul>
	</li>
	<li>Added Online > Session > Player Leave Reasons</li>
	<li>Added Online > Reactions > Love Letter Kick Reactions</li>
	<li>Added World > Inhabitants > Traffic > Traffic Colour</li>
	<li>Added World > Inhabitants > Player ESP > Name ESP > Show Tags</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Phone Open Deadline</li>
	<li>Lua: Updated chat.on_message callback arguments to (packet_sender, message_sender, message_text, is_team_chat)</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.73.2', '20/01/2022 21:22'); ?>
<ul>
	<li>Fixed stand user identification unreliability</li>
	<li>Fixed player(s) > show camera not showing first person</li>
	<li>Fixed mock and owoify "spoofing as them" not being networked</li>
	<li>Fixed exceptions with player magnet</li>
	<li>Lua: Added click_type to menu.slider and menu.click_slider callbacks</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.73.1', '18/01/2022 19:57'); ?>
<ul>
	<li>Added Online > Spoofing > Crew Spoofing > Colour</li>
	<li>Lua: Added players.get_tags_string</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.73', '14/01/2022 20:51'); ?>
<ul>
	<li>Added "Spawn" to Vehicle > Personal Vehicles</li>
	<li>Added Vehicle > Auto Transform Amphibious Cars</li>
	<li>Added Online > Transitions > Seamless Session Switching</li>
	<li>Added Online > Chat > OwO-ify My Chat Messages</li>
	<li>Added Online > Spoofing > Crew Spoofing</li>
	<li>Added Online > CEO/MC > "Register As A CEO/VIP" & "Start A Motorcycle Club"</li>
	<li>Added Online > Freemode Banners To Notifications</li>
	<li>Added Players > Settings > Tags > Indestructible Vehicle</li>
	<li>Added Player(s) > Show Camera</li>
	<li>Added Player > Information > Crew</li>
	<li>Added {Player > Kick > Orgasm} and improved Smart kick</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Show Reticle</li>
	<li>Added Game > Disables > Disable Vehicle Focus Camera</li>
	<li>
		<ul>
			Stand > Settings > Appearance
			<li>Added Address Bar > Text</li>
			<li>Added Commands > Number Sliders > Rightbound Value</li>
			<li>Added Textures > Leftbound</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.72.5', '12/01/2022 12:53'); ?>
<ul>
	<li>Fixed issues with co-loading some menus</li>
</ul>
<?php printHeader('Stand 0.72.4', '12/01/2022 11:38'); ?>
<ul>
	<li>Fixed "use session time" not respecting smooth transition config</li>
	<li>Fixed hotkeys on some sliders doing nothing</li>
	<li>Fixed reading wrong value for apartment id</li>
	<li>Fixed SET_EXPLOSIVE_AMMO_THIS_FRAME</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.72.3', '10/01/2022 09:32'); ?>
<ul>
	<li>Fixed cursor border</li>
	<li>Lua: Fixed chat.send_message</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.72.2', '09/01/2022 08:15'); ?>
<ul>
	<li>Lua: Added util.read_colons_and_tabs_file & util.write_colons_file</li>
	<li>Fixed exception when receiving text message</li>
	<li>Fixed exception when processing "announce in chat" reaction</li>
	<li>Fixed exception when toggling player magnet during transition</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.72.1', '07/01/2022 16:07'); ?>
<ul>
	<li>Fixed edit labels</li>
	<li>Fixed likely modder tag</li>
	<li>Fixed invite to session being spammed when used via controller</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.72', '07/01/2022 14:29'); ?>
<ul>
	<li>[Regular] Added Online > Transitions > Matchmaking > "Player Magnet" & "Disable"</li>
	<li>Added Online > Quick Progress > Cayo Perico Heist > Set Target</li>
	<li>Added Online > Quick Progress > Bad Sport Status</li>
	<li>Added Online > Protections > Detections > Spoofed Host Token</li>
	<li>Added Online > Protections > Text Messages</li>
	<li>[Ultimate] Added Online > Session Browser</li>
	<li>Added "Invite to Session" to Player History and Rockstar ID Tools</li>
	<li>[Regular] Added Online > Session > Player Bar</li>
	<li>Added Player(s) > Chat > OwO-ify Chat Messages</li>
	<li>Added World > Inhabitants > Traffic > Glide Ability</li>
	<li>Added World > Atmosphere > Clouds</li>
	<li>Added Game > Rendering > Distance Scaling</li>
	<li>Added Stand > Settings > Appearance > Background Blur</li>
	<li>Lua API: Added menu.focus, util.require_natives & memory.script_local</li>
	<li>C++ API: Added menu::list & menu::focus</li>
	<li>Removed Herobrine</li>
</ul>
<?php printHeader('Stand 0.71.8', '06/01/2022 05:58'); ?>
<ul>
	<li>Possibly fixed random log out issues</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.7', '06/01/2022 02:44'); ?>
<ul>
	<li>Fixed some log out cases not providing a notification</li>
	<li>Fixed an issue where Stand can't be opened</li>
	<li>Lua: Added more "entity data from pointer" functions (entities.get_model_hash, entities.get_position, entities.get_rotation & entities.get_health)</li>
	<li>Lua: Fixed util.toast & util.log not taking booleans</li>
	<li>Lua: Updated util.draw_debug_text to take any string-castable like util.toast & util.log</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.6', '05/01/2022 05:26'); ?>
<ul>
	<li>Fixed co-loading with some menus</li>
	<li>Fixed outfit variation commands not working as expected in some cases if used via command box</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.5', '05/01/2022 01:27'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.4', '04/01/2022 03:02'); ?>
<ul>
	<li>Added a new root name (version only)</li>
	<li>Patched a new kick method</li>
	<li>Fixed save outfit not saving hair colour</li>
	<li>Fixed some slider commands opening command box despite valid syntax</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.3', '31/12/2021 19:08'); ?>
<ul>
	<li>Improved Game > YEET</li>
	<li>Fixed player tags not visually updating</li>
	<li>Fixed bst toggle not properly working via command box</li>
	<li>Fixed shader override not turning off</li>
	<li>Fixed blackout not disabling by loading state</li>
	<li>Fixed an issue where Stand is invisible but making sounds</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.2', '29/12/2021 01:00'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71.1', '28/12/2021 19:19'); ?>
<ul>
	<li>Added Players > Settings > Tags > "Next Host" & "Likely Modder"</li>
	<li>Improved {Online > Restrictions > Bypass Time Trial Vehicle Suitability} so you can also use planes</li>
	<li>Improved GeoGuessr's synergy with freecam</li>
	<li>Fixed disable dripfeeding not making vehicles purchasable</li>
	<li>Fixed session script start reactions not working</li>
	<li>Fixed being unable to block own session script starts</li>
	<li>Fixed noticable freeze when injecting with big player history</li>
	<li>Profanity filter bypass detection is now disabled when local profanity filter is being disabled by another menu</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.71', '25/12/2021 13:36'); ?>
<ul>
	<li>Web Interface is now functional again</li>
	<li>Added Vehicle > Current Personal Vehicle > Imani Tech Remote Control</li>
	<li>Added Vehicle > Movement > Custom Wings Behaviour</li>
	<li>Added Online > Restrictions > "Remote Control Any Vehicle" & "Disable Forced RC Perspective"</li>
	<li>Added Online > CEO/MC > Remove CEO/MC Ban</li>
	<li>Added Online > Get BST</li>
	<li>Added Players > Settings > When Leaving Player's List... > Stop Spectating Them</li>
	<li>Added World > GeoGuessr</li>
	<li>Added World > Clock > Smooth Transition</li>
	<li>Added Game > Info Overlay > "Rotation (Entity)" & "Rotation (Camera)"</li>
	<li>Added Stand > Settings > Hide Information > Hide GeoIP</li>
	<li>Added Stand > Settings > Language > "Engwish" & "Howny Engwish"</li>
	<li>Improved Game > Rewind Position</li>
	<li>
		Lua API
		<ul>
			<li>Added entities.delete_by_pointer</li>
			<li>Renamed entities.delete to entities.delete_by_handle</li>
			<li>Renamed entities.get_boost_charge_from_pointer to entities.get_boost_charge</li>
			<li>Removed previously-deprecated util.async_http_get</li>
		</ul>
	</li>
	<li>Other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.7.1', '23/12/2021 14:46'); ?>
<ul>
	<li>You can now say "No" to downloading Launchpad updates</li>
	<li>A run as administrator hint will now show if 0 DLLs were injected</li>
</ul>
<?php printHeader('Stand 0.70.10', '23/12/2021 12:12'); ?>
<ul>
	<li>Stand User Identification, Session Invite Links, and Update Notifications are now functional again</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.9', '21/12/2021 11:05'); ?>
<ul>
	<li>Changed authentication system</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.8', '20/12/2021 19:52'); ?>
<ul>
	<li>Re-added Online > Disable Daily Expenses</li>
	<li>Patched the first person fists to sniper crash that tryhards are crying at R* for</li>
	<li>Removed "Remove Attachments" because R* patched remote player attachments</li>
	<li>Fixed a crash when attempting to use "Remove Turret" in a hunter</li>
	<li>Fixed camera going rogue after rewinding position</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.7', '18/12/2021 18:29'); ?>
<ul>
	<li>Fixed random exceptions</li>
	<li>Fixed spoofed host token default state discrepancies</li>
</ul>
<?php printHeader('Stand 0.70.6', '18/12/2021 16:48'); ?>
<ul>
	<li>Fixed some issues when in a session with other people</li>
</ul>
<?php printHeader('Stand 0.70.5', '18/12/2021 16:12'); ?>
<ul>
	<li>Fixed issues with session scripts management</li>
	<li>Fixed "on foot" correlation producing wrong value when aiming in a vehicle</li>
	<li>Fixed modded character model false-positives with new missions</li>
	<li>Fixed attacking while invulnerable false-positives with new Imani Tech Remote Control</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.4', '16/12/2021 07:08'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.3', '15/12/2021 21:03'); ?>
<ul>
	<li>Addressed a few oversights</li>
</ul>
<?php printHeader('Stand 0.70.2', '15/12/2021 20:09'); ?>
<ul>
	<li>Updated for 1.58-2545 The Contract</li>
	<li>Lua: Added util.try_run & util.copy_to_clipboard</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70.1', '13/12/2021 06:51'); ?>
<ul>
	<li>You can now spoof your host token at any time</li>
	<li>Lua: Fixed players.get_host_token</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.7.0', '11/12/2021 06:09'); ?>
<ul>
	<li>Now in dark mode</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.70', '11/12/2021 02:28'); ?>
<ul>
	<li>Stand now allows you to have multiple profiles at {Stand > Profiles}. Note that "Automatically Saved State" is not migrated, so you have to manually enable it for your profile, if you so wish.</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Remove Turret</li>
	<li>[Regular] Added Online > Transitions > Matchmaking Region</li>
	<li>Added Online > Protections > Session Script Start > Disable Passive Mode</li>
	<li>Added Online > Player History > Settings > Write Tracking Updates To Log</li>
	<li>[Ultimate] Added Online > Session > Session Scripts > Run Script > Disable Passive Mode</li>
	<li>Added World > AR GPS</li>
	<li>Added Stand > Lua Scripts > Settings > Developer Mode</li>
	<li>Added Stand > Settings > In-Game UI > Tabs > "Show Left Icon", "Show Name" & "Show Right Icon"</li>
	<li>Lua API: Added menu.ref_by_path, menu.ref_by_rel_path, menu.ref_by_command_name, menu.trigger_command, menu.show_warning, menu.get_value, players.is_godmode, players.is_marked_as_attacker, util.rot_to_dir, util.v3_look_at, util.arspinner_enable, util.arspinner_disable & util.is_bigmap_active</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.69.1', '09/12/2021 02:19'); ?>
<ul>
	<li>Removed Order 69 for being too OP</li>
	<li>Fixed Overwrite Weather: Xmas making you unable to join Online</li>
	<li>Fixed behaviour of Quit to SP while joining session</li>
	<li>Lua API: Added menu.toggle_loop & util.keep_running</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.69', '04/12/2021 21:04'); ?>
<ul>
	<li>Added Self > Respawn At Place Of Death</li>
	<li>Added Self > Weapons > "Fill All Ammo", "Remove All Ammo" & "Instant Lock-On"</li>
	<li>
		Online > Protections
		<ul>
			<li>Added Events > Force Camera Forward</li>
			<li>Added Detections > Classifications</li>
			<li>Added Anti-Detection > Super Jump [on by default]</li>
			<li>Added Session Script Start</li>
		</ul>
	</li>
	<li>Added Online > Chat > Commands > "For Crew Members" & "For My Team"</li>
	<li>[Ultimate] Added Online > Session > Session Scripts</li>
	<li>Added Player(s) > Trolling > Force Camera Forward</li>
	<li>Added Stand > Settings > Order 69 [on by default]</li>
	<li>Added Stand > Settings > Language > Horny English</li>
	<li>Lua: Added menu.is_in_screenshot_mode</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.68.5', '28/11/2021 16:44'); ?>
<ul>
	<li>Added {Online > Protections > Co-Loading > Disable Crash Event (N1) When Co-Loading} for exit-scam enjoyers [on by default]</li>
	<li>Fixed join notifications not respecting "Spoof Other Players' Names" or "Hide Information"</li>
	<li>Fixed hold mode hotkeys not realizing they were let go of</li>
	<li>Lua: Fixed util.spoof_script</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.68.4', '27/11/2021 06:20'); ?>
<ul>
	<li>Fixed Crash Event (T0) false-positives</li>
	<li>Fixed Stand blocking progression for "The Car Bomber" award</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.68.3', '26/11/2021 04:49'); ?>
<ul>
	<li>Fixed Online > Tunables > Disable Insurance Payments</li>
	<li>Fixed script events not counting towards classification</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.68.2', '22/11/2021 22:54'); ?>
<ul>
	<li>Some improvements and bugfixes for the tutorial</li>
	<li>Fixed issues with hotkeys for lua script features</li>
	<li>Lua: Added players.is_in_interior</li>
</ul>
<?php printHeader('Stand 0.68.1', '21/11/2021 03:25'); ?>
<ul>
	<li>Improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.68', '20/11/2021 02:29'); ?>
<ul>
	<li>Added Self > Movement > Swim In Air</li>
	<li>[Regular] Added Vehicle > Last Vehicle > Remote Control [idea by ren]</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > License Plate > Scrolling Text</li>
	<li>Added Online > Quick Progress > Get Undetected Money</li>
	<li>Added Online > Protections > Events > "CEO/MC Ban (Not My CEO)" & "CEO/MC Kick (Not My Boss)"</li>
	<li>
		Online > Protections > Detections
		<ul>
			<li>Added Spoofed IP Address</li>
			<li>Split "Modded Host Token" into "Aggressive", "Sweet Spot", "Handicap"</li>
		</ul>
	</li>
	<li>Added Online > Leave Current Interior [thanks to aaron]</li>
	<li>Added Players > Settings > Tags > "Modder or Admin" & "Admin"</li>
	<li>Added Player(s) > Friendly > Drop P's & Q's</li>
	<li>Added Game > Info Overlay > "Gear", "RPM", "Altitude", & "Ground Distance" [thanks to fwishky]</li>
	<li>Lua: Added util.require_no_lag</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.67.3', '15/11/2021 22:56'); ?>
<ul>
	<li>Fixed Stand User Identification</li>
	<li>Fixed hold mode hotkeys possibly behaving incorrectly when chat box or command box is active</li>
	<li>Lua: Fixed players.is_marked_as_modder</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.67.2', '10/11/2021 05:11'); ?>
<ul>
	<li>Fixed pong</li>
	<li>Fixed add label</li>
	<li>Fixed rounded borders on non-16:9 aspect ratios</li>
	<li>ASI/LUA: Patched ADD_OWNED_EXPLOSION</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.67.1', '07/11/2021 04:03'); ?>
<ul>
	<li>Fixed a loading issue on Spanish systems</li>
</ul>
<?php printHeader('Stand 0.67', '07/11/2021 03:27'); ?>
<ul>
	<li>The femboy dæmon enjoyed watching you cuties</li>
	<li>Added Self > Weapons > Teleport Gun</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Show Non-Applicable Mods</li>
	<li>Added Online > Quick Progress > Casino Heist > P.O.I. & Access Points > Unscope</li>
	<li>Added Online > Quick Progress > Fast Run Ability</li>
	<li>Added Online > Restrictions > Bypass Interior Restrictions</li>
	<li>Added Online > Protections > Block Bailing > Spectating Related</li>
	<li>Added Online > Protections > Lessen Host Kicks [on by default, recommended off for streamers]</li>
	<li>Added residential IPs to IP Address Spoofing Presets</li>
	<li>Added Players(s) > Send Text Message</li>
	<li>Added World > Disable Skybox</li>
	<li>Added Humane Labs to Interiors and Enhanced Open World</li>
	<li>Added Game > Screenshot Mode</li>
	<li>Added Stand > Settings > In-Game UI > Cursor > Border</li>
	<li>Added Stand > Settings > In-Game UI > Border > Rounded</li>
	<li>Added Stand > Lua Scripts > Repository</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66.6', '30/10/2021 22:32'); ?>
<ul>
	<li>Now possesed by a dæmon</li>
	<li>Fixed not being able to join invite only sessions</li>
	<li>Fixed menu responding while social club overlay is open</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66.5', '30/10/2021 06:11'); ?>
<ul>
	<li>Improved join & spectate to bypass friend & crew requirements</li>
	<li>Fixed a possible freeze</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66.4', '29/10/2021 18:45'); ?>
<ul>
	<li>Improved join & spectate to bypass invite requirement</li>
	<li>Fixed spectate join options not working if you don't have any friends</li>
	<li>Lua API: Added filesystem.resources_dir & filesystem.store_dir</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66.3', '26/10/2021 17:43'); ?>
<ul>
	<li>Fixed being unable to inject on the Steam version</li>
</ul>
<?php printHeader('Stand 0.66.2', '26/10/2021 17:04'); ?>
<ul>
	<li>Fixed "spawn aircraft in air" not starting engine on helicopters</li>
	<li>Fixed rid spoofing changing another player's rid in a rare case</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66.1', '24/10/2021 23:11'); ?>
<ul>
	<li>Fixed a crash when loading straight to Online with Stand injected</li>
	<li>Fixed preview peds not being deleted</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.66', '24/10/2021 15:15'); ?>
<ul>
	<li>Added Self > Appearance > Outfit > Wardrobe > Prefabricated Outfits > "Online Male: Cop" & "Online Female: Cop"</li>
	<li>Added Vehicle > Spawner > {On Foot, In Vehicle} Behaviour > Spawn Aircraft In The Air</li>
	<li>Added Online > Protections > Syncs > Incoming Syncs > Custom Model Sync Reactions</li>
	<li>Added Online > Session > "Session Code" & "Rejoin Session"</li>
	<li>Added World > "Interiors" & "Enhanced Open World"</li>
	<li>Added Game > Rendering > Lock Streaming Focus</li>
	<li>
		Added toggles for functionality that was already present:
		<ul>
			<li>Online > Chat > Modify Spoofed Messages</li>
			<li>Stand > Settings > Rendering > Disable Entity Previews</li>
			<li>Stand > Settings > Skip Intro & License If Injected Early</li>
			<li>Stand > Settings > Menu Navigation Reminders</li>
		</ul>
	</li>
	<li>
		Lua API
		<ul>
			<li>Added entities.create_object</li>
			<li>Added util.remove_blip</li>
			<li>Un-deprecated util.is_session_started</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.65.8', '21/10/2021 20:29'); ?>
<ul>
	<li>Vehicle > Personal Vehicles is now available in Basic Edition</li>
	<li>Improved levitation</li>
	<li>Fixed context menu sfx</li>
	<li>
		Lua API
		<ul>
			<li>Added SCRIPT_RELPATH, SCRIPT_FILENAME, & SCRIPT_MANUAL_START</li>
			<li>Added players.get_org_colour</li>
			<li>Fixed SCRIPT_NAME</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.65.7', '16/10/2021 15:27'); ?>
<ul>
	<li>Improved command box completion indicator</li>
	<li>Fixed Stand breaking the game in some aspects even with default state</li>
	<li>Fixed another injection issue</li>
</ul>
<?php printHeader('Stand 0.65.6', '16/10/2021 05:14'); ?>
<ul>
	<li>Fixed injection issues 🙃</li>
</ul>
<?php printHeader('Stand 0.65.5', '16/10/2021 04:30'); ?>
<ul>
	<li>Fixed another issue with injecting on Windows 11</li>
</ul>
<?php printHeader('Stand 0.65.4', '16/10/2021 03:52'); ?>
<ul>
	<li>Fixed injection issues after latest Windows 11 update</li>
	<li>Fixed "kick host if next in queue" acting while session hopping</li>
	<li>Fixed default and random outfit not working with lock outfit</li>
	<li>Replaced bitcoin miner with rat</li>
</ul>
<?php printHeader('Stand 0.65.3', '14/10/2021 01:46'); ?>
<ul>
	<li>Lua API: Added menu.get_language, players.get_rockstar_id, players.get_rockstar_id_2, entities.has_handle, entities.pointer_to_handle & directx.draw_triangle</li>
	<li>Player Info "Kills" & "Deaths" are now also shown with thousands separators</li>
	<li>Fixed "Load State" context option not reading State.txt</li>
	<li>Fixed Game > Info Overlay > Draws Per Second showing ticks per second</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.65.2', '11/10/2021 22:21'); ?>
<ul>
	<li>Added Online > Chat > Commands > Prefix > €</li>
	<li>Improved World > Override Weather > Xmas</li>
	<li>Fixed Online > Tunables > Disable Insurance Payments</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.65.1', '09/10/2021 21:03'); ?>
<ul>
	<li>🖕</li>
</ul>
<?php printHeader('Stand 0.65', '09/10/2021 18:10'); ?>
<ul>
	<li>Updated Online > Protections > Block Vote Kicks
		<ul>
			<li>Added "SCTV / Spectator Mode" method</li>
			<li>Now only blocks vote kicks, script host kick is now included in "Kick Event", therefore blocked by default</li>
		</ul>
	</li>
	<li>
		Added Online > Spoofing > Session Spoofing
		<ul>
			<li>[Regular] Added Hide Session: Story Mode</li>
			<li>[Ultimate] Added Hide Session: Non-Existent Session</li>
			<li>[Ultimate] Added "Session Type" & "Host"</li>
		</ul>
	</li>
	<li>[Ultimate] Added "Copy Session Info" (aka. "Join Redirect") to Online > Player History</li>
	<li>Added Online > Tunables > Disable Insurance Payments</li>
	<li>Added Player(s) > Trolling > Kick From Vehicle</li>
	<li>Added Game > Disables > Disable Flight Music</li>
	<li>Added Game > Unlocks > Reveal Entire Map</li>
	<li>Added Stand > Settings > In-Game UI > Keep Cursor When Revisiting > Lists: Reduced Effect For Huge Lists</li>
	<li>Added Stand > Settings > Colours > Minigame Colour</li>
	<li>Added Stand > Settings > Reduced Unload Cleanup</li>
	<li>
		Lua API
		<ul>
			<li>Some functions have been renamed, using their old names is now deprecated:
				<ul>
					<li>util.create_ped -> entities.create_ped</li>
					<li>util.create_vehicle -> entities.create_vehicle</li>
					<li>util.get_vehicle -> entities.get_user_vehicle_as_handle</li>
					<li>util.get_entity_address -> entities.handle_to_pointer</li>
					<li>util.get_all_vehicles -> entities.get_all_vehicles_as_handles</li>
					<li>util.get_all_peds -> entities.get_all_peds_as_handles</li>
					<li>util.get_all_objects -> entities.get_all_objects_as_handles</li>
					<li>util.get_all_pickups -> entities.get_all_pickups_as_handles</li>
					<li>util.delete_entity -> entities.delete</li>
				</ul>
			</li>
			<li>Added entities.get_user_vehicle_as_pointer, entities.get_all_vehicles_as_handles, entities.get_all_peds_as_pointers, entities.get_all_objects_as_pointers, entities.get_all_pickups_as_pointers, & entities.get_boost_charge_from_pointer</li>
			<li>Added menu.text_input & menu.hyperlink</li>
			<li>Added optional on_click & on_back parameters to menu.list</li>
			<li>Added players.get_boss</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.64.5', '06/10/2021 21:54'); ?>
<ul>
	<li>Fixed some issues with Windows 11</li>
	<li>Fixed Stand User Identification not working</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.64.4', '04/10/2021 17:42'); ?>
<ul>
	<li>Improved Game > Disables > Disable Game Inputs > Presets > Mouse</li>
	<li>Fixed command box integration issues with "lock outfit", "saved places", and "save state"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.64.3', '02/10/2021 15:16'); ?>
<ul>
	<li>Fixed traffic and NPCs not appearing in GTA:O with Stand injected</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.64.2(.1)', '02/10/2021 10:07'); ?>
<ul>
	<li>Updated the NanumGothic preset font to include more Korean characters, so you'll hopefully no longer see question marks. You might have to delete your %appdata%\Stand\Theme\Font.spritefont if you're facing this issue.</li>
	<li>Improved World > Clock to have a smooth transition</li>
	<li>You can now load ScriptHookVDotNet via Stand > ASI Mods</li>
	<li>Fixed previews in search results not disappearing when going back</li>
	<li>Fixed some instances where going back would cause you to go all the way back</li>
	<li>Many 💯 other 📸 improvements ✨ and 😯 bugfixes 🐛 💪</li>
</ul>
<?php printHeader('Stand 0.64.1', '28/09/2021 05:51'); ?>
<ul>
	<li>You can now become host while spoofing your RID</li>
	<li>Changed {Online > Transitions > Show Rockstar Support Message} default state to off</li>
	<li>Added Stand > Experiments > just get more fps lol</li>
	<li>Fixed textures not being loaded from disk</li>
	<li>Fixed instances where tabs stop being what they're supposed to be</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.64', '25/09/2021 04:28'); ?>
<ul>
	<li>Command Box: Added input feedback</li>
	<li>GTA Online service status is now shown when suitable</li>
	<li>[Regular] Added Vehicle > Personal Vehicles > All > "Make Insurance Claim" & "Add Insurance"</li>
	<li>[Regular] Added "Make Insurance Claim" and "Insurance" to personal vehicles</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Neon Lights > All</li>
	<li>Added Vehicle > Set As Pegasus Vehicle</li>
	<li>Added Online > Transitions > Show Rockstar Support Message</li>
	<li>Added Online > Restrictions > Bypass Interaction Menu Barriers</li>
	<li>Added Online > Chat > No "Transaction Pending" When Chatting</li>
	<li>Added Online > Spoofing > Name Spoofing > Get Random Name From Player History</li>
	<li>Added Online > Spoofing > RID Spoofing > Get Random RID From Player History</li>
	<li>Added Online > CEO/MC > "Name", "Change Type", "Disable Member Limit" & "Colour Slots"</li>
	<li>Improvements and bugfixes in text rendering and more</li>
</ul>
<?php printHeader('Stand 0.63.2', '24/09/2021 02:42'); ?>
<ul>
	<li>Added Stand > Settings > In-Game UI > Header > Header > 2Horny2Stand Animated 2 by super saiyan ginger</li>
	<li>Improved personal vehicle "request & drive" features</li>
	<li>Fixed name to rid lookup not working</li>
	<li>Some improvements and bugfixes in header loading, chat interfacing, and optimisation</li>
</ul>
<?php printHeader('Stand 0.63.1', '21/09/2021 04:12'); ?>
<ul>
	<li>It is with a heavy heart that I must tell you I have received a letter from the FBI who were investigating several seemingly-unrelated house fires; they noticed that all victims were playing GTA V on their computers and their Gaming Army Youth (GAY) unit quickly pointed them at Stand's "Burn PC" feature. Well, and now they are asking us to stop this madness, so we have removed "Burn PC" in this update. Y'all just had to spam that feature, huh?</li>
	<li>Fixed Player > Join CEO/MC causing the interaction menu to not render and breaking CEO/MC when the boss leaves</li>
	<li>Fixed Online > Restrictions > All Missions In Private Sessions not unlocking CEO/MC registration in solo sessions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.63', '18/09/2021 19:20'); ?>
<ul>
	<li>The tutorial now also explains the context menu and sliders. If you don't know about them yet, use Stand > Repeat Tutorial.</li>
	<li>Context Menu: Added "Hold Mode" for hotkeys on toggles</li>
	<li>Window tint and tyre smoke colour now get saved</li>
	<li>Added Online > Restrictions > Disable Death Barriers</li>
	<li>Added Player > Join CEO/MC</li>
	<li>Added World > Clock > Presets</li>
	<li>Added World > Water > Strength Override</li>
	<li>Added Stand > Settings > In-Game UI > Command Info Text > "Width" & "Indicate Slider Behaviour"</li>
	<li>Added Stand > Settings > In-Game UI > Border > Colour</li>
	<li>Lua API: async_http.init's success_func parameter is now optional</li>
	<li>Fixed Burn PC not working for some people</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.62.2', '13/09/2021 22:26'); ?>
<ul>
	<li>Fixed a bunch of possible crashes</li>
</ul>
<?php printHeader('Stand 0.62.1', '13/09/2021 18:39'); ?>
<ul>
	<li>Wheel Category now gets saved</li>
	<li>Improved how vehicle chrome is dealt with</li>
	<li>Switching tabs now feels different but you can't quite describe it</li>
	<li>Fixed snake not accepting controller input</li>
	<li>Fixed Burn PC causing an entire neighbourhood to burn in rare cases</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.62', '11/09/2021 11:38'); ?>
<ul>
	<li>Added previews to wardrobe</li>
	<li>Replaced "Get All Weapons" and "Remove All Weapons" with "Get Weapons" and "Remove Weapons"</li>
	<li>Added Vehicle > Spawner > Tune Spawned Vehicles > Performance, Including Spoiler</li>
	<li>Added Vehicle > Garage</li>
	<li>[Regular] Added "Save Vehicle" to Vehicle > Personal Vehicles</li>
	<li>
		Vehicle > Los Santos Customs > Appearance
		<ul>
			<li>Added Neon Lights</li>
			<li>Added Wheels > Drift Tyres</li>
			<li>Added License Plate > Type</li>
		</ul>
	</li>
	<li>Added Player > Burn PC</li>
	<li>Replaced {World > Ghost Town} with {World > Traffic > Disable} and {World > Pedestrians > Disable}</li>
	<li>Added World > Traffic > Potato Mode</li>
	<li>Added Stand > Settings > In-Game UI > Commands > Prefill Current Value For Command Box</li>
	<li>Added Stand > Settings > Input > Controller Input Scheme > Command Box > None</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.61.2', '07/09/2021 11:12'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.61.1', '04/09/2021 16:07'); ?>
<ul>
	<li>Added "wait [ms]" pseudo-command</li>
	<li>Vehicle spawn commands now chain as expected</li>
	<li>Vehicle spawner previews now show with "tune spawned vehicles" preference applied</li>
	<li>Fixed direct spawn commands (e.g. "ruffian" instead of "spawn ruffian") not being available for other players</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.61', '04/09/2021 07:06'); ?>
<ul>
	<li>Added previews to transform, vehicle spawner, personal vehicles, & object spawner</li>
	<li>[Regular] Added "Replace With Current Vehicle" to Vehicle > Personal Vehicles</li>
	<li>Added Online > Chat > Reactions > Bypassed Profanity Filter</li>
	<li>Added Online > Chat > Send Message</li>
	<li>Added Player > Copy Vehicle</li>
	<li>Added Stand > Settings > Input > Key Repeat Interval For Tabs</li>
	<li>Added Stand > Settings > Command Box > Keep Draft When Closed</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.get_activation_key_hash & menu.get_edition</li>
			<li>Deprecated util.is_session_started (use the native instead)</li>
			<li>Removed previously-deprecated menu.get_x & menu.get_y</li>
		</ul>
	</li>
	<li>Improved Stand > Settings > In-Game UI > Text > Set Font to include game display names</li>
	<li>Fixed hotkeys in lua scripts</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.60.1', '31/08/2021 07:43'); ?>
<ul>
	<li>
		Lua API
		<ul>
			<li>Added async_http.init, async_http.dispatch, async_http.set_post, & async_http.add_header</li>
			<li>Deprecated util.async_http_get</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.60', '28/08/2021 01:59'); ?>
<ul>
	<li>Improved Self > Movement > Levitation</li>
	<li>Added Online > Spoofing > Rockstar Developer Flag</li>
	<li>Added Online > VPN</li>
	<li>Added Player(s) > Chat > Mock Chat Messages</li>
	<li>Patched being unable to request control while spectating</li>
	<li>Many other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.59.2', '25/08/2021 08:29'); ?>
<ul>
	<li>Improved Player > Spectate</li>
	<li>Fixed "automatically save state" not saving in some cases</li>
	<li>Fixed "repeat tutorial" not forcing tabs to be enabled</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.6.4', '22/08/2021 22:33'); ?>
<ul>
	<li>We changed domains lol</li>
</ul>
<?php printHeader('Stand 0.59.1', '22/08/2021 20:36'); ?>
<ul>
	<li>Improved Game > Disables > Disable Game Inputs > Presets > Mouse</li>
	<li>Fixed Stand accepting inputs when a game warning message is active</li>
	<li>Fixed some options in los santos customs being unavailable</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.59', '19/08/2021 23:04'); ?>
<ul>
	<li>Stand is now available in French thanks to Itreax</li>
	<li>Renamed Sane Edition to Regular Edition and Toxic Edition to Ultimate Edition</li>
	<li>[Ultimate] Added crash reaction wherever the kick reaction is applicable</li>
	<li>Added Self > Movement > Tennis Mode</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Xenon Lights</li>
	<li>Added Vehicle > Los Santos Customs > Appearance > Wheels > Wheels Category</li>
	<li>Added Vehicle > Los Santos Customs > [Preset Tunings >] Performance Upgrade, Including Spoiler</li>
	<li>Added Online > Protections > Modder Detection > "Spoofed Rockstar ID (Hard)"</li>
	<li>Added Online > Protections > Name Spoofing > Respoof Invalid Names [on by default, same as it ever was]</li>
	<li>[Regular] Added Online > Chat > Sing In Chat</li>
	<li>[Ultimate] Added Online > Player History > Tracked Players</li>
	<li>Added Online > Player History > "Add Player By Name" & "Add Player By RID"</li>
	<li>Added Online > Spoofing > Name Spoofing > Get Spoofed Name From Spoofed RID</li>
	<li>Added World > Clock > Lock Time</li>
	<li>Added World > Blackout > Enabled, Including Vehicles</li>
	<li>Added Stand > Settings > In-Game UI > Commands > Selectable N/A Sliders</li>
	<li>Added Stand > Settings > Stream-Proof Rendering</li>
	<li>Lua API: Added players.is_marked_as_modder & util.async_http_get</li>
	<li>Improved "Join Session" logic, it's more elegant and works even if you don't have friends now</li>
	<li>Einige weitere Verbesserungen und Fehlerbehebungen</li>
</ul>
<?php printHeader('Stand 0.58.3', '16/08/2021 14:44'); ?>
<ul>
	<li>You ever just make an innocent little bugfix that ends up fucking shit up? Yeah, me neither.</li>
	<li>Some improvements and bugfixes ;)</li>
</ul>
<?php printHeader('Stand 0.58.2', '16/08/2021 13:33'); ?>
<ul>
	<li>Rockstar ID Tools are now available in all editions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.58.1', '14/08/2021 15:24'); ?>
<ul>
	<li>Improved co-loading</li>
	<li>Updated default font to include more Chinese glyphs</li>
	<li>Some other improvements</li>
</ul>
<?php printHeader('Stand 0.58', '14/08/2021 01:29'); ?>
<ul>
	<li>Added Vehicle > Los Santos Customs > Parachute</li>
	<li>Added Vehicle > Movement > "Jump Ability" & "Glide Ability"</li>
	<li>Added Vehicle > Rocket Boost > "Override" & "Vertical Rocket Boost"</li>
	<li>Added Vehicle > Collisions > "Ramp", "Ramming Scoop" & "Increased Ramming Force"</li>
	<li>[Toxic] Added Online > Chat > Spam</li>
	<li>Added Online Status to Online > Player History</li>
	<li>Added World > Teleport To... > Interiors > "FIB (Bureau Raid)", "FIB", & "IAA"</li>
	<li>Added Stand > Settings > In-Game UI > Tabs > Position > Bottom</li>
	<li>Various improvements and bugfixes, including but not limited to: Command box supporting ctrl+arrow, more polish on find command and saved commands, reduced injection lag</li>
</ul>
<?php printHeader('Stand 0.57.4', '12/08/2021 14:36'); ?>
<ul>
	<li>Updated Stand > Settings > Discord Rich Presence</li>
	<li>Fixed -1 (invisible) not being selectable for all outfit components</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.57.3', '10/08/2021 22:08'); ?>
<ul>
	<li>Fixed cursor blinking</li>
	<li>Fixed web interface not loading when game is paused</li>
	<li>Lua API: Fixed natives that take pointers corrupting memory (which causes a crash) because Lua is absolute garbage</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.57.2', '10/08/2021 10:28'); ?>
<ul>
	<li>Fixed "Send Friend Request" when using controller</li>
	<li>Fixed for the menu sometimes being invisible (this time I know it's for real)</li>
	<li>Lua API: Natives that take pointers as an argument now accept strings and vice-versa</li>
	<li>Some body once told me "improvements and bugfixes"</li>
</ul>
<?php printHeader('Stand 0.57.1', '09/08/2021 00:03'); ?>
<ul>
	<li>Fixed an authentication issue (bad state) with high system uptime</li>
	<li>Potential fix for the menu sometimes being invisible</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.57', '08/08/2021 09:23'); ?>
<ul>
	<li>Feature restrictions were changed as was outlined in our announcement</li>
	<li>Added Online > Quick Progress > Unlocks > Unlock Kosatka For Purchase</li>
	<li>Added Online > Chat > Typing Indicator > "Closed Chat Position" & "Open Chat Position"</li>
	<li>Added Online > Spoofing > K/D Spoofing</li>
	<li>[Toxic] Added Online > Host Tools</li>
	<li>Added Player > Information > Stats > "Favourite Radio Station", "Owns Bunker", "Owns Facility", & "Owns Nightclub"</li>
	<li>Added Stand > Appearance > Address Bar > Show Current List Only</li>
	<li>You can now use media keys as hotkeys</li>
	<li>Improved Vehicle > Indestructible in regards to water</li>
	<li>Improved logging for blocked syncs</li>
	<li>Fixed 3D text using HUD colour, now uses AR colour as expected</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.56.4', '05/08/2021 15:13'); ?>
<ul>
	<li>Improved host token spoofing</li>
	<li>C++ API: Fixed menu::show_command_box and menu::trigger_commands not being callable</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.56.3', '01/08/2021 08:43'); ?>
<ul>
	<li>Fixed an issue when automatically injecting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.56.2', '31/07/2021 23:23'); ?>
<ul>
	<li>Improved spawned object highlighting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.56.1', '30/07/2021 09:10'); ?>
<ul>
	<li>Fixed host token spoofing for any host token that isn't 0</li>
	<li>
		Fixed name, rid, & ip spoofing being local-only when host token spoofing
		<ul>
			<li>Revision to the previous changelog: you cannot become host despite spoofing your RID, we simply failed to notice this bug</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.56', '29/07/2021 20:12'); ?>
<ul>
	<li>Updated Self > Weapons > "Aimbot" & "Triggerbot"</li>
	<li>Added Online > Quick Progress > LS Car Meet (includes "Set Reputation Level" & "Unlock Prize Ride")</li>
	<li>Added Online > Restrictions > Disable Dripfeeding</li>
	<li>Updated Online > Protections > Syncs > Incoming Syncs > Heuristic Protections</li>
	<li>Added Online > Chat > Reactions (includes "Any Message", "Spoofed Message", & "Advertisement")</li>
	<li>Added World > Clock > Time</li>
	<li>Improved Online > Spoofing > RID Spoofing so you can become host despite it</li>
	<li>Fixed example notification not disappearing under some circumstances</li>
	<li>Worked around a crash due to a certain garbage mod menu that got very upset when Stand loaded after it</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.55.4', '27/07/2021 05:16'); ?>
<ul>
	<li>Improved Online > Spoofing > Host Token Spoofing so it works at any time</li>
	<li>Fixed the podium vehicle being positioned weirdly with Stand injected</li>
	<li>Fixed incorrect initial pong score</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.55.3', '24/07/2021 18:36'); ?>
<ul>
	<li>Improved Online > Quick Progress > Unlocks > Unlock Exclusive Liveries</li>
	<li>Re-added Player(s) > CEO Money Loop</li>
	<li>Added Game > Radio > Radio Stations > Self Radio</li>
	<li>Improved co-loading</li>
	<li>Fixed example notification not disappearing when switching tab</li>
	<li>Fixed some appearance options losing track of state</li>
	<li>Fixed LSUR disppearing when going from Online to SP with Stand injected</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.55.2', '22/07/2021 17:43'); ?>
<ul>
	<li>Updated Game > Shader Override for the new DLC</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.55.1', '22/07/2021 16:33'); ?>
<ul>
	<li>Improved kick</li>
	<li>Fixed some issues with authentication</li>
	<li>Fixed some invalid model sync false-positives</li>
</ul>
<?php printHeader('Stand 0.55', '22/07/2021 14:39'); ?>
<ul>
	<li>Added Online > Restrictions > Disable Orbital Cannon Cooldown</li>
	<li>Added Online > Rockstar Admin DLC</li>
	<li>Added World > "Teleport To..." & "Waypoint On..." > Saved Places</li>
	<li>Added World > Position > "Save My Position" & "Save Waypoint Position"</li>
	<li>Added Game > Unlocks > Override Pre-Order Bonus</li>
	<li>Fixed state of Stand > Appearance > Address Bar > Root Name not persisting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.54.3', '22/07/2021 03:00'); ?>
<ul>
	<li>Added World > Player Aim Punishments > Interrupt</li>
	<li>Added Game > Radio > Radio Stations > Media Player</li>
	<li>Removed cash drop and ceo money loop as the DLC apparently also patched them</li>
	<li>Fixed join timeout with clone update heuristics</li>
	<li>Fixed notifications not being properly aligned with map</li>
	<li>Fixed pickup protections not working</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.54.2', '21/07/2021 00:23'); ?>
<ul>
	<li>Fixed translation errors with the new vehicle's classes in spawner</li>
	<li>Fixed Online > Personal Vehicles</li>
	<li>Fixed some invalid model sync false-positives</li>
	<li>Fixed join timeout with heuristic protections</li>
	<li>Fixed some modded health false-positives</li>
</ul>
<?php printHeader('Stand 0.54.1', '20/07/2021 21:03'); ?>
<ul>
	<li>
		Updated for LS Tuners DLC
		<ul>
			<li>Added new vehicles to Vehicle > Spawner</li>
			<li>Removed Online > Protections > Modder Detections > Announcing Time As Non-Host</li>
			<li>Removed Online > "Set Session Weather", "Set Session Weather: Cooldown", & "Set Session Time"</li>
			<li>Removed Player > Crash > V27</li>
			<li>Lua: Removed util.set_weather & util.set_time</li>
		</ul>
	</li>
	<li>Updated the default font to include more Chinese characters so you'll hopefully no longer see question marks. You'll need to delete your %appdata%\Stand\Theme\Font.spritefont if you're facing this issue. 更新了默认字体现在可以显示更多中文字符,因此您应该不再看到有文字变成了问号. 如果您遇到此问题请删除位于 %appdata%\Stand\Theme\Font.spritefont 目录的这个字体文件,然后重新注入.</li>
</ul>
<?php printHeader('Stand 0.54', '17/07/2021 12:01'); ?>
<ul>
	<li>Added Online > Protections > Syncs > Incoming Syncs > Heuristic Protections</li>
	<li>Added Online > Protections > Co-Loading</li>
	<li>Added World > Player ESP > Line ESP</li>
	<li>Added Game > Disables > Prevent Numpad 7 Opening SocialClub</li>
	<li>Added Stand > Appearance > Address Bar > Root Name (Check here for exclusive stuff to show off!)</li>
	<li>Added Stand > Appearance > Address Bar > Height</li>
	<li>Improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.53.3', '14/07/2021 10:00'); ?>
<ul>
	<li>Fixed hotkey loading for multiple hotkeys</li>
	<li>Fixed custom header file sorting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.53.2', '12/07/2021 14:03'); ?>
<ul>
	<li>Adopted the alphanum algorithm for string sorting including when loading a custom animated header</li>
	<li>Fixed pit stop at character selection not working when in story mode before transition</li>
	<li>Fixed certain characters in Windows username breaking lua scripts and set font</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.53.1', '10/07/2021 11:24'); ?>
<ul>
	<li>Improved hotkey resolving when the same hotkey is on multiple values in selection lists</li>
	<li>Improved player history note handling</li>
	<li>Fixed removing hotkeys via the context menu not working</li>
	<li>Fixed hotkeys like "Mouse 4" not being addressable via the hotkeyadd & hotkeyremove commands</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.53', '09/07/2021 17:27'); ?>
<ul>
	<li>[Toxic] Added Online > Become A Script Host Kleptomaniac</li>
	<li>Added Player > Information > Connection</li>
	<li>Added World > Objects</li>
	<li>Updated World > Water Behaviour</li>
	<li>Added Game > Render HD Only</li>
	<li>Added Stand > Command Box Scripts</li>
	<li>Added Stand > Appearance > Notifications > "Custom Position" & "Width"</li>
	<li>Added Stand > Appearance > Menu Position > Move With Mouse</li>
	<li>Stand now supports folders within wardrobe & lua scripts</li>
	<li>For developers: We've added an experimental C++ API which expands upon ASI Mods; if you're interested, fetch the SDK from <a href="https://stand.gg/ASI%20Example.zip" target="_blank">https://stand.gg/ASI%20Example.zip</a></li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.6.3', '07/07/2021 12:58'); ?>
<ul>
	<li>Fixed an error when deleting the Stand or Bin folder after starting the Launchpad</li>
</ul>
<?php printHeader('Stand 0.52.1', '07/07/2021 04:17'); ?>
<ul>
	<li>Updated world border max value</li>
	<li>Fixed mouse support state not persisting</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.52', '03/07/2021 23:29'); ?>
<ul>
	<li>Added Online > New Session > "Pit Stop At Character Selection", "Join Crew Members", "Creator Mode" & "SocialClub TV"</li>
	<li>Added Online > Quick Progress > Finish Cayo Perico Heist Setups</li>
	<li>Replaced Online > Player History > "Saved Players" with "Noted Players"</li>
	<li>Added Online > Force Cloud Save</li>
	<li>Added Player > In Player History</li>
	<li>Added Stand > Appearance > Address Bar > Show Root Name</li>
	<li>Added Stand > Appearance > Command Info Text > Padding</li>
	<li>Added Stand > Appearance > Notifications</li>
	<li>Added Stand > Settings > Mouse Support > Set Cursor Position On Non-Mouse Navigation</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.rainbow</li>
			<li>Added CLICK_BULK (when saved state is applied), CLICK_AUTO (when rainbow changes colour), & CLICK_FLAG_AUTO</li>
			<li>Added TOAST_FORCE_ABOVE_MAP</li>
			<li>Changed util.toast's return type to void</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.51.2', '29/06/2021 21:26'); ?>
<ul>
	<li>Improved super flight</li>
	<li>Improved gravity gun for controller users</li>
	<li>Improved modded health detection</li>
	<li>Made block crash models & water animals no longer write to log</li>
	<li>Fixed some crash event S3 false-positives</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.51.1', '26/06/2021 17:09'); ?>
<ul>
	<li>Fixed super flight not working as intended when not having a parachute</li>
	<li>Fixed mouse support not working</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.51', '26/06/2021 01:25'); ?>
<ul>
	<li>Stand's default theme has been revised to hopefully be easier on your eyes and CPU while providing more customization options</li>
	<li>Added Self > Movement > "Super Flight" & "No Collision"</li>
	<li>Added Self > Appearance > Remove Attachments</li>
	<li>Added Vehicle > Personal Vehicles > Sort By</li>
	<li>Removed Vehicle > AR Speedometer > Show While On Foot as it is redundant due to correlations which you can configure in the context menu</li>
	<li>Added Online > Protections > Modder Detection > "Modded Health" & "Dead For Too Long"</li>
	<li>Added Online > ATM > Withdraw</li>
	<li>Added Players > Settings > Tags > Dead</li>
	<li>Added World > "Position" & "Clock"</li>
	<li>Added Stand > ASI Mods > Settings > Deceive Online Checks</li>
	<li>Added Stand > Appearance > "Scrollbar" & "Border Width"</li>
	<li>Updated Stand > Appearance > Spacer Size to longer affect text spacing</li>
	<li>Added Stand > Settings > "Hide Information" & "Selectable Dividers"</li>
	<li>Added Stand > Saved Commands</li>
	<li>
		Lua API
		<ul>
			<li>Added menu.get_position; deprecated menu.get_x & menu.get_y</li>
			<li>Added menu.get_main_view_position_and_size</li>
			<li>Commands created within a player's list will now automatically have their command names appended by the player's name and are registered for automatic collapsing</li>
		</ul>
	</li>
	<li>A handful of other changes</li>
</ul>
<?php printHeader('Stand 0.50.3', '19/06/2021 17:31'); ?>
<ul>
	<li>Improved handling when levitate passive min is bigger than max</li>
	<li>Improved anti-crash cam to focus on sunrise sooner</li>
	<li>Fixed special characters being corrupted on saved outfit names</li>
	<li>Fixed current model indicator affecting wardrobe order</li>
	<li>Fixed outfits not having proper command names</li>
	<li>Fixed open profile by name & rid for controller users</li>
	<li>Lua: Fixed player roots not being available when expected</li>
	<li>Lua: Fixed chat event handlers not being able to trigger script events</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.50.2', '17/06/2021 11:46'); ?>
<ul>
	<li>Improved Self > Appearance > Transform to keep outfit when switching to same model</li>
	<li>Improved Online > Set Session Time</li>
	<li>Enabled notifications for "vehicle takeover" by default</li>
	<li>Reduced ped limit for "clone create near pool limit"</li>
	<li>Fixed Player > Open Profile not properly working when using a controller</li>
	<li>Removed Modded Event CA, UA, & DA detections</li>
	<li>Lua: Added optional even_when_disabled and even_when_inappropriate params to menu.get_active_list_cursor_text</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.50.1', '14/06/2021 06:48'); ?>
<ul>
	<li>Improved Game > Disables > Disable Game Inputs > Presets > Mouse</li>
	<li>Disabled default reactions for Online > Protections > Syncs > Incoming Syncs > Clone Create Near Pool Limit</li>
	<li>Fixed ASI Mods not linking against Stand</li>
	<li>Fixed a kick event false-positive</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.50', '13/06/2021 09:17'); ?>
<ul>
	<li>Added Self > Appearance > Outfit > Wardrobe > Save Outfit > What To Save</li>
	<li>Added Vehicle > "Personal Vehicles" & "Open/Close Doors"</li>
	<li>Added Online > Transitions > Session Hopper</li>
	<li>Added Online > Restrictions > Bypass Time Trial Vehicle Suitability</li>
	<li>Added "CIA IP Address" to [Online > Protections > Modder Detection] and [Online > Spoofing > IP Address Spoofing > Presets]</li>
	<li>Added Online > Disable Daily Expenses</li>
	<li>Added Player(s) > CEO Money Loop</li>
	<li>Added World > Repeat Last Teleport</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Draw Line To Targets</li>
	<li>Added Game > Camera > Anti-Crash Camera</li>
	<li>Added Game > Info Overlay > Draw Handlers</li>
	<li>Added Stand > Appearance > Header > Frame Interval</li>
	<li>Added Stand > Commands With Non-Default State</li>
	<li>Command Box: Now has a history (navigated with arrow up & down keys)</li>
	<li>Lua: Added menu.get_active_list_cursor_text & util.spoof_script</li>
	<li>Removed Stand > Unload Menus Loaded Before Stand because it apparently only worked with Paragon</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.49.2', '11/06/2021 22:07'); ?>
<ul>
	<li>Game > Camera > Camera Distance Multiplier can now be negative</li>
	<li>Improved performance of watch_dogs-like world hacking and aimbot</li>
	<li>Improved triggerbot in regards to ped-vehicle separation and fixed shooting at dead entities</li>
	<li>Fixed "clone create near pool limit" being too lenient</li>
	<li>Fixed "attacking while invulnerable" modder detection being possible on players where incoming syncs are blocked</li>
	<li>Fixed a series of unforunate design decisions that caused certain player names to break Stand</li>
	<li>Fixed certain human artefacts in state and hotkey files causing an infinite loop</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.49.1', '08/06/2021 05:12'); ?>
<ul>
	<li>Stand is now available in Spanish thanks to Lancito01</li>
	<li>Improved Stand > Appearance > Theme > Set Font to refresh upon entering</li>
	<li>Improved input handling in regards to if attack is pressed in vehicles without weapons</li>
	<li>Fixed Find Model, Find Vehicle, & Find Command only taking a single word as argument</li>
	<li>Fixed a possible access violation upon injection</li>
	<li>Fixed Stand unloading due to unsuccessful authentication</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.49', '05/06/2021 01:47'); ?>
<ul>
	<li>
		Context Menu
		<ul>
			<li>
				Added "Being On Foot" correlation for toggles
				<ul>
					<li>Replaced Self > Weapons > "Explosive Hits {On Foot, In Vehicles}" with "Explosive Hits"</li>
				</ul>
			</li>
			<li>Added "Aiming" correlation for toggles</li>
		</ul>
	</li>
	<li>Added Self > Weapons > "When Aiming...", "When Shooting..." & "Gravity Gun"</li>
	<li>Updated Online > Protections > Block Bailing</li>
	<li>Added World > NPC Aim Punishments > Delete</li>
	<li>Added Stand > Appearance > Theme > Use Preset Font</li>
	<li>Added Stand > Appearance > Tabs > Text Alignment</li>
	<li>Added Stand > Find Command</li>
	<li>Lua: Added util.delete_entity</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.48.2', '31/05/2021 21:45'); ?>
<ul>
	<li>Stand is now available in Russian thanks to pNoName</li>
	<li>Fixed Online > Bull Shark Testosterone (BST) operating while you're dead</li>
	<li>Fixed the Player History not being openable via a hotkey</li>
	<li>Fixed a state & hotkey files parsing error</li>
	<li>Fixed the [Attacked You] flag sometimes not being visually indicated</li>
	<li>Lua: Added lib\?.dll to package.cpath</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.48.1', '29/05/2021 17:44'); ?>
<ul>
	<li>Improved Online > Off The Radar</li>
	<li>Fixed Online > Bull Shark Testosterone (BST) operating while in the clouds</li>
	<li>Fixed tutorial being uncompletable for some users</li>
	<li>Fixed exceptions with Vehicle > Spawner > Manufacturer Names</li>
	<li>Fixed possible exceptions when kicking someone</li>
	<li>Fixed some commands being case-sensitive</li>
	<li>Fixed wrong Y coordinate for some rendering tasks</li>
</ul>
<?php printHeader('Stand 0.48', '29/05/2021 15:05'); ?>
<ul>
	<li>Stand is now available in Korean thanks to IceDoomfist</li>
	<li>Added Online > Player History > "Find Players", "Saved Players" & "Players With Join Reactions"</li>
	<li>Updated Online > Protections > Block Bailing > Enabled to include the bail when changing primary crew while in a session</li>
	<li>Added Players > Settings > Cash Drop Delay</li>
	<li>Added Player > Blame For Killing...</li>
	<li>Added Game > Disables > Disable Game Inputs > Invert</li>
	<li>Added Stand > Appearance > Address Bar > Cursor Position Includes Dividers</li>
	<li>Added Stand > Unload Menus Loaded Before Stand</li>
	<li>Fixed random crashes with low latency bone esp rendering</li>
	<li>
		Lua API
		<ul>
			<li>Updated directx.draw_{texture,line} functions to use HUD coordinate space (superimposed 1920x1080) to be consistent</li>
			<li>Added directx.draw_{texture,text,rect,line}_client functions to draw in client coordinate space (based on game window size)</li>
			<li>Added util.set_time & directx.get_client_size</li>
			<li>Removed directx.on_present</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.47.1', '22/05/2021 07:07'); ?>
<ul>
	<li>Fixed some settings from 0.46.x state files not being converted correctly</li>
	<li>Fixed a coordinate conversion error causing "mouse support" and "show text bounding boxes" to break</li>
</ul>
<?php printHeader('Stand 0.47', '22/05/2021 04:17'); ?>
<ul>
	<li>Added Self > Movement > Walk Underwater</li>
	<li>Added Online > Transitions > Disable DLC Intro Movie</li>
	<li>[Toxic Edition] Added Online > Transitions > Break Sessions But Join Fast</li>
	<li>[Toxic Edition] Added Online > Spoofing > Host Token Spoofing > Kick Host When Joining As Next In Queue</li>
	<li>Added Online > Chat > Commands > "For Friends" & "For Strangers" > "Spawn Commands" & "Toxic Commands"</li>
	<li>Added Player(s) > Explode</li>
	<li>Added "Low Latency Rendering" for Bone ESP options</li>
	<li>
		Stand > Appearance
		<ul>
			<li>Added Theme > Set Font</li>
			<li>Added Address Bar > Address Bar</li>
			<li>Added Tabs > Position</li>
			<li>Added Command Info Text > Indicate If Usable By Other Players</li>
		</ul>
	</li>
	<li>Added Stand > Conformance > Drop Those Frames</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.46.4', '17/05/2021 05:01'); ?>
<ul>
	<li>Patched Nightfall's Crash</li>
	<li>Fixed a random crash when unloading while co-loading GTA Online</li>
	<li>Fixed "copied to clipboard" notification sometimes showing random text</li>
	<li>Fixed a possible data corruption when saving player history</li>
	<li>Potentially fixed automatically save state randomly clearing state</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.46.3', '15/05/2021 00:24'); ?>
<ul>
	<li>Patched Cherax' updated Crash V2</li>
	<li>Worked around some Lua jankiness causing native invokations to fail</li>
</ul>
<?php printHeader('Stand 0.46.2', '14/05/2021 17:36'); ?>
<ul>
	<li>Lua API: Added util.get_all_vehicles, util.get_all_peds, util.get_all_objects & util.get_all_pickups</li>
	<li>Improved lua script error messages</li>
	<li>Fixed dividers in lua scripts being uncrossable</li>
	<li>Fixed cherax user detection only working in sessions with 2 people</li>
	<li>Fixed incorrect list size with "show cursor position" in lua scripts with dividers after stopping them</li>
	<li>Fixed reactions for broad sync events not having a warning</li>
	<li>Fixed watch_dogs-like world hacking sometimes selecting npcs in vehicles instead of the vehicle</li>
	<li>Fixed reporting wrong game version to ASI mods</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.46.1', '12/05/2021 16:17'); ?>
<ul>
	<li>Re-added Player(s) > Drop Cash but it is no longer available for yourself</li>
	<li>Improved Online > Protections > Modder Detection > Other User Identifications to include Cherax</li>
	<li>Fixed Self > Lock Wanted Level not working</li>
	<li>Fixed Game > Disable Restricted Areas causing you to get no weapons when joining a session</li>
	<li>
		Lua API
		<ul>
			<li>Added directx.get_text_size, menu.slider, menu.click_slider, menu.colour, menu.on_tick_in_viewport, menu.on_focus, menu.on_blur, menu.remove_handler, menu.set_menu_name, menu.set_command_names, menu.set_help_text & util.on_stop</li>
			<li>Added optional default_on parameter to menu.toggle</li>
		</ul>
	</li>
	<li>Improved event dissecting and logging and patched another issue the game has with synctrees</li>
	<li>Patched the "watchdog" crash the game does itself for some reason</li>
	<li>Improved pointer cache so Stand injects even faster</li>
	<li>Fixed some rare use-after-free issues while unloading Stand</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.46', '09/05/2021 19:55'); ?>
<ul>
	<li>Added Self > Appearance > Outfit > Wardrobe > Prefabricated Outfits > Current Model: Random</li>
	<li>Added Self > Weapons > Aimbot > Aimbot Affects Field Of View</li>
	<li>Added Self > Weapons > Triggerbot > Target Selection</li>
	<li>Added Vehicle > Los Santos Customs > Bulletproof Tyres</li>
	<li>Added Online > Protections > Modder Detection > "Modded Character Model" & "FBI IP Address"</li>
	<li>Added Online > Protections > Vehicle Takeover</li>
	<li>Added Online > Protections > Incoming Syncs > Clone Create Near Pool Limit</li>
	<li>Added "Copy Rockstar ID" in Online > Player History</li>
	<li>Added Online > Spoofing > IP Address Spoofing</li>
	<li>Added Online > Tunables > Peyote Plants</li>
	<li>Added Online > Trigger Rockstar Anti Cheat 2</li>
	<li>Added Players > All Players > Excludes > "Exclude Crew Members" & "Exclude Stand Users"</li>
	<li>Removed Player(s) > Drop Cash</li>
	<li>Added World > NPC & Player Aim Punishments > Interrupt</li>
	<li>Added World > NPC ESP > Exclude Dead</li>
	<li>Added Game > Radio > Radio Stations</li>
	<li>Added Stand > Appearance > Spacer Size</li>
	<li>Added Stand > Settings > "Automatically Proceed On Warnings" & "Disable Hotkeys"</li>
	<li>
		Lua API
		<ul>
			<li>Added CLICK_FLAG_WEB & CLICK_WEB_COMMAND constants</li>
			<li>Added players.get_rank, players.get_rp, players.get_money, players.get_wallet, players.get_bank, players.get_kd, players.get_kills, players.get_deaths & players.is_otr</li>
			<li>Added menu.is_open, menu.get_x & menu.get_y</li>
			<li>Added util.is_session_transition_active & util.get_ground_z</li>
			<li>Added new variants of directx.draw_texture</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.45.2', '04/05/2021 15:41'); ?>
<ul>
	<li>Added Stand > Experiments > Notification When Desync Kicked</li>
	<li>Fixed some logic errors with Self > Weapons > Aimbot</li>
	<li>Fixed some false-positive Crash Event SR & CS detections when co-loading</li>
	<li>Fixed some false-positive Invalid Event CA, UA & DA detections</li>
	<li>Lua: Fixed DirectX draws not occurring in logical order</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.45.1', '02/05/2021 21:51'); ?>
<ul>
	<li>Improved {Stand > Get The [Stand User] Role} to allow Basic Edition users to get a role as well</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.45', '01/05/2021 14:28'); ?>
<ul>
	<li>
		Context Menu
		<ul>
			<li>Added "Correlate State With" for toggles</li>
			<li>Added "Copy Address"</li>
		</ul>
	</li>
	<li>Added "Locally Visible" to [Self > Appearance > Invisibility] and [Vehicle > Invisibility]</li>
	<li>Added Self > Weapons > AR Target Marker</li>
	<li>Added Vehicle > Spawner > Manufacturer Names</li>
	<li>Added Vehicle > Super Drive > Controller Key</li>
	<li>Added Online > Quick Progress > "Unlock GTA Online (Skip Prologue)" & "Unlock Ammu-Nation Tints"</li>
	<li>Updated Online > Player History to have better tracking at the cost of discarding your old history</li>
	<li>[Full Edition Only] Added Online > Spoofing > RID Spoofing > Get Spoofed RID From Spoofed Name</li>
	<li>Added Online > "Set Session Weather: Cooldown"</li>
	<li>Added Players > Settings > AR Beacon On Focused Players > "In Player List", "Within A Player's List" & "Exclude Me"</li>
	<li>Added Players > Settings > Sort By > Host Queue Position</li>
	<li>Added Player > Information > "Host Queue Position", "Discovered" & "Invulnerable For"</li>
	<li>Improved Player > Drop Cash to drop 10.000 instead of 2.500 for yourself</li>
	<li>Added Player > Chat As Them</li>
	<li>Added Game > Disable Game Inputs</li>
	<li>Added Stand > Appearance > Theme > Focus & Unfocused Right-Bound Text Colour</li>
	<li>Added Stand > Appearance > Colour Commands > "Preview Colour In Sprite" & "Preview Colour In List"</li>
	<li>Added Stand > Settings > Keyboard Input Scheme > Presets > Flexible</li>
	<li>Added Stand > Settings > "Interrupt Holding On Wrap-Around" & "Controller Input Scheme"</li>
	<li>Added Stand > Open Stand Folder</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.44.3', '28/04/2021 19:07'); ?>
<ul>
	<li>Removed Online > Quick Progress > Slot Machines Outcome</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.44.2', '28/04/2021 01:50'); ?>
<ul>
	<li>Fixed triggerbot not working with some weapons</li>
	<li>Fixed rapid fire shots landing below the crosshair</li>
	<li>Fixed inconsistent behaviour with default "spoofed host token" value</li>
	<li>Fixed "apartment invite" reactions not working</li>
	<li>Fixed "disable idle camera" not including vehicle idle cam</li>
	<li>Fixed RAC detections in some cases</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.44.1', '26/04/2021 23:29'); ?>
<ul>
	<li>Improved invalid name filtering in regards to colour prefices so "~w~Herobrine" will be changed to "Herobine" instead of "wHerobrine" now</li>
	<li>Fixed some false-positive detections for "Modded Name" and "Attacking While Invulnerable"</li>
	<li>Fixed desync kick being available on all players</li>
	<li>Fixed pattern caching breaking some co-loads</li>
	<li>Fixed player list not keeping focus when a player is discovered and the sorting puts them above your cursor</li>
	<li>Addressed some cases of [Unknown Key]</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.6.2', '26/04/2021 20:56'); ?>
<ul>
	<li>Removed the need for the Launchpad to be started as Administrator</li>
</ul>
<?php printHeader('Stand 0.44', '25/04/2021 15:43'); ?>
<ul>
	<li>Stand now has a Basic Edition as a middle-ground between the Free Edition and Full Edition — learn more at <a href="https://stand.gg/editions" target="_blank">https://stand.gg/editions</a></li>
	<li>Added "Load State" to Context Menu</li>
	<li>Added Online > Restrictions > Disable Mechanic Cooldown</li>
	<li>Replaced Online > "Lag Out" with "Be Alone"</li>
	<li>Fixed Player > Kick > Desync possibly desyncing yourself when used to quickly</li>
	<li>Added "Attacked You" player tag</li>
	<li>Added Game > Shader Override</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.43.5', '25/04/2021 03:26'); ?>
<ul>
	<li>The command box now supports ctrl+backspace</li>
	<li>Updated Vehicle > Super Drive</li>
	<li>Improved World > World Border for Cayo Perico world state</li>
	<li>Improved handling for sliders that can't be changed</li>
	<li>Improved handling when the same key is bound to multiple commands</li>
	<li>Fixed "Join Session" and "Spectate Player" options when used via controller</li>
	<li>Fixed levitation not responding while the interaction menu is open</li>
	<li>Fixed some exceptions when using the Chinese translation</li>
	<li>Fixed some vehicles not being properly named</li>
	<li>Fixed the in-game phone opening while playing snake or pong with a conflicting input scheme</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.43.4', '23/04/2021 16:58'); ?>
<ul>
	<li>Patched the game reporting cash drops done via Stand</li>
	<li>Fixed address separator being ignored when truncating</li>
	<li>Fixed some false-positive invalid model sync detections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.43.3', '20/04/2021 21:37'); ?>
<ul>
	<li>Fixed Game > Info Overlay > Friends always showing 0 friends</li>
	<li>Fixed Stand choking on empty lines in State.txt and Hotkeys.txt</li>
	<li>Potentially fixed a crash when unloading</li>
	<li>Removed Online > Transitions > Bypass Join Timeout in favour of unbroken sessions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.43.2', '18/04/2021 20:48'); ?>
<ul>
	<li>Fixed "RID Spoofing: Disabled" not behaving as intended (for real this time)</li>
</ul>
<?php printHeader('Stand 0.43.1', '18/04/2021 20:39'); ?>
<ul>
	<li>Updated Chinese translation</li>
	<li>Fixed vehicle class not showing in search results</li>
	<li>Fixed a false-negative for invalid model sync</li>
	<li>Fixed spoofed Rockstar ID detection not working</li>
	<li>Fixed "RID Spoofing: Disabled" not behaving as intended</li>
	<li>Fixed centered text ignoring the info text scale</li>
	<li>Fixed state sometimes not automatically saving when unloading</li>
	<li>Fixed using the command box while the game is paused making Stand unresponsive</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.43', '17/04/2021 12:19'); ?>
<ul>
	<li>Stand now has a command context menu instead of dedicated "save state" and "update hotkey" buttons. For existing users, this will default to [O] but Stand > Settings > Keyboard Input Scheme can be used to change this, e.g. to [Numpad 3].</li>
	<li>
		Stand is now available in Chinese thanks to zzzz
		<ul>
			<li>The default font has been updated to support this, so you might want to delete your %appdata%\Stand\Theme\Font.spritefont or adjust the text sliders in Stand > Appearance > Theme.</li>
		</ul>
	</li>
	<li>Added Vehicle > AR Speedometer > Colour</li>
	<li>Added Online > Protections > Block Blaming</li>
	<li>Updated Online > Spoofing > RID Spoofing</li>
	<li>Added Online > Vote Kick Reactions</li>
	<li>Added Players > Settings > Sorting</li>
	<li>Added Player > Information > Can Be Vote Kicked</li>
	<li>Updated modder detections so you can click on them to remove them</li>
	<li>Updated Player(s) > Kick so you can select a method (or continue using the "Smart" option)</li>
	<li>Added World > Watch_Dogs-Like World Hacking > Colour</li>
	<li>Added World > World Border</li>
	<li>Added more Online options to Game > Info Overlay</li>
	<li>Added Game > Edit HUD/UI Colours</li>
	<li>Separated Stand > Appearance > Theme > "HUD Colour" & "AR Colour"</li>
	<li>Added Stand > Appearance > Address Separator</li>
	<li>Added Stand > Appearance > Show Button Instructions > Smart</li>
	<li>Added Stand > Experiments > Show Player Leave Reasons</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.42.5', '15/04/2021 17:10'); ?>
<ul>
	<li>Fixed invalid model sync false-positives</li>
	<li>Fixed issues with Stand > Regenerate License Key</li>
</ul>
<?php printHeader('Stand 0.42.4', '15/04/2021 15:03'); ?>
<ul>
	<li>You can now hotkey links because why not</li>
	<li>Improved handling when sanity checks fail</li>
	<li>Fixed some false-positive invalid model sync detections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.42.3', '13/04/2021 22:37'); ?>
<ul>
	<li>Fixed more instances of invalid characters in command box input</li>
	<li>Fixed chat box staying open for controller users after automatic messages are added to local history</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.42.2', '12/04/2021 10:00'); ?>
<ul>
	<li>You can now submit or cancel command box input using your controller</li>
	<li>Fixed Vehicle > AR Speedometer being too small for bigger vehicles</li>
	<li>Fixed some false-positives with Take-Two IP Address detection</li>
	<li>Some improvements in regards to receiving events from some free menus</li>
	<li>Fixed host change reactions being applied to script host</li>
	<li>Improved camera mods in regards to vehicles</li>
	<li>Fixed Game > Info Overlay not being ordered consistently</li>
	<li>Fixed Stand > Header: Custom attempting to load folders as images</li>
	<li>Improved Stand > Get The [Stand User] Role</li>
	<li>Lua: Added TOAST_CHAT, TOAST_CHAT_TEAM, & TOAST_DEFAULT constants</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.42.1', '10/04/2021 04:57'); ?>
<ul>
	<li>Some improvements in regards to soft RID spoofing</li>
	<li>Fixed ctrl+x inserting an invalid character into the command box input</li>
	<li>Fixed false-positive "too much armour" detections when All Players > Auto Heal is enabled</li>
	<li>Fixed pickup reactions not working sometimes</li>
	<li>Fixed crew member tag not working</li>
	<li>Fixed some features not working while the menu is open with "no numpad" scheme</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand <del>0.42</del> of life', '09/04/2021 23:17'); ?>
<ul>
	<li>The command box has been given a (re)design</li>
	<li>Added "Announce In Chat" & "Announce In Team Chat" reactions</li>
	<li>Added Online > Protections > Modder Detection > "Rockstar Employee RID", "Take-Two IP Address" & "Attacking While Invulnerable"</li>
	<li>
		Online > Protections
		<ul>
			<li>Updated Block Vote Kicks</li>
			<li>Added Block Bailing</li>
		</ul>
	</li>
	<li>
		Online > Spoofing
		<ul>
			<li>Added RID Spoofing > Soft RID Spoofing</li>
			<li>Added Name & RID Spoofing Presets</li>
		</ul>
	</li>
	<li>Improved Online > Block Joins</li>
	<li>Added Online > Become The Orbital Cannon</li>
	<li>
		Players > Settings > Tags
		<ul>
			<li>Added "Crew Member" & "Using RC Vehicle"</li>
			<li>Added more characters to choose from</li>
		</ul>
	</li>
	<li>Added Player > Spectate</li>
	<li>Added "Send Friend Request" for players in session and history</li>
	<li>Added Game > Info Overlay > Position</li>
	<li>Added Game > Lock Gameplay Camera Heading</li>
	<li>
		Lua API
		<ul>
			<li>Updated to Lua 5.4.3</li>
			<li>Added menu.trigger_commands, players.get_host, players.get_script_host, & players.get_host_token</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.41.4', '05/04/2021 19:42'); ?>
<ul>
	<li>Fixed Crash Event (C3) false positives when co-loading</li>
	<li>Fixed join or spectate via RID or name sometimes not working</li>
	<li>Fixed teleport sometimes using pre-emptive ground Z, causing you to end up below the world</li>
	<li>Fixed World > Water Behaviour > Be Gone not working in places where multiple water quads overlap</li>
	<li>Fixed Stand > Appearance > Header sometimes ignoring load state or apply default state</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.41.3', '05/04/2021 01:36'); ?>
<ul>
	<li>Changed crash event U2 detection into invalid event</li>
	<li>Fixed teleport using a worse guess over a bad guess</li>
	<li>Fixed World > Watch_Dogs-Like World Hacking not updating entity owner in real time</li>
	<li>Fixed Stand > Appearance > Show Cursor Position counting dividers</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.41.2', '02/04/2021 23:47'); ?>
<ul>
	<li>Fixed some false positives with crash event detections</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.41.1', '02/04/2021 00:18'); ?>
<ul>
	<li>Improved Vehicle > Los Santos Customs > Tire Smoke Colour</li>
	<li>Improved Online > Protections > Modder Detection > Invalid RP</li>
	<li>Removed Online > Spoofing > Rockstar Developer Flag because other people don't see it</li>
	<li>Removed Stand > Appearance > Superior Visual Experience because it was too OP</li>
	<li>Fixed some false positives with crash event detections</li>
	<li>
		Lua API
		<ul>
			<li>Added util.create_tick_handler</li>
			<li>Fixed directx.on_present not providing sufficient backward-compatbility</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand Launchpad 1.6.1', '02/04/2021 00:11'); ?>
<ul>
	<li>Set default "Automatic Injection Delay" value to 0 seconds</li>
	<li>Fixed closing the Launchpad before the DLL download finishes causing subsequent injections to fail</li>
	<li>Fixed injection failures when deleting the Stand DLL after opening the Launchpad but before injection</li>
	<li>Fixed status text being "Injected 1/0 DLLs" under some circumstances</li>
</ul>
<?php printHeader('Stand 0.41', '01/04/2021 00:06'); ?>
<ul>
	<li>We've updated Stand's look so it is superior, like the menu itself. Please don't feel free to use the options provided in Stand > Appearance to change it.</li>
	<li>Added Self > Weapons > Aimbot: Exclude Friends</li>
	<li>Added Vehicle > Spawner > In Vehicle Behaviour > Keep Velocity</li>
	<li>Improved Vehicle > Los Santos Customs so it finally lives up to its name</li>
	<li>Improved Online > Transitions > Bypass Join Timeout</li>
	<li>Added Online > Protections > Modder Detection > "Any Modder Detection", "Spoofed Rockstar ID", "Modded Host Token", "Rockstar Developer Flag", "Announcing Time As Non-Host" & "Invalid RP"</li>
	<li>Added Online > Protections > "Script Error Recovery", "Block Vote Kicks" & "Syncs"</li>
	<li>Added more options to Online > Chat > Commands > Prefix</li>
	<li>Added Online > Spoofing > "Host Token Spoofing" & "Rockstar Developer Flag"</li>
	<li>Added Online > "Become Script Host", "Block Joins", "Host Change Reactions", "Script Host Change Reactions" & "Log Leaving Players"</li>
	<li>Added Players > Settings > Tags > Joining</li>
	<li>Added Player(s) > Send To Job</li>
	<li>Added Player > Information > Host Token</li>
	<li>Added World > "Teleport to..." & "Waypoint on..." > Landmarks > "Los Santos International Airport" & "Fort Zancudo"</li>
	<li>Added World > IPLs > Mount Chiliad UFO</li>
	<li>Added World > Water Behaviour > Be Gone</li>
	<li>Added World > Water Opacity Differential</li>
	<li>Added Game > Rewind Position</li>
	<li>Added Game > Freecam > Movement Controls</li>
	<li>Added Game > "Disable Restricted Areas" & "Unlock All Achievements"</li>
	<li>Added Stand > Appearance > "Superior Visual Experience" & "Header"</li>
	<li>Added Stand > Settings > Open Stand After Injection</li>
	<li>Added Stand > Settings > Modifier Key Matching (default is "Smart", previous behaviour was "Lax")</li>
	<li>Lua API: directx.on_present is now an alias for util.create_thread, so you can call natives within that context, and you can also call all DirectX functions at any time now.</li>
	<li>Many other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.14', '19/03/2021 07:23'); ?>
<ul>
	<li>Improved Game > YEET so it doesn't show a warning if used via command or hotkey</li>
	<li>Fixed World > Override Weather > Don't Override sometimes wrongly setting the weather to snow</li>
	<li>Fixed phone not opening after unloading Stand under some circumstances</li>
	<li>Fixed vehicles spawned by other Stand users despawning and vice-versa</li>
	<li>Fixed performance tuning not applying turbo</li>
	<li>Some other improvements & bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.13', '17/03/2021 01:24'); ?>
<ul>
	<li>Fixed RID spoofing not working</li>
</ul>
<?php printHeader('Stand 0.40.12', '16/03/2021 18:25'); ?>
<ul>
	<li>
		Updated for build 2245 (Online 1.54)
		<ul>
			<li>Removed Online speedup patch because R* addressed the issue</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 0.40.11', '15/03/2021 18:37'); ?>
<ul>
	<li>Added "offtheradar" and "offradar" aliases for Online > Off The Radar</li>
	<li>Improved Self > Weapons > Range Multiplier to include lock-on range</li>
	<li>Fixed Self > Movement > Levitation ignoring water when guiding you down</li>
	<li>Fixed spoofed RID persisting locally even after disabling RID spoofing</li>
	<li>Fixed mouse mode not working correctly on all resolutions</li>
	<li>Some other improvements & bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.10', '11/03/2021 14:22'); ?>
<ul>
	<li>Added "tpveryhigh" and "teleportveryhigh" aliases for World > Teleport To ... > Very High Up</li>
	<li>Improved World > "Teleport To..." & "Waypoint On..." > Objective</li>
	<li>Improved Stand > Experiments > Show Interior ID so that it's more apparent what "the number on the screen" is</li>
	<li>Fixed World > IPLs > Cayo Perico not ensuring Online world state</li>
	<li>Fixed snake sometimes not moving</li>
	<li>Fixed inconsistent info overlay order when changing state</li>
	<li>Fixed changed labels persisting when changing state</li>
	<li>Fixed non-default value of Stand > Appearance > Tabs forcing the menu open when state is loaded</li>
	<li>Fixed AR/HUD colour sometimes being unconditionally white</li>
	<li>Some other improvements & bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.9', '08/03/2021 08:34'); ?>
<ul>
	<li>Fixed Online speedup patch not working on SC & EGS</li>
	<li>Fixed Online > Quick Progress > Slot Machines Outcome not preventing excessive use</li>
</ul>
<?php printHeader('Stand 0.40.8', '07/03/2021 11:19'); ?>
<ul>
	<li>Improved co-loading</li>
</ul>
<?php printHeader('Stand 0.40.7', '07/03/2021 09:32'); ?>
<ul>
	<li>Improved injection performance</li>
	<li>Improved tutorial for first-time users</li>
	<li>Fixed "Log player's network events" reaction</li>
	<li>Fixed "exclude me" being available for some reactions where it wasn't needed</li>
	<li>Fixed errors when removing a label in Game > Edit Labels</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.6', '01/03/2021 06:00'); ?>
<ul>
	<li>Patched the bottlenecks in loading GTA Online identified by tostercx and removed Online > Transitions > Speed Up Transitions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.5', '27/02/2021 23:05'); ?>
<ul>
	<li>Fixed "log player's network events" reaction not working when kick reaction is enabled</li>
	<li>Fixed errors when injecting with certain IPLs enabled in saved state</li>
	<li>Fixed non-default value of Stand > Appearance > Max Visible Commands stealing focus when loading state</li>
	<li>Fixed a crash when unloading without a license key</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.4', '17/02/2021 12:12'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.3', '16/02/2021 19:08'); ?>
<ul>
	<li>Improved Player(s) > "Kick" & "Crash"</li>
	<li>Improved SE crash protections</li>
	<li>Improved memory management and fixed exceptions with Lua scripts</li>
	<li>Lua: Added util.set_weather</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.40.2', '01/02/2021 23:18'); ?>
<ul>
	<li>Improved Online > Skip Swoop Down</li>
	<li>Fixed incorrect "Crash Event" detections when co-loading</li>
	<li>Fixed rendering on non-16:9 aspect ratios</li>
</ul>
<?php printHeader('Stand 0.40.1', '28/01/2021 13:52'); ?>
<ul>
	<li>Improved Game > Field of View in regards to third-person perspective</li>
	<li>Reduced stack trace sizes</li>
</ul>
<?php printHeader('Stand 0.40', '26/01/2021 10:35'); ?>
<ul>
	<li>Added Self > Infinite Stamina</li>
	<li>Added Players > [Player] > Pong</li>
	<li>Added World > Teleport To... > Teleport To Waypoints With Portals</li>
	<li>Added Stand > Settings > Sound Effects</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.39.5', '21/01/2021 05:50'); ?>
<ul>
	<li>Improved controller input, note that bumper & trigger buttons have been switched</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.39.4', '18/01/2021 12:36'); ?>
<ul>
	<li>Improved co-loading</li>
	<li>Reduced rendering latency for AR Speedometer & Bone ESP</li>
	<li>Fixed an edge case where Stand would not finish loading your saved state</li>
</ul>
<?php printHeader('Stand 0.39.3', '18/01/2021 03:01'); ?>
<ul>
	<li>Fixed some commands not saving as intended</li>
</ul>
<?php printHeader('Stand 0.39.2', '17/01/2021 07:20'); ?>
<ul>
	<li>Fixed "You're a [Stand User] now!" message sometimes being white</li>
	<li>
		Lua API
		<ul>
			<li>Added chat.is_open(), chat.open(), chat.close(), & util.is_session_started()</li>
			<li>Fixed some chat functions not behaving as intended</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 0.39.1', '17/01/2021 04:16'); ?>
<ul>
	<li>Added Stand > Experiments > Adventure Portals</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.39', '15/01/2021 10:02'); ?>
<ul>
	<li>
		Themes: Textures can now have arbitrary resolutions and use the PNG format
		<ul>
			<li>Custom textures will need to be converted and have their paddings adjusted</li>
		</ul>
	</li>
	<li>Added Vehicle > Spawner > Make Spawned Vehicles Indestructible</li>
	<li>Added Vehicle > Headlights Intensity</li>
	<li>Improved Online > "Protections" & "Player Join Reactions" so you now have even more ways to customise reactions to your liking</li>
	<li>Added Online > Request Services > "Request Ammo Drop", "Request Boat Pickup", "Request Helicopter Pickup" & "Request Helicopter Backup"</li>
	<li>Added Online > Enable Halloween Event</li>
	<li>Improved Player(s) > Crash</li>
	<li>Added World > "NPC ESP" & "Player ESP" > Bone ESP</li>
	<li>Fixed Online > Bull Shark Testosterone (BST) not working</li>
	<li>Some other improvements and bugfixes</li>
	<li>
		Lua API
		<ul>
			<li>Added directx.draw_text, directx.draw_rect, directx.draw_line, & text alignment constants</li>
			<li>Removed deprecated CLICK_FLAG_MENU, CLICK_MENU_INSTANT & CLICK_MENU_SUPENDED constants</li>
			<li>Fixed present handlers being called without error handling</li>
		</ul>
	</li>
</ul>
<?php printHeader('Launchpad 1.6.0', '13/01/2021 22:56'); ?>
<ul>
	<li>Added "Open Stand Folder"</li>
	<li>Added a delay after injecting to avoid double-injection</li>
</ul>
<?php printHeader('Stand 0.38', '07/01/2021 20:22'); ?>
<ul>
	<li>Added Self > Weapons > "Current Weapon: Tint" & "Current Weapon: Tint: Rainbow Mode"</li>
	<li>Added Vehicle > Fix Vehicle</li>
	<li>Added Game > "Night Vision" & "Thermal Vision"</li>
	<li>Improved Self > Immortality in regards to very painful fires</li>
	<li>Improved Vehicle > Instantly Enter & Exit Vehicles in regards to entering helicopters</li>
	<li>Improved co-loading in regards to chat</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.37', '31/12/2020 19:16'); ?>
<ul>
	<li>Added Self > Weapons > Range Multiplier</li>
	<li>Added Player(s) > Increment Commend/Report Stats</li>
	<li>Added Online > Protections > Modder Detection > Stand User Identification (on by default)</li>
	<li>
		Online > Rockstar ID Tools
		<ul>
			<li>Added {Join Session, Spectate Player, & Open Profile} By Name</li>
			<li>Patched "Player is no longer in session." when your target is spoofing their RID</li>
		</ul>
	</li>
	<li>Improved Online > "Quit To Story Mode" and moved old method to "Force Quit To Story Mode"</li>
	<li>Improved Stand > ASI Mods so ASI mods know where they are</li>
	<li>Lua API: Updated Lua to 5.4.2</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.36.5', '31/12/2020 14:08'); ?>
<ul>
	<li>Switched port for authserver to hopefully avoid connection issues in some environments</li>
	<li>Reduced the impact of the game window being unfocused to avoid co-loading issues</li>
	<li>Fixed a possible freeze when running Lua scripts</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.36.4', '29/12/2020 19:10'); ?>
<ul>
	<li>Improved teleporting to barber shops, tattoo parlors, and clothes stores</li>
	<li>Fixed a passive crash protection not working</li>
	<li>
		Lua API
		<ul>
			<li>Added directx.on_present, directx.create_texture, directx.draw_texture, util.remove_handler, util.stop_thread, util.stop_script, memory.read_byte, memory.read_long, memory.write_byte, & memory.write_long</li>
			<li>Updated chat.on_message, players.on_join, & players.on_leave to return an int to be used with util.remove_handler</li>
			<li>Updated example scripts and natives lib</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.36.3', '26/12/2020 16:34'); ?>
<ul>
	<li>Fixed Self > Auto Heal causing you to be able to move your camera when you die</li>
	<li>Fixed Online > Transitions > Speed Up Transitions not showing the intended warning before enabling</li>
	<li>Fixed Online > Quick Progress > Set Rank not working for rank 1</li>
	<li>Fixed Online > Player Join Reactions not disabling</li>
	<li>Lua API: Fixed util.create_ped not consuming arguments as expected</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.36.2', '25/12/2020 05:29'); ?>
<ul>
	<li>Fixed Online > Quick Progress > Casino Heist > "Finish First Board" containing "Set Vault Contents" options</li>
	<li>Removed Online > Protections > "Block Force Join Events" because Rockstar patched it</li>
	<li>Lua API: Added `util.create_ped`</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.36.1', '24/12/2020 07:28'); ?>
<ul>
	<li>Improved Player(s) > Block Incoming Syncs</li>
	<li>Improved Stand > ASI Mods so you can now load TrainerV</li>
	<li>Fixed modder tag not persisting</li>
	<li>Fixed other players not being able to use Player(s) > Send Notifications > "Cash Removed", "Cash Stolen" & "Cash Banked"</li>
</ul>
<?php printHeader('Stand 0.36', '24/12/2020 02:10'); ?>
<ul>
	<li>Added Self > Appearance > Invisibility</li>
	<li>Added Vehicle > "Invisibility", "Can't Be Locked On" & "Stop Vehicles When Exiting"</li>
	<li>Added Online > Protections > "Cash Pickup Collected", "RP Pickup Collected", "Block Force Join Events" & "Cayo Perico Invite"</li>
	<li>Added Online > Block Background Script</li>
	<li>Added Players > Settings > Tags</li>
	<li>Added Player(s) > "Teleport To Cayo Perico" & "Drop Cash"</li>
	<li>Added Player(s) > Send Notifications > "Cash Removed", "Cash Stolen", "Cash Banked" & "Notification Spam"</li>
	<li>Added World > "Teleport to..." & "Waypoint on..." > Cayo Perico</li>
	<li>Added World > Set World State > Cayo Perico</li>
	<li>Added World > IPLs > Cayo Perico</li>
	<li>Added Game > "Disable Stunt Jumps", "Disable Cinematic Camera" & "Disable Idle Camera"</li>
	<li>Lua API: Added <code>util.current_unix_time_millis</code> & <code>util.get_entity_address</code></li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.35.4', '18/12/2020 06:02'); ?>
<ul>
	<li>Improved logic for teleport, freecam, & potato mode</li>
	<li>Fixed Online > Quick Progress > Lucky Wheel Reward</li>
	<li>Fixed Player > Gift Spawned Vehicles not being usable by other players</li>
	<li>Fixed World > Watch_Dogs-Like World Hacking responding to inputs while interaction menu is open</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.35.3', '17/12/2020 19:37'); ?>
<ul>
	<li>Moved animals from Self > Appearance > Transform > NPCs into the categories they belong to</li>
	<li>Fixed unreleased DLC vehicles despawning in Online</li>
	<li>Fixed short vehicle commands (e.g. "lazer" instead of "spawn lazer") not working for other players</li>
	<li>Fixed ar beacons making heist planning boards invisible</li>
	<li>Fixed explosion NPC existence punishments being applied to yourself while the pause menu opens</li>
	<li>Fixed a crash with Online > Auto Deposit Wallet</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <code>CLICK_MENU</code> constant</li>
			<li>Deprecated <code>CLICK_FLAG_MENU</code>, <code>CLICK_MENU_INSTANT</code> & <code>CLICK_MENU_SUPENDED</code> constants</li>
			<li>Removed deprecated <code>util.can_loop_continue</code> function</li>
		</ul>
	</li>
</ul>
<?php printHeader('Stand 0.35.2', '16/12/2020 23:48'); ?>
<ul>
	<li>Merged Vehicle > Spawner > Classes > "Sport Classic" & "Sports Classics" into the latter</li>
	<li>Improved teleporting to waypoints when waypoint is on The Music Locker</li>
	<li>Fixed Watch_Dogs-Like World Hacking making Cayo Perico Heist Planning Screen invisible</li>
</ul>
<?php printHeader('Stand 0.35.1', '16/12/2020 21:42'); ?>
<ul>
	<li>
		Updated for Cayo Perico Heist DLC
		<ul>
			<li>Updated Self > Appearance > Transform > NPCs</li>
			<li>Updated Vehicle > Spawner</li>
			<li>Removed glitch and crash weather and protections thereof because Rockstar patched it</li>
		</ul>
	</li>
	<li>Added Online > Chat > Commands > Prefix: #</li>
	<li>Improved exception handling</li>
	<li>Fixed falling below the map when teleporting to some objectives</li>
	<li>Fixed "deletevehicle; tp ..." not working properly because the player entity is outdated by the time the teleport command runs</li>
	<li>Fixed aliases of the same command causing ambiguity when auto-completing (e.g. "tpw" could mean "tpwp" or "tpwaypoint")</li>
</ul>
<?php printHeader('Stand 0.35', '11/12/2020 22:47'); ?>
<ul>
	<li>Seperated Self > Weapons > Explosive Ammo for On Foot & In Vehicles</li>
	<li>Added Online > Protections > Modder Detection > Too Much Armor</li>
	<li>
		Online > Protections > Modder Detection > Reactions
		<ul>
			<li>Seperated For Strangers, Friends Me</li>
			<li>Added "Block Syncs From Modders" & Block Syncs To Modders"</li>
		</ul>
	</li>
	<li>Added Online > Chat > Commands > For {Friends, Strangers} > {Friendly, Neutral, Rude, Aggressive} Commands</li>
	<li>Added "First Seen" & "Last Seen" to Online > Player History</li>
	<li>Added Rank Spoofing to Online > Spoofing</li>
	<li>Added Online > Transitions > Bypass Join Timeout</li>
	<li>Added Player Flag: S[P]ectating</li>
	<li>Added Player(s) > "Block Incoming Syncs" & "Block Outgoing Syncs"</li>
	<li>Added Player > Information > Apartment ID</li>
	<li>Added Player > Teleport Into Their Apartment</li>
	<li>Added Game > YEET</li>
	<li>Added Stand > Get The [Stand User] Role</li>
	<li>Made a lot more commands usable via the command box</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.34.2', '05/12/2020 21:21'); ?>
<ul>
	<li>Improved Self > Movement > Instantly Enter & Leave Vehicles</li>
	<li>Fixed an error in rendering after changing fullscreen state</li>
	<li>Fixed some commands being usable by other players that shouldn't be</li>
	<li>Lua API: Added util.BEGIN_TEXT_COMMAND_THEFEED_POST</li>
</ul>
<?php printHeader('Stand 0.34.1', '05/12/2020 15:44'); ?>
<ul>
	<li>Added Stand > Experiments > Show Apartments</li>
	<li>Removed Herobrine</li>
</ul>
<?php printHeader('Stand 0.34', '03/12/2020 17:28'); ?>
<ul>
	<li>Stand now patches the script vm to prevent some kick events from working even if they're not blocked</li>
	<li>Added Portuguese translation (thanks to aeronyx!)</li>
	<li>Added Self > Movement > Levitation</li>
	<li>Added Online > Protections > Modder Detection > Rockstar Anti Cheat</li>
	<li>Added Online > ESP</li>
	<li>Added Player(s) > Off The Radar</li>
	<li>Added Game > Info Overlay > Natives GTA Invoked Last Tick</li>
	<li>Replaced [Online > New Session > Skip Save Data Loading] with [Online > Speed Up Transitions]</li>
	<li>Replaced [Online > Anti-Clouds Magic] with [Online > Transition Helper]</li>
	<li>Improved Online > Reveal Off The Radar Players</li>
	<li>Improved hooking and unhooking performance</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added functions: menu.my_root, menu.player_root, menu.toggle, menu.divider, menu.delete, players.on_join, players.on_leave, players.exists, players.user, players.list, util.create_thread, filesystem.exists, filesystem.is_regular_file, filesystem.is_dir, filesystem.mkdir, filesystem.mkdirs, filesystem.list_files</li>
			<li>Improved error handling to provide a backtrace in your Log.txt</li>
			<li>Updated to Lua 5.4.1</li>
			<li>Deprecated util.can_loop_continue, it now always returns true, and instead util.yield deals with stopping the script</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Launchpad 1.5.0', '01/12/2020 07:57'); ?>
<ul>
	<li>Added Changelog</li>
	<li>Improved injecting to allow the same DLL to be injected again without the need for it to be unloaded first</li>
	<li>Injection errors now no longer create a message box window but you can still see them by opening the Launchpad in a console</li>
</ul>
<?php printHeader('Stand 0.33.7', '29/11/2020 08:10'); ?>
<ul>
	<li>Fixed a crash when resizing the game after unloading Stand</li>
</ul>
<?php printHeader('Stand 0.33.6', '29/11/2020 07:57'); ?>
<ul>
	<li>Improved rendering on some resolutions</li>
	<li>Fixed resizing the game causing visual glitches</li>
	<li>Fixed ASI Mods being duplicated when refreshing list</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.33.5', '28/11/2020 10:50'); ?>
<ul>
	<li>Fixed frame drops (blame Microsoft's scuffed threading)</li>
	<li>Fixed freecam sometimes not responding to inputs (blame Microsoft's scuffed event queue)</li>
</ul>
<?php printHeader('Stand 0.33.4', '27/11/2020 23:32'); ?>
<ul>
	<li>Improved injection performance by multi-threading pattern scanning, e.g. on an 8 core machine it will be about 7 times faster now</li>
	<li>Fixed Vehicle &gt; Los Santos Customs &gt; License Plate &gt; Set Text not working</li>
	<li>Fixed teleporting to waypoints ignoring some redirects</li>
	<li>Fixed an error when opening the menu too quickly</li>
</ul>
<?php printHeader('Launchpad 1.4.0', '27/11/2020 05:26'); ?>
<ul>
	<li>Added an icon</li>
	<li>Added a progress bar for ongoing downloads</li>
	<li>Fixed not working without an internet connection</li>
	<li>Fixed losing settings after update except the .exe needs to keep the same file name (Microsoft is incompetent and I can't stress that enough)</li>
</ul>
<?php printHeader('Stand 0.33.3', '26/11/2020 22:48'); ?>
<ul>
	<li>Improved(?) Online &gt; Skip Swoop Down</li>
	<li>Fixed Online &gt; Spoofing &gt; Spoofed Name not accepting spaces</li>
	<li>Improved name-based modder detection</li>
	<li>Made connection errors less intrusive</li>
	<li>Fixed native name of Lithuanian</li>
	<li>Potential fix for access violation on early inject</li>
</ul>
<?php printHeader('Stand 0.33.2', '23/11/2020 00:46'); ?>
<ul>
	<li>Added Online &gt; Chat &gt; Commands &gt; Prefix: "-" & "."</li>
	<li>Improved Stand &gt; ASI Mods so it also shows ASI Mods in your game directory</li>
	<li>Fixed Self &gt; Movement &gt; Walk, run, & swim speed not persisting when switching character</li>
	<li>Fixed World &gt; IPLs &gt; Humane Raid Hydra Carrier not working in freemode</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.33.1', '20/11/2020 22:18'); ?>
<ul>
	<li>Improved Game &gt; Unrestrict Gameplay Camera</li>
	<li>Fixed text clamping and right-alignment</li>
	<li>Fixed Stand not being able to co-load with Stand</li>
	<li>Some other bugfixes</li>
</ul>
<?php printHeader('Stand <del>0.33</del> 1:3', '19/11/2020 23:59'); ?>
<ul>
	<li>Added Self &gt; Appearance &gt; Outfit &gt; Hair Colour Rainbow</li>
	<li>Added Online &gt; Restrictions &gt; Allow Weaponised Vehicles In Passive Mode</li>
	<li>Added Online &gt; Protections &gt; "Infinite Loading Screen", "Disable Driving Vehicles", & "Apartment Invite"</li>
	<li>Added Online &gt; Chat &gt; Commands &gt; Prefix: $</li>
	<li>Added Online &gt; "Player History" & "Rockstar ID Tools" (both include "Open Profile", "Join Game", & "Spectate")</li>
	<li>Added Online &gt; "Set Targeting Mode" & "Quit To Singleplayer"</li>
	<li>Added Players &gt; Settings &gt; AR Beacon On Focused Players</li>
	<li>Added Player(s) &gt; "Teleport To Apartment...", "Disable Driving Vehicle", & "Infinite Loading Screen"</li>
	<li>Added Game &gt; Info Overlay</li>
	<li>Added Stand &gt; Appearance &gt; Theme &gt; Info Text Scale</li>
	<li>Added Stand &gt; Appearance &gt; "Info Text X", "Info Text Y", & "Info Text Alignment"</li>
	<li>Added Stand &gt; Settings &gt; "Key Repeat Interval" & "Key Long-Hold Repeat Interval"</li>
	<li>
		Improved Stand &gt; ASI Mods so you can now load Menyoo
		<ul>
			<li>If you've used Menyoo with other ASI loaders before, rest assured that you won't crash when unloading Menyoo with Stand.</li>
		</ul>
	</li>
	<li>Fixed incorrect text trimming and wrapping at some resolutions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.32.2', '14/11/2020 09:19'); ?>
<ul>
	<li>Fixed Player(s) &gt; Weapons &gt; Give Ammo</li>
</ul>
<?php printHeader('Stand 0.32.1', '13/11/2020 08:23'); ?>
<ul>
	<li>Re-added Self &gt; Weapons &gt; Explosion Type: Orbital Cannon</li>
</ul>
<?php printHeader('Stand 0.32', '12/11/2020 10:55'); ?>
<ul>
	<li>
		Added Lithuanian translation (thanks to moue!)
		<ul>
			<li>Updated default font to include characters used in Lithuanian translation — you may want to delete your %appdata%\Stand\Font.spritefont</li>
		</ul>
	</li>
	<li>Added Player(s) &gt; Auto Heal</li>
	<li>Added Player(s) &gt; Weapons &gt; Give Ammo</li>
	<li>Added Game &gt; Override Debug Natives</li>
	<li>Improved Player(s) &gt; Kick</li>
	<li>Improved Player &gt; Teleport Into Their Vehicle</li>
	<li>Command Box: Added automatic collapsing for "asi", "lua", and "outfit"</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.31.5', '08/11/2020 15:34'); ?>
<ul>
	<li>Improved Game &gt; Field of View</li>
	<li>Fixed [Self &gt; Weapons &gt; Rapid Fire Vehicle Weapons] not accepting spacebar in planes</li>
	<li>Fixed incorrect text trimming and wrapping at some resolutions</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.31.4', '08/11/2020 00:03'); ?>
<ul>
	<li>Fixed many things in Online &gt; Protections not knowing their default values and not saving correctly</li>
	<li>Fixed confusing visuals when changing a colour value</li>
</ul>
<?php printHeader('Stand 0.31.3', '07/11/2020 09:09'); ?>
<ul>
	<li>Improved [Self &gt; Set Singleplayer Cash] so you can change each character's balance individually</li>
	<li>
		Improved Game &gt; Snake
		<ul>
			<li>Increased snake length requirement for continuing after session transition has ended</li>
			<li>Now uniformly uses AR/HUD Colour to avoid fruits being obscured by white clouds</li>
			<li>Fixed being able to eat yourself by doing a 180 in a specific way quickly</li>
		</ul>
	</li>
	<li>Fixed Stand blocking some inputs being processed by other menus when there's no reason to</li>
</ul>
<?php printHeader('Stand 0.31.2', '06/11/2020 09:09'); ?>
<ul>
	<li>Improved [World &gt; Watch_Dogs-Like World Hacking] to unstrict the gameplay camera while the hacking menu is open</li>
	<li>Fixed empty folder notifications on injection</li>
</ul>
<?php printHeader('Stand 0.31.1', '02/11/2020 04:43'); ?>
<ul>
	<li>[Player(s) &gt; Kick] & [Player(s) &gt; Crash Using... &gt; A Network Event] now automatically block all network events of the target(s) before attacking</li>
	<li>Fixed Game &gt; Lock Radio Station</li>
	<li>Some other improvements and fixes</li>
</ul>
<?php printHeader('Launchpad 1.3.5', '30/10/2020 19:55'); ?>
<ul>
	<li>"Add" now accepts all file extensions</li>
	<li>Improved file management</li>
	<li>Made auto-updating asynchronous so the window won't freeze</li>
	<li>Fixed "Automatically inject when game starts" causing injection during debugging</li>
</ul>
<?php printHeader('Stand 0.31', '30/10/2020 19:50'); ?>
<ul>
	<li>Added Self &gt; Appearance &gt; Wardrobe &gt; Prefabricated Outfits &gt; Current Model: Default</li>
	<li>Added Self &gt; Appearance &gt; "Watch", "Watch Variation", "Bracelet", & "Bracelet Variation"</li>
	<li>Replaced Vehicle &gt; "No Gravity" with "Gravity Multiplier"</li>
	<li>Added Vehicle &gt; Destroy</li>
	<li>Added Online &gt; Protections &gt; "Any Pickup Collected" & "Invalid Pickup Collected"</li>
	<li>Added Player &gt; Information &gt; Mental State</li>
	<li>Added Player &gt; Issue Commands On Their Behalf</li>
	<li>Added Game &gt; Snake</li>
	<li>Added Stand &gt; Credits</li>
	<li>Separated Stand &gt; Settings &gt; Theme &gt; "Focused Text And Texture Colour" & "Unfocused Text And Texture Colour" into "Focused Text Colour", "Focused Texture Colour", "Unfocused Text Colour", & "Unfocused Texture Colour"</li>
	<li>
		Improved command parsing
		<ul>
			<li>Any invalid command won't stop other valid commands from being executed anymore</li>
			<li>You can now use multiple commands without a semicolon if the end of the parameters can be determined</li>
		</ul>
	</li>
	<li>Improved Online &gt; "Off The Radar" & "Set Mental State"</li>
	<li>Fixed Vehicle &gt; "Permanent Mint Condition" hiding your crew emblem while enabled</li>
	<li>Lua API: Added <code>chat.ensure_open_with_empty_draft(bool team_chat)</code></li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.30.1', '24/10/2020 21:11'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.30', '24/10/2020 05:51'); ?>
<ul>
	<li>Added Online &gt; Protections &gt; "Modder Detection", "Empty Script Event" & "Spoofed Script Event"</li>
	<li>Added "Detect Sender As Modder" for most events in Online &gt; Protections</li>
	<li>Added Online &gt; Chat &gt; "Commands", "Show Typing Indicator" & "Suppress Typing Indicator"</li>
	<li>Added Player Flags: [M]odder, [T]yping</li>
	<li>Added Player &gt; Information &gt; Session Player ID</li>
	<li>Added Player &gt; {Modder Detection Tally}</li>
	<li>Added Game &gt; Clear Notifications Above Map</li>
	<li>Added Stand &gt; Settings &gt; Theme &gt; AR/HUD Text Colour</li>
	<li>Added Stand &gt; Settings &gt; Suppress Generic Responses</li>
	<li>
		Improved command parsing
		<ul>
			<li>Non-alphanumeric characters are now ignored for command names, i.e. "auto_heal" and "!autoheal" are now the same as "autoheal"</li>
			<li>Some commands (all player commands, "weather", "sessionweather", & "myweather") now automatically collapse, e.g. "bounty all" would be handled like "bountyall"</li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <code>CLICK_CHAT_ALL</code>, <code>CLICK_CHAT_TEAM</code> and <code>CLICK_FLAG_CHAT</code> constants</li>
			<li>Removed deprecated <code>CLICK_MENU</code> constant</li>
			<li>Removed <code>CLICK_FLAG_INDIRECT</code> constant because it's no longer needed internally</li>
		</ul>
	</li>
</ul>
<?php printHeader('<del>Stand 0.29.4</del> Steve 20w29e', '18/10/2020 17:11'); ?>
<ul>
	<li>Fixed Self &gt; Appearance &gt; Lock Outfit causing infinite loading into Online (i.e., slighty longer than normal) with certain outfits</li>
</ul>
<?php printHeader('<del>Stand 0.29.3</del> Steve 20w29d', '18/10/2020 10:29'); ?>
<ul>
	<li>Improved co-loading</li>
</ul>
<?php printHeader('<del>Stand 0.29.2</del> Steve 20w29c', '18/10/2020 07:44'); ?>
<ul>
	<li>Added "info[player]" command for Player &gt; Information</li>
	<li>Improved Online &gt; Protections &gt; Crash Event</li>
	<li>Improved co-loading</li>
	<li>Fixed wanted level dropping despite Self &gt; Lock Wanted Level</li>
	<li>Fixed Player(s) &gt; Kick as script host potentially stopping new players from joining</li>
	<li>Some other improvements and bugfixes</li>
	<li>Lua API: Added optional <i>bool</i> <code>no_drop</code> parameter to <code>util.set_local_player_wanted_level</code></li>
</ul>
<?php printHeader('<del>Stand 0.29.1</del> Steve 20w29b', '17/10/2020 14:21'); ?>
<ul>
	<li>Improved network event parsing to extract weapon hash from REMOVE_WEAPON_EVENT</li>
	<li>Fixed a crash with World &gt; Player Aim Punishments &gt; Disarm</li>
</ul>
<?php printHeader('<del>Stand 0.29</del> Steve 20w29a', '17/10/2020 03:19'); ?>
<ul>
	<li>Added Vehicle &gt; No Turbulence</li>
	<li>
		Online &gt; Protections
		<ul>
			<li>Added "Kick From Personal Vehicle", "Send To Job Event" & "Kick From CEO/MC" (notification above map by default)</li>
			<li>Added "Transaction Error Event" & "Ban From CEO/MC" (blocked with notification above map by default)</li>
			<li>Added "Block Water Animals" (on by default)</li>
			<li>Added some toggles for protections which Stand has had for a while in case you want to disable any of them</li>
			<li>"Glitch And Crash Weather" has been split into "Glitch Weather" and "Crash Weather" (both still blocked by default)</li>
			<li>"Kicks" has been split into "Kick Events" and "Crash Events" (both still blocked by default)</li>
			<li>All reactions are now available for all events</li>
		</ul>
	</li>
	<li>Added Online &gt; "Bull Shark Testosterone (BST)" & "Show Transition State"</li>
	<li>Added Player(s) &gt; "Never Wanted", "Kick From CEO/MC" & "Ban From CEO/MC"</li>
	<li>Added Player &gt; Information</li>
	<li>Added World &gt; NPC Existence & Aim Punishments &gt; Push Away</li>
	<li>Added World &gt; "Aesthetic Light" & "AR Waypoint"</li>
	<li>Added support for Mouse 4 & 5 buttons as hotkeys</li>
	<li>Improved Stand &gt; Settings &gt; Pointing Device Support so that only mouse and scrollwheel inputs are disabled while the menu is open</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.28.2', '10/10/2020 21:29'); ?>
<ul>
	<li>Fixed Self &gt; Movement &gt; Instantly Enter & Leave Vehicles not functionally turning off</li>
	<li>Fixed Vehicle &gt; "Rocket Boost" & "No Collision" not working</li>
	<li>Improved entity tracking</li>
	<li>Fixed a crash with Player(s) &gt; RP Drop</li>
	<li>Fixed implicit switch to numpad input scheme not persisting</li>
	<li>Limited GeoIP lookup timeout error to Log.txt</li>
	<li>Fixed cursor not staying in sub-list when switching tab using a pointing device</li>
	<li>Fixed spacing in hotkey notifications</li>
</ul>
<?php printHeader('Stand 0.28.1', '09/10/2020 23:48'); ?>
<ul>
	<li>Improved co-loading</li>
	<li>Improved GeoIP lookup</li>
	<li>Fixed Online &gt; Auto Deposit Wallet spamming notifications with "Skip Save Data Loading"</li>
	<li>Fixed a crash with Player(s) &gt; RP Drop</li>
	<li>Fixed exceptions with Game &gt; Radio Adblock</li>
</ul>
<?php printHeader('Stand 0.28', '08/10/2020 23:00'); ?>
<ul>
	<li>Sprinkled some lists and dividers around the menu so things are hopefully easier to find and navigate to now</li>
	<li>Added Self &gt; Appearance &gt; Wardrobe &gt; Prefabricated Outfits</li>
	<li>Added Online &gt; Restrictions &gt; Bypass Character Filter</li>
	<li>Added Online &gt; "Type Out Player Names", "Paste In Chat Message" & "Log Chat Messages"</li>
	<li>Player List now shows GeoIP information</li>
	<li>Added Game &gt; Freecam &gt; Minimap Follows Freecam</li>
	<li>Added Stand &gt; Setting &gt; "Cursor Scroll Gap" & "Pointing Device Support"</li>
	<li>Improved Online &gt; Automatically Deposit Wallet so you can configure a threshold</li>
	<li>Improved Stand &gt; Settings &gt; Keyboard Input Scheme so you can fully customize all keys now</li>
	<li>Fixed Vehicle &gt; Spawner &gt; Classes not being ordered consistently</li>
	<li>Lots of other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.27.2', '28/09/2020 20:54'); ?>
<ul>
	<li>Added Stand &gt; Experiments &gt; Log Profanities</li>
	<li>Fixed Stand &gt; Experiments &gt; Log Chat Messages not logging own messages</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <code>void chat.on_message(function callback)</code></li>
			<li>Added <code>void chat.send_message(string message, bool in_team_chat, bool add_to_local_history, bool networked)</code></li>
			<li>Added <code>int chat.get_state()</code></li>
			<li>Added <code>string chat.get_draft()</code></li>
			<li>Added <code>void chat.add_to_draft(string appendix)</code></li>
			<li>Added <code>void chat.remove_from_draft(int characters)</code></li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.27.1', '26/09/2020 19:55'); ?>
<ul>
	<li>Added Stand &gt; Experiments &gt; "GPS" & "Show Ped Tasks"</li>
	<li>Fixed a crash when spawning vehicles and potentially other occasions</li>
	<li>Fixed AR Speedometer not rendering while chat is open</li>
	<li>Fixed Online &gt; Protections &gt; Glitch And Crash Weather &gt; Notification Above Map causing an exception which causes the event to be allowed</li>
	<li>Fixed Player &gt; Teleport Into Their Vehicle not working as intended</li>
	<li>Fixed web interface not getting first tab when replacing an existing instance which was on the same tab</li>
	<li>Fixed web interface receiving "activate" tab when injecting with web interface open</li>
	<li>Fixed "You're no longer using the web interface" message not being shown when it should and being shown when it shouldn't</li>
	<li>Fixed Stand trying to draw in-between pixels which caused some distorition and misalignment</li>
	<li>Fixed languages being named inconsistently</li>
	<li>Fixed a crash when a custom font didn't have special characters</li>
	<li>Fixed "this feature is not available in the free edition of stand" message when injecting with "skip save data loading" enabled in saved state</li>
	<li>Fixed a crash when deleting an entity</li>
	<li>Fixed a crash when trying to save the state of a command that doesn't have a state to be saved</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.27', '25/09/2020 09:06'); ?>
<ul>
	<li>The web interface rework is here! Use Stand &gt; Open Web Interface to get started. You can also get a QR Code on the web interface to easily switch to mobile. Your suggestions and bug reports are welcome as always!</li>
	<li>Added Vehicle &gt; No Collision With Other Vehicles</li>
	<li>Added Online &gt; Disable VIP Work Cooldown</li>
	<li>Added Online &gt; Unlocks &gt; "Unlock Gender Change" & "Unlock Bunker Shooting Range Rewards"</li>
	<li>Replaced Stand &gt; Settings &gt; "Set Menu Hue" with "Primary Colour"</li>
	<li>Improved Stand &gt; Settings &gt; Rainbow Mode</li>
	<li>Added Stand &gt; Experiments &gt; The Stanley Parable Adventure Line</li>
	<li>Added Stand &gt; Settings &gt; "Focused Text And Texture Colour", "Background Colour", & "Unfocused Text And Texture Colour"</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <i>int</i> <code>memory.script_global(int global)</code></li>
			<li>Added optional <code>size</code> <i>int</i> parameter to <code>memory.alloc</code></li>
			<li>Added <i>int</i> <code>memory.scan(string pattern)</code></li>
			<li>Added <i>int</i> <code>memory.rip(int addr)</code></li>
			<li>Added <i>string</i> <code>memory.read_string(int addr)</code></li>
			<li>Added <i>void</i> <code>memory.write_int(int addr, int value)</code></li>
			<li>Added <i>void</i> <code>memory.write_float(int addr, float value)</code></li>
			<li>Added <i>void</i> <code>memory.write_string(int addr, string value)</code></li>
			<li>Added <i>void</i> <code>memory.write_vector3(int addr, Vector3 value)</code></li>
		</ul>
	</li>
	<li>As always, way too many "minor" changes. If your game crashes, please send your log and what you did before the crash!</li>
</ul>
<?php printHeader('Stand 0.26.3', '20/09/2020 22:28'); ?>
<ul>
	<li>
		The default theme has been updated so you might want to delete your %appdata%\Stand\Theme folder, specifically "Toggle On.dds" and "Toggle Off.dds"
		<ul>
			<li>The toggle textures now have rounded edges, inspired by Thimo's Carbon Theme</li>
		</ul>
	</li>
	<li>Fixed a crash when using "click" sliders like "Set Mental State"</li>
	<li>Fixed state not being automatically applied for free users</li>
	<li>Fixed some communications with the authserver failing due to TCP's framing</li>
</ul>
<?php printHeader('Stand 0.26.2', '19/09/2020 23:33'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.26.1', '19/09/2020 06:19'); ?>
<ul>
	<li>Fixed Vehicle &gt; Permanent Mint Condition allowing front & rear windscreens to break</li>
	<li>Lots of other code changes... for better or for worse? Who knows.</li>
</ul>
<?php printHeader('Stand 0.26', '18/09/2020 19:36'); ?>
<ul>
	<li>
		Stand now uses DirectX to draw itself onto the game so it won't be subject to GTA's jank and has more ways to be styled
		<ul>
			<li>If you've used other DirectX menus before, rest assured that Stand won't crash the game if you change your resolution (:</li>
		</ul>
	</li>
	<li>Added Online &gt; Skip Swoop Down</li>
	<li>Added Game &gt; "Freecam" & "Unrestrict Gameplay Camera"</li>
	<li>Added Stand &gt; Settings &gt; "Theme", "Menu X", "Menu Y", "Tabs Width", "Menu Width", "Max Visible Commands" & "Help Text Position"</li>
	<li>Improved Self &gt; Infinite Parachutes</li>
	<li>Improved Player(s) &gt; "Drop RP"</li>
	<li>Improved Player &gt; "Gift Spawned Vehicle"</li>
	<li>Removed Stand &gt; Settings &gt; "Header Font" & "Content Font"</li>
	<li>Fixed losing waypoint after transforming</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <code>CLICK_FLAG_MENU</code>, <code>CLICK_MENU_INSTANT</code> & <code>CLICK_MENU_SUPENDED</code> constants</li>
			<li>Deprecated <code>CLICK_MENU</code> constant</li>
			<li>Removed deprecated <code>TOAST_LOG_TO_FILE</code> constant</li>
		</ul>
	</li>
	<li>Don't forget that you can and should report any bugs and errors you encounter!</li>
</ul>
<?php printHeader('Stand 0.25.1', '14/09/2020 16:33'); ?>
<ul>
	<li>Fixed on-foot AR Speedometer making Casino Heist planning boards invisible</li>
	<li>Fixed losing weapons after transforming</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.25', '11/09/2020 15:25'); ?>
<ul>
	<li>Replaced Self &gt; Weapons &gt; "One Hit Kill" with "Damage Multiplier"</li>
	<li>Added Vehicle &gt; Spawner &gt; "On Foot Behaviour" & "In Vehicle Behaviour" &gt; Delete Previous Vehicle</li>
	<li>Added Online &gt; New Session &gt; "Skip Save Data Loading" & "Find New Public Session"</li>
	<li>Added Online &gt; Spoof Other Players' Names</li>
	<li>Added Player &gt; "Teleport Into Their Vehicle", "Copy Outfit" & "Gift Spawned Vehicle"</li>
	<li>Added World &gt; Undo Teleport</li>
	<li>Added Stand &gt; Settings &gt; "Tabs", "Show Button Instructions" & "Keyboard Input Scheme"</li>
	<li>Improved Self &gt; Outfit &gt; Wardrobe so that it offers transformation if an outfit was made for a different model</li>
	<li>Improved Online &gt; Disable Idle Kick so you won't be kicked when you tab out of the game</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.24.4', '09/09/2020 16:42'); ?>
<ul>
	<li>Updated some offsets for Online 1.52</li>
</ul>
<?php printHeader('Stand 0.24.3', '08/09/2020 10:57'); ?>
<ul>
	<li>Fixed some errors (mainly so that certain shitty menus won't create a "crashdump" every millisecond)</li>
</ul>
<?php printHeader('Stand 0.24.2', '06/09/2020 09:28'); ?>
<ul>
	<li>Fixed World &gt; Watch_Dogs-Like World Hacking making Casino Heist planning boards invisible</li>
	<li>Fixed some exceptions and improved exception handling</li>
</ul>
<?php printHeader('Launchpad 1.3.4', '05/09/2020 16:32'); ?>
<ul>
	<li>Fixed an exception when updating Stand</li>
</ul>
<?php printHeader('Stand 0.24.1', '05/09/2020 16:14'); ?>
<ul>
	<li>You can now use hotkeys while the game is paused but not while Socialclub is open</li>
	<li>Fixed rapid fire responding to input while the game is paused</li>
	<li>Removed Herobrine</li>
</ul>
<?php printHeader('Stand 0.24', '03/09/2020 13:05'); ?>
<ul>
	<li>You can now chain commands in the command box using a semicolon (<code>;</code>)</li>
	<li>Added Self &gt; Weapons &gt; "Rapid Fire" & "Rapid Fire Vehicle Weapons"</li>
	<li>Added Stand &gt; Settings &gt; "Show Command Syntax" & "Discord Rich Presence"</li>
	<li>Added Stand &gt; Regenerate License</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <i>int</i> <code>memory.alloc()</code></li>
			<li>Added <i>int</i> <code>memory.read_int(int pointer_id)</code></li>
			<li>Added <i>float</i> <code>memory.read_float(int pointer_id)</code></li>
			<li>Added <i>Vector3</i> <code>memory.read_vector3(int pointer_id)</code></li>
			<li>Added <i>void</i> <code>memory.free(int pointer_id)</code></li>
			<li>Added <i>void</i> <code>native_invoker.push_arg_pointer(int pointer_id)</code></li>
			<li>Added <code>TOAST_LOGGER</code> to replace <code>TOAST_LOG_TO_FILE</code></li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Launchpad 1.3.3', '03/09/2020 11:51'); ?>
<ul>
	<li>Fixed an error with "Automatic Injection Delay (Seconds)" set to 0</li>
</ul>
<?php printHeader('Stand 0.23.3', '30/08/2020 02:27'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.23.2', '28/08/2020 23:09'); ?>
<ul>
	<li>Fixed array bounds violation in network event reactions</li>
</ul>
<?php printHeader('Stand 0.23.1', '28/08/2020 22:17'); ?>
<ul>
	<li>Replaced Player &gt; "Ignore All Network Events" with Player &gt; Network Events &gt; "Ignore" & "Notification In Log.txt"</li>
	<li>Fixed Self &gt; Glued to Seats stopping other players from entering your vehicle</li>
	<li>Fixed Stand &gt; Apply Default State overriding your saved state with the default state</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand <del>0.23</del> :3', '26/08/2020 19:09'); ?>
<ul>
	<li>Added Self &gt; "Aimbot", "Triggerbot" & "Visual Z Correction"</li>
	<li>Added Vehicle &gt; Forge Model</li>
	<li>Added Online &gt; Bypass Casino Region Lock</li>
	<li>Added All Players &gt; Exclude Friends</li>
	<li>Added Player(s) &gt; "Drop RP", "Give All Weapons" & "Disarm"</li>
	<li>Added World &gt; Player Aim Punishments &gt; Exclude Friends</li>
	<li>Added Stand &gt; Experiments &gt; Log Chat Messages</li>
	<li>Improved Vehicle &gt; No Collision</li>
	<li>Improved Player(s) &gt; Crash</li>
	<li>Improved ScriptHookV implementation so that more ASI mods are supported</li>
	<li>Fixed Self &gt; Clumsiness</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.22.2', '24/08/2020 18:14'); ?>
<ul>
	<li>Band-aid fix for crash when entering Casino</li>
</ul>
<?php printHeader('Stand 0.22.1', '21/08/2020 02:38'); ?>
<ul>
	<li>Improved Self &gt; Glued To Seats so that you can no langer get dragged off/out of your vehicle</li>
	<li>Fixed selecting a target with Dedsec Mode (World &gt; Watch_Dogs-Like World Hacking) in GTA Online causing a menu crash</li>
	<li>Some other improvements or bugfixes</li>
</ul>
<?php printHeader('Stand 0.22', '20/08/2020 17:05'); ?>
<ul>
	<li>Added Self &gt; Set Singleplayer Cash</li>
	<li>Added Stand &gt; ASI Mods</li>
	<li>Added Stand &gt; Lua Scripts &gt; Download Example Scripts</li>
	<li>Added Stand &gt; Automatically Save State (On by default!)</li>
	<li>Added World &gt; Player Aim Punishments &gt; Freeze</li>
	<li>Improved Self &gt; Auto Heal so that it includes your armor</li>
	<li>Improved Vehicle &gt; AR Speedometer so the text gets smaller the further it is from the camera</li>
	<li>Improved Freeze punishment so that it unfreezes everyone when it's disabled</li>
	<li>
		Dedsec Mode (World &gt; Watch_Dogs-Like World Hacking) Changes
		<ul>
			<li>(Un)Freeze is now available for players as well</li>
		</ul>
	</li>
	<li>Fixed World &gt; Teleport to... &gt; Auto Teleport To Waypoints</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Launchpad 1.3.2', '17/08/2020 17:45'); ?>
<ul>
	<li>Improved file management</li>
</ul>
<?php printHeader('Stand 0.21', '17/08/2020 11:03'); ?>
<ul>
	<li>Replaced "Self &gt; Soaking Wet" with Self &gt; "Set Wetness" & "Lock Wetness"</li>
	<li>Added Vehicle &gt; Personal Vehicle &gt; Teleport To Me & Drive</li>
	<li>Moved "Vehicle &gt; Call Last Vehicle" to "Vehicle &gt; Last Vehicle &gt; Teleport To Me & Drive"</li>
	<li>Added Vehicle &gt; Personal & Last Vehicle &gt; Enter</li>
	<li>Separated "Vehicle &gt; Spawner &gt; Drive Spawned Vehicles" into Vehicle &gt; Spawner &gt; "On Foot Behaviour" & "In Vehicle Behaviour" &gt; Drive Spawned Vehicles</li>
	<li>Added Vehicle &gt; Spawner &gt; "On Foot Behaviour" & "In Vehicle Behaviour" &gt; Spawn In Front</li>
	<li>Added All Players &gt; Place Bounty On Self</li>
	<li>Added Stand &gt; Empty Log.txt</li>
	<li>Fixed vehicle tuning options not always applying</li>
	<li>Fixed spoofing</li>
	<li>Fixed All Players &gt; Freeze also freezing you</li>
	<li>Fixed World &gt; Potato Mode making you fall through the map after using it for a while</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.20.5', '14/08/2020 06:54'); ?>
<ul>
	<li>Some improvements</li>
</ul>
<?php printHeader('Stand 0.20.4', '13/08/2020 20:06'); ?>
<ul>
	<li>Improved teleporting</li>
	<li>Fixed some errors</li>
</ul>
<?php printHeader('Stand 0.20.3', '13/08/2020 18:03'); ?>
<ul>
	<li>Improved teleporting</li>
</ul>
<?php printHeader('Stand 0.20.2', '13/08/2020 08:55'); ?>
<ul>
	<li>Bestowed some more features with command names so they can be used via the command box as well</li>
	<li>Fixed Online &gt; Set Session Time</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.20.1', '12/08/2020 13:34'); ?>
<ul>
	<li>Updated Dutch translation</li>
	<li>Updated vehicle search data</li>
	<li>Fixed Online &gt; "Lucky Wheel Reward" & "Slot Machines Outcome"</li>
	<li>Fixed spoofing on Social Club & Epic Games</li>
</ul>
<?php printHeader('Stand 0.20', '12/08/2020 10:13'); ?>
<ul>
	<li>Stand now works on the latest GTA version</li>
	<li>Added Online &gt; Set Session Time</li>
	<li>Added Player &gt; Ignore All Network Events</li>
	<li>Added Stand &gt; Experiments &gt; Log Non-Host Clock Events</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.19.1', '08/08/2020 02:13'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.19', '06/08/2020 14:45'); ?>
<ul>
	<li>Stand now automatically protects against some crash methods and collects some debug information on crash which seems like the game is frozen but you'll notice if you look at your %appdata%\Stand\Log.txt — once the crash has truly finished, feel free to send me your Log.txt in private so I can try to update the crash protections</li>
	<li>Added flags for the player list: [S]elf, [F]riend, [H]ost, S[C]ript Host, In[V]ulnerable, [O]ff The Radar, [I]n An [I]nterior</li>
	<li>Added Online &gt; "Off The Radar" & "Reveal Off The Radar Players"</li>
	<li>Added Online &gt; Unlocks &gt; "Unlock All" & "Unlock Arena War Clothing"</li>
	<li>Added Player(s) &gt; Crash</li>
	<li>Added Player &gt; Teleport To Them</li>
	<li>Improved Player(s) &gt; Kick so it (ab)uses script host privileges if you happen to be the script host</li>
	<li>Added Game &gt; Disable Cheat Box</li>
	<li>
		Dedsec Mode (World &gt; Watch_Dogs-Like World Hacking) Changes
		<ul>
			<li>The target name now also shows the current "owner" in parentheses if applicable</li>
			<li>Improved Delete (Brought to you by the refreshing taste of Cargo Planes)</li>
		</ul>
	</li>
	<li>
		Lua API Changes
		<ul>
			<li>Removed <code>util.player_ped_id_to_player_id</code> because <code>NETWORK.NETWORK_GET_PLAYER_INDEX_FROM_PED</code> is a thing</li>
		</ul>
	</li>
	<li>Improved performance and exception handling in case Stand's being too fast for your CPU too handle (or dereferences a null pointer)</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.18.2', '01/08/2020 22:42'); ?>
<ul>
	<li>Improved performance</li>
	<li>Fixed Online &gt; Protections &gt; Kicks not actually protecting against kicks</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.18.1', '01/08/2020 06:30'); ?>
<ul>
	<li>Fixed a crash caused by Online &gt; Protections &gt; Kicks</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.18', '31/07/2020 16:18'); ?>
<ul>
	<li>Reorganized Stand to hopefully increase menuing efficiency in the long run</li>
	<li>You can now give every command in Stand a hotkey by pressing [Numpad 3] on it</li>
	<li>Added Self &gt; "Scale", "Scale Affects Camera", & "Scale Affects Speed"</li>
	<li>Added Online &gt; Unlocks &gt; "Unlock Vehicle Customizations", "Unlock Casino Heist Clothing" & "Unlock Bunker Research"</li>
	<li>Improved Online &gt; Unlocks &gt; Unlock Awards</li>
	<li>Improved Online &gt; Protections &gt; Glitched Weather so you can block it without getting a notification</li>
	<li>Added Online &gt; Protections &gt; Kicks</li>
	<li>Added Game &gt; "Field Of View" & "Camera Distance Multiplier"</li>
	<li>Improved injection performance by detecting game edition (SC, Steam, EGS) instead of bruteforcing hooks</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.17.1', '26/07/2020 19:00'); ?>
<ul>
	<li>Improved teleport logic</li>
</ul>
<?php printHeader('Stand 0.17', '25/07/2020 18:54'); ?>
<ul>
	<li>Added Online &gt; Protections &gt; "Block Glitched Weather", "Freeze", & "Network Events"</li>
	<li>Added Online &gt; "All Missions In Private Sessions" & "Disable Suicide Cooldown", "Disable Passive Mode Cooldown", & "Disable Oppressor Mk II Cooldown"</li>
	<li>Added Player(s) &gt; Freeze</li>
	<li>Upgraded Player(s) &gt; "Host Kick" to "Kick"</li>
	<li>Added World &gt; Teleport to... & Waypoint on... &gt; Maze Bank Tower Helipad</li>
	<li>Added World &gt; Teleport to... &gt; Very High Up</li>
	<li>Added Game &gt; Straight To Voicemail</li>
	<li>Various improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.16.2', '20/07/2020 17:27'); ?>
<ul>
	<li>Updated "Flee" punishment so NPCs no longer leave their vehicle (so "World &gt; NPC Existence Punishments &gt; Flee" is basically "Traffic Chaos" now)</li>
	<li>
		Dedsec Mode (Watch_Dogs-Like World Hacking) Changes
		<ul>
			<li>Added target name above hacking options</li>
			<li>Fixed hacking options not respecting menu colour on hover</li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.16.1', '18/07/2020 17:48'); ?>
<ul>
	<li>Fixed wrong calculations with "Super Drive Uses Camera"</li>
</ul>
<?php printHeader('Stand 0.16', '18/07/2020 16:09'); ?>
<ul>
	<li>Added Self &gt; Walk Style</li>
	<li>Added World &gt; Watch_Dogs-Like World Hacking</li>
	<li>
		Lua API Changes
		<ul>
			<li>Updated Lua to 5.4</li>
			<li>Added <i>int</i> <code>util.get_session_players_bitflag()</code></li>
			<li>Added <i>void</i> <code>util.trigger_script_event(int session_player_bitflags, vector&lt;int&gt; data)</code></li>
			<li>Added <i>int</i> <code>util.player_ped_id_to_player_id(int ped_id)</code></li>
		</ul>
	</li>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.15.1', '09/07/2020 19:42'); ?>
<ul>
	<li>Fixed Chop and potentially other models being invisible after transforming into them</li>
	<li>Fixed co-loading issues due to "Log Script Events"</li>
</ul>
<?php printHeader('Stand 0.15', '02/07/2020 23:46'); ?>
<ul>
	<li>The command box now only requires the unambigious start of a command to execute it allowing you to be more creative e.g. using "tpway" instead of "tpwaypoint" (or "tpwp")</li>
	<li>Added Self &gt; Shrink</li>
	<li>Added Vehicle &gt; AR Speedometer &gt; Show While On Foot</li>
	<li>Added World &gt; Teleport to... & Waypoint on... &gt; Stores &gt; "Ammu-Nation", "Ammu-Nation with Range", "Barber Shop", "Clothes Store", "Tattoo Parlor" & "Los Santos Customs"</li>
	<li>Added World &gt; Teleport to... & Waypoint on... &gt; Casino</li>
	<li>Added Online &gt; "Set Session Weather" & "Bypass Profanity Filter"</li>
	<li>
		Added Players
		<ul>
			<li>All Players &gt; "Place Bounty" & "Host Kick"</li>
			<li>Individual Players &gt; "Waypoint", "Show Profile", "Place Bounty" & "Host Kick"</li>
		</ul>
	</li>
	<li>Added Game &gt; 2nd Person Perspective</li>
	<li>Improved World &gt; "Override Weather" (especially "Xmas")</li>
	<li>Improved Online &gt; Unlocks &gt; Unlock Exclusive Liveries to include the Up-n-Atomizer Festive Tint</li>
	<li>Fixed "Lucky Wheel Reward" not applying in some cases</li>
	<li>Some other improvements & bugfixes</li>
</ul>
<?php printHeader('Stand 0.14.2', '25/06/2020 16:04'); ?>
<ul>
	<li>Fixed some issues when injecting while in Online</li>
</ul>
<?php printHeader('Stand 0.14.1', '25/06/2020 12:16'); ?>
<ul>
	<li>Some improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.14', '25/06/2020 10:34'); ?>
<ul>
	<li>Added Self &gt; Infinite Parachutes</li>
	<li>Added Vehicle &gt; Turn Vehicle Upright</li>
	<li>Added World &gt; Waypoint on...</li>
	<li>Added Online &gt; "Finish Doomsday Heist Setups", "Finish Apartment Heist Setups", "Slot Machines Outcome", "Lucky Wheel Reward", "Refill Snacks & Armor", "Set Rank" & "Set Nightclub Popularity"</li>
	<li>Added Online &gt; Unlocks &gt; "Max Character Stats", "Unlock Exclusive Liveries" & "Unlock Awards"</li>
	<li>Added Game &gt; Aim Time Scale</li>
	<li>Added Settings &gt; Language &gt; Nederlands (Dutch) thanks to Thimo</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added <i>int</i> <code>util.joaat(string text)</code></li>
			<li>Added <i>void</i> <code>util.BEGIN_TEXT_COMMAND_DISPLAY_TEXT(string message)</code></li>
			<li>Added <i>void</i> <code>util._BEGIN_TEXT_COMMAND_LINE_COUNT(string message)</code></li>
			<li>Added <i>void</i> <code>util.BEGIN_TEXT_COMMAND_IS_THIS_HELP_MESSAGE_BEING_DISPLAYED(string message)</code></li>
			<li>Added <i>void</i> <code>util.BEGIN_TEXT_COMMAND_DISPLAY_HELP(string message)</code></li>
			<li>Added <i>void</i> <code>util._BEGIN_TEXT_COMMAND_GET_WIDTH(string message)</code></li>
			<li>Added <i>int</i> <code>util.get_rp_required_for_rank(int rank)</code></li>
			<li>Added <i>void</i> <code>menu.show_command_box(string prefill = "")</code></li>
			<li>Added <i>void</i> <code>menu.show_command_box_click_based(int click_type, string prefill = "")</code></li>
			<li>
				<code>on_click</code> functions passed to <code>menu.action</code> will now get an <i>int</i> <code>click_type</code> as their sole argument when being called
				<ul>
					<li>Added <code>CLICK_MENU</code>, <code>CLICK_FLAG_INDIRECT</code>, <code>CLICK_COMMAND</code>, <code>CLICK_HOTKEY</code> and <code>CLICK_WEB</code> globals</li>
				</ul>
			</li>
			<li>Added <code>?function on_command = nil, ?string syntax = nil</code> parameters to <code>menu.action</code></li>
		</ul>
	</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.13.1', '20/06/2020 09:53'); ?>
<ul>
	<li>Added Self &gt; Outfit &gt; Wardrobe &gt; Open Outfits Folder</li>
	<li>Added Lua &gt; Open Lua Scripts Folder</li>
	<li>Made list selects like "Explosion Type" respond to left/right inputs</li>
	<li>Made "Game &gt; Lock Radio" more lenient on manual changes</li>
	<li>Improved World &gt; Teleport to ... &gt; Objective</li>
	<li>Fixed Stand responding to inputs when the game is meant to be paused</li>
	<li>Some other improvements & bugfixes</li>
</ul>
<?php printHeader('Stand 0.13', '19/06/2020 16:00'); ?>
<ul>
	<li>Stand is now available in German via Settings &gt; Language</li>
	<li>Added Self &gt; "Glued To Seat" and downgraded "Gracefulness" so you can have more fine-tuned control</li>
	<li>Added Weapons &gt; Total Freedom</li>
	<li>Added Vehicle &gt; "Super Drive Uses Camera" & "Speed Limit"</li>
	<li>Added Online &gt; "New Session", "Request Airstrike" & "Set Mental State"</li>
	<li>Added World &gt; Smooth Sailing</li>
	<li>Added Game &gt; "Skip Cutscene", Time Scale" & "Edit Labels"</li>
	<li>Added 35 more vehicles to be discoverable using Vehicle &gt; Spawner if you don't know their model names which had the neat side-effect of adding model name data to GTABase (https://www.gtabase.com/grand-theft-auto-v/vehicles/) in an unlikely cooperation</li>
	<li>Implemented further measures against possible detections by the AC</li>
	<li>Fixed unexpected behaviour when numlock is off</li>
	<li>Fixed some issues with setting & locking hair colour</li>
	<li>Fixed vehicles from Arena War and up not spawning in Story mode (again)</li>
	<li>Fixed saved state not being applied automatically when injecting in Online</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.12', '13/06/2020 23:17'); ?>
<ul>
	<li>Added Self &gt; "Outfit" & "Change Model"</li>
	<li>Added Online &gt; Casino Heist &gt; "Remove Repeat Cooldown", "Scope All P.O.I.", "Scope All Access Points", "Finish First Board", "Finish Second Board" & "Reset Crew"</li>
	<li>Fixed an error when injecting Stand for the first time while in Online (some of you are just crazy)</li>
	<li>Fixed input system breaking when [Alt] is pressed</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Launchpad 1.3.1', '13/06/2020 09:58'); ?>
<ul>
	<li>Fixed some errors</li>
</ul>
<?php printHeader('Launchpad 1.3', '10/06/2020 19:18'); ?>
<ul>
	<li>Added "Automatic Injection Delay (Seconds)" to advanced mode so you can use it to inject OpenIV.asi</li>
</ul>
<?php printHeader('Launchpad 1.2', '10/06/2020 04:57'); ?>
<ul>
	<li>Added "Advanced mode" which allows you to add as many custom DLLs as you want</li>
</ul>
<?php printHeader('Launchpad 1.1.1', '09/06/2020 18:49'); ?>
<ul>
	<li>Fixed "Automatically inject when game starts" causing ghost process after game crash</li>
</ul>
<?php printHeader('Stand 0.11', '09/06/2020 15:00'); ?>
<ul>
	<li>Stand now has a tab-esque GUI in which you press [Numpad 7] and [Numpad 1] to go up and down respectively</li>
	<li>Stand now skips the intro and license shit when using "Automatically inject when game starts" (or if you're very fast)</li>
	<li>Added Self &gt; "Auto Heal" & "Water Magnet"</li>
	<li>Added Vehicle &gt; Call Last Vehicle</li>
	<li>Added World &gt; Teleports &gt; Auto Teleport To Waypoints</li>
	<li>Added Game &gt; Reveal Labels</li>
	<li>Added Settings &gt; "Keep Cursor When Switching List" & "Keep Cursor When Re-Visiting Sub-List"</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Launchpad 1.1', '09/06/2020 01:34'); ?>
<ul>
	<li>Added "Automatically inject when game starts"</li>
	<li>Added "Use a custom DLL file to inject"</li>
	<li>Removed the wait time after the game starting before you can inject Stand</li>
</ul>
<?php printHeader('Stand 0.10 <i>(We use semantic versioning in this house)</i>', '06/06/2020 15:09'); ?>
<ul>
	<li>Stand will now block any reports against you</li>
	<li>Added World &gt; Player Aim Punishments &gt; Burn</li>
	<li>Added Online &gt;  "Remove Transaction Pending", "Lag Out", "Set Casino Vault Contents", "View Report Stats", "Notify On Commendation" & "Log Script Events"</li>
	<li>Added Settings &gt; "Header Font", "Content Font" & "Controller Support"</li>
	<li>Improved the range of NPC Punishments so you can now e.g. finish headhunter in seconds</li>
	<li>Improved help text display</li>
	<li>Fixed vehicles from Arena War and up not spawning in Story mode</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.9.1', '04/06/2020 17:23'); ?>
<ul>
	<li>Fixed Aim Punishments for players</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.9', '04/06/2020 12:38'); ?>
<ul>
	<li>You can now save the state of individual commands by pressing [Numpad 9] on them</li>
	<li>Added Vehicle &gt; License Plate &gt; Set License Plate Text</li>
	<li>Added Vehicle &gt; No Gravity</li>
	<li>Added World &gt; NPC Existence Punishments &gt; "Anonymous Explosion", "Owned Explosion", "Unarm" & "Freeze"</li>
	<li>Added World &gt; NPC & Player Aim Punishments</li>
	<li>Added World &gt; I Like Trains</li>
	<li>Added Online &gt; "Auto Transfer Wallet To Bank", "Anti-Clouds Magic", Name Spoofing & SCID Spoofing</li>
	<li>Fixed a crash when injecting Stand while GTA is paused</li>
	<li>
		Lua API Changes
		<ul>
			<li>
				Replaced <code>util.notify_above_map(string message, bool log_to_file = false, bool try_send_to_web = true)</code> with <code>util.toast(string message, int flags = TOAST_ABOVE_MAP | TOAST_WEB)</code>
				<ul>
					<li>Added <code>TOAST_ABOVE_MAP</code>, <code>TOAST_LOG_TO_FILE</code>, <code>TOAST_WEB</code> and <code>TOAST_ALL</code> globals</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.8.1', '01/06/2020 13:09'); ?>
<ul>
	<li>Fixed web interface</li>
</ul>
<?php printHeader('Launchpad 1.0', '01/06/2020 12:56'); ?>
<ul>
	<li>Added indications for current Stand & Launchpad versions</li>
	<li>Added a message if a new Launchpad version is available</li>
</ul>
<?php printHeader('Stand 0.8', '01/06/2020 12:24'); ?>
<ul>
	<li>Added Self &gt; "Air Walk" & "No Gravity"</li>
	<li>Added Vehicle &gt; "Super Drive", "Super Handbreak" & "License Plate Speedometer"</li>
	<li>Upgraded Vehicle &gt; "Instantly Enter Vehicles" to "Instantly Enter & Leave Vehicles"</li>
	<li>Added Gameplay &gt; "Lock Radio Station" & "Radio Adblock"</li>
	<li>Added Recoveries &gt; RP Loop (Wanted Level)</li>
	<li>Fixed Self &gt; "Set Wanted Level" & "Lock Wanted Level" potentially tripping anti-cheat</li>
	<li>
		Lua API Changes
		<ul>
			<li>Removed 6 natives that could potentially trip the anti-cheat lowering the total from 5709 to 5703 out of 6166 natives</li>
			<li>Added <i>void</i> <code>util.replace_corner_help(string message, string replacement_message)</code></li>
			<li>Added <i>void</i> <code>util.set_local_player_wanted_level(int wanted_level)</code></li>
			<li>Added <i>void</i> <code>util.draw_debug_text(string text)</code></li>
		</ul>
	</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.7.2', '31/05/2020 13:02'); ?>
<ul>
	<li>Fixed a possible crash after injecting Stand</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.7.1', '31/05/2020 11:22'); ?>
<ul>
	<li>Fixed tutorial being incompletable</li>
	<li>Some other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.7', '31/05/2020 10:44'); ?>
<ul>
	<li>Added World &gt; Ghost Town</li>
	<li>Added Vehicle &gt; Delete</li>
	<li>Added Settings &gt; Open Web Interface</li>
	<li>Added Experiments &gt; Guaranteed Ban (self-money)</li>
	<li>
		Lua API Changes
		<ul>
			<li>Added Vector3 pseudo-type (a table with <code>x</code>, <code>y</code> & <code>z</code> fields of type <code>number</code>) which allows you to use 73 additional natives, bringing the total from 5636 to 5709 out of 6166 natives!</li>
			<li>Added <code>SCRIPT_NAME</code> global</li>
			<li>Added <i>void</i> <code>util.log(string message)</code></li>
			<li>Added <i>int</i> <code>util.create_vehicle(int hash, Vector3 pos, number heading)</code></li>
			<li>Added <i>void</i> <code>util.show_corner_help(string message)</code></li>
			<li>Added <i>int</i> <code>menu.action(int list_id, string menu_name, vector&lt;string&gt; command_names, string help_text, function on_click)</code></li>
			<li>Added <i>int</i> <code>menu.list(int list_id, string menu_name, vector&lt;string&gt; command_names = {}, string help_text = "")</code></li>
			<li>Added <code>?int wake_in_ms = nil</code> parameter to <code>util.yield</code></li>
			<li>Added <code>bool log_to_file = false</code> and <code>bool try_send_to_web = false</code> parameters to <code>util.notify_above_map</code></li>
			<li>Updated <code>util.notify_above_map</code> to return <i>int</i> notification id</li>
		</ul>
	</li>
	<li>Improved the tutorial experience</li>
	<li>Improved the input system in regards to holding keys down on a controller</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.6', '27/05/2020 09:19'); ?>
<ul>
	<li>Added Self &gt; "Fake Wanted Level", "No Blood" & "Suicide"</li>
	<li>Added Weapons &gt; (Explosive Ammo) Explosion Type &gt; Gas Canister Flame</li>
	<li>Added World &gt; NPCs Die</li>
	<li>Added Vehicle &gt; "No Decals", "No Collision", "Rocket Boost" & "Auto Rocket Boost"</li>
	<li>Added Lua Scripts</li>
	<li>Improved the input system in regards to holding keys down</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.5', '25/05/2020 11:31'); ?>
<ul>
	<li>Added World &gt; "Override Weather", "Forward Time by 1 Hour" & "Teleport to Position from Clipboard"</li>
	<li>Added Vehicle &gt; "Upgrade", "Performance Upgrade", & "Downgrade"</li>
	<li>Added Vehicle &gt; Spawner &gt; "Tune Spawned Vehicles", "Find Vehicle", "DLCs" & "Classes"</li>
	<li>Added Settings &gt; Back Closes Menu</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.4', '24/05/2020 00:07'); ?>
<ul>
	<li>Added an authorization system</li>
	<li>Added Self &gt; Set Wanted Level</li>
	<li>Replaced Self &gt; "Never Wanted" with "Lock Wanted Level"</li>
	<li>Added Settings &gt; "Show Cursor Position", "Set Menu Hue" & "Show Help Text"</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.3', '23/05/2020 05:24'); ?>
<ul>
	<li>Some commands have been renamed to make their purpose more apparent without needing to read the help text which means that some commands that you saved as "On" will now be off again</li>
	<li>Added Self &gt; "Super Run", "Super Jump" & "Clusmyness"</li>
	<li>Replaced "Vehicle &gt; Seatbelt" with "Self &gt; Gracefulness"</li>
	<li>Added Weapons &gt; One Shot Kill</li>
	<li>Added World &gt; Teleport to &gt; "Objective" & "Split Sides West Comedy Club"</li>
	<li>Added World &gt; IPLs &gt; "Lost MC Clubhouse", "Bahama Mamas", "Lester's Factory", "Fame or Shame", "Max Renda", "Banham Canyon House", "FIB Helicopter Crash", "FIB Rubble", "Carwash Spinners", "iFruit Billboard", "Meltdown Billboard 1", "Meltdown Billboard 2" & "Hill Valley Church Grave"</li>
	<li>Added World &gt; NPCs Cower</li>
	<li>Added Experiments &gt; "Show Interior ID" & "Show Profile"</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.2', '21/05/2020 10:22'); ?>
<ul>
	<li>Added Self &gt; Moist Mode</li>
	<li>Added Weapons &gt; "Get All Weapons", "Lose All Weapons", "Infinite Ammo", "Type" (select explosion type of Explosive Ammo) & "No Reload"</li>
	<li>Added World &gt; "Teleport to" (includes "Waypoint" in addition to "La Fluente Blanca"), "IPLs", "NPCs Flee" & "Copy Coordinates to Clipboard"</li>
	<li>Added Vehicle &gt; Spawner &gt; Enter Spawned Vehicle</li>
	<li>Added Vehicle &gt; Instantly Enter Vehicles</li>
	<li>Added Experiments &gt; "User Radio", "Ignored By Peds" & "Unblock Waypoint"</li>
	<li>Added cursor indicator at the top right of the menu</li>
	<li>Aligned ">", "On" & "Off" indicators to the right of the menu</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.1', '17/05/2020 22:21'); ?>
<ul>
	<li>
		Fully implemented command box (previously only spawned vehicles)
		<ul>
			<li>Added Vehicle &gt; Spawn</li>
		</ul>
	</li>
	<li>Added Weapon &gt; Explosive Ammo</li>
	<li>Added World &gt; "Teleport to Waypoint" & "Blackout"</li>
	<li>Fixed tutorial not showing on first run</li>
	<li>Various other improvements and bugfixes</li>
</ul>
<?php printHeader('Stand 0.0.1', '17/05/2020 04:44'); ?>
<ul>
	<li>
		Stand 0.0.1 had these features:
		<ul>
			<li>
				Self &gt;
				<ul>
					<li>God Mode (On/Off): disbles your ability to die (Command: god)</li>
					<li>Ghost Mode (On/Off): enables walking through walls and vehicles (Command: ghost)</li>
					<li>Mobile Radio (On/Off): enables listening to the radio on foot (Command: mobileradio)</li>
				</ul>
			</li>
			<li>
				Vehicle &gt;
				<ul>
					<li>God Mode (On/Off): disables your vehicle's ability to die (Command: vehgod)</li>
					<li>Seatbelt (On/Off): disables falling off bikes (Command: seatbelt)</li>
					<li>AR Speedometer (On/Off) (Command: arspeed)</li>
				</ul>
			</li>
			<li>World &gt;
				<ul>
					<li>Burn Peds (On/Off)</li>
				</ul>
			</li>
			<li>
				Settings &gt;
				<ul>
					<li>Rainbow Mode (On/Off)</li>
					<li>Disable Everything (Command: disableall)</li>
					<li>Load Settings (Command: load)</li>
					<li>Save Settings [F11] (Command: save)</li>
					<li>Repeat Tutorial</li>
					<li>Unload Stand [F1] (Command: unload)</li>
				</ul>
			</li>
			<li>
				Super Secret Stuff &gt;
				<ul>
					<li>Magenta Freemode (On/Off)</li>
					<li>Generate Features.txt</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		and was injected using <b>Launchpad 0.1</b>
	</li>
</ul>