<?php

require 'blocks/functions.php';
include("config/config.php");
$skins = array(1 => array('main',$skin1),
               2 => array('light',$skin2));
if (isset($_GET['k']) || isset($_POST['k'])) {
$k = trim(isset($_POST['k']) ? $_POST['k'] : $_GET['k']);
if (preg_match("/[^a-zA-Z0-9_]/", $k)) {Header();exit;}}  
if (isset($_GET['id']) || isset($_POST['id'])) {
$id = trim(isset($_POST['id']) ? $_POST['id'] : $_GET['id']);
if (preg_match("/[^a-zA-Z0-9_]/", $id)) {
Header("Location: index.php?id=start");
exit;
	}
} else {
	$id = "start";
}
switch ($id):
 case 'change_skin':
  $skin_name = $_POST["skin"];
  setcookie("skin_name", $skin_name, time()+2592000);
  quickrefresh('index.php?id=start');
  break;
 case 'logout':
  resetcookies();
  quickrefresh('index.php?id=start');
  break;
endswitch;
$skin_name = $_COOKIE['skin_name'];
if ($skin_name == '') $skin_name = $skins[1][1];

$skin_name="skins/".$skin_name."/".$skin_name."_2.php";
if (file_exists($skin_name))
{
include($skin_name);
}
else
{
include ('skins/'.$skin1.'/'.$skin1.'.php');
}
if (!file_exists('skins/'.$skin1.'/'.$skin1.'.php')) 
{
echo "<h3>You typed wrong name of the skin.
<br> Please change it in /config.php</h3>";
}
?>




 
