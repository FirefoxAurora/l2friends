<?php
  if (isset($_GET['lib']) || isset($_POST['lib'])) {
$lib = trim(isset($_POST['lib']) ? $_POST['lib'] : $_GET['lib']);
if (preg_match("/[^a-zA-Z0-9_]/", $lib)) { Header();exit;}}  
  if ($lib == "")
  { ?><ul>
  


<center><h2><font color=red>Rules</font></h2></center>

<hr><ul><li><h3>For newbies</h3></li></ul><hr><br>
You must respect all Paranormal Lineage 2 Staff..     <br>
No bug exploiting (Grief Buffing players in town , sniping, etc. ). <br>
Do not impersonate staff. <br>
Do not use modification or third party scripts/programs.<br>
No hateful, nazi comments or racial slurs.<br>
Do not spam chat.<br>
Do not ask to become a GM.<br>
Do not beg for adena or items.<br>
Selling items to other players by real money not allowed on our server, players that will try to sell or buy items by real money will be banned without any warning.
Do not hit NPCs.<br><br>
<hr><ul><li><h3>Account Rules</h3></li></ul><hr><br>
L2 Walker isn't allowed and if caught using it you will be banned immediately.<br>
Sharing accounts is allowed but you are responsible for giving out your information. <br>
Give your information out at your own risk.<br>
GMs do not restore lost or dropped items.<br>
Due Wipe or Rollback your characters or any other of your lost data will not be restored.<br>
Each player allowed to have max 3 accounts. ( dual box )<br>
In case player will be captured with more then 3 accounts they will be banned .<br>
</ul>
  <? } 
  else  
    {
	  include('module/library/' . $lib . '.php');	
	}

?>