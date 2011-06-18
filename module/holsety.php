<?php
  if (isset($_GET['lib']) || isset($_POST['lib'])) {
$lib = trim(isset($_POST['lib']) ? $_POST['lib'] : $_GET['lib']);
if (preg_match("/[^a-zA-Z0-9_]/", $lib)) { Header();exit;}}  
  if ($lib == "")
  { ?><ul>
  
 <center><img src="module\library\IMG\l2holsety.jpg"></center>

<br>
<br>
<center><hr><ul><h3>Welcome to Lineage2 Interlude - Holsety Edition</h3></ul><hr></center><br>
<font size="+1"><b><i>Lineage II Holsety Server - Chronicle Throne: Interlude</i></b></font>
<br>
<b>Server Rates</b>:<br>
- 1x EXP<br>
- 1x SP<br>
- 1x Adena<br>
- 1x Drop<br>
- 1x Quest Reward<br>

<b>Server Info</b>:<br>
- Full support Lineage  Interlude Live Client<br>
- Full Interlude maps/mobs/items/quest...<br>
- Support Siege castle<br>
- Support Strider/wyvern<br>
- Support Seven signs<br>
- Support Subclass<br>
- Custom GMShop<br>

<b>How to play in this server</b>:<br>
- Download Lineage Interlude Live Client.<br>
- Download our patch.<br>
- Contact : skyf4ll@gmail.com<br>
<br>
<center> Ok, Thanks and Have fun to You ... All the Best !!!


</ul>
  <? } 
  else  
    {
	  include('module/library/' . $lib . '.php');	
	}

?>