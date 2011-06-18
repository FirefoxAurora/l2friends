<?php
#######################
#    Configuration    #
#######################
$noneed=1;
include("../../config/config.php");
if (Isset($_GET['server']))
{
include("../../config/config_".$serb[$_GET['server']].".php");}
else
{ include("../../config/config_".$serb[1].".php");}
$serverName=$htitle;
$databaseHost=$L2JBS_config["mysql_host"];
$databaseName=$L2JBS_config["mysql_db"];
$databaseLogin=$L2JBS_config["mysql_login"];
$databasePassword=$L2JBS_config["mysql_password"];

?>
