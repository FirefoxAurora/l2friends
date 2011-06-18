<?php
$noneed=1;
include("../../config/config.php");
if (Isset($_GET['server']))
{
include("../../config/config_".$serb[$_GET['server']].".php");}
else
{ include("../../config/config_".$serb[1].".php");}
?>


