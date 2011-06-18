<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Error in MySQL server.');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Error in database.');
//getting info from database
$data=mysql_query  ("SELECT * FROM characters,char_templates WHERE online and accesslevel<50 AND char_templates.ClassId=characters.classid ORDER BY exp DESC" )
or die('Cannot get info from databse.');
//Header
echo '<br><center><b>..:: Online Players ::..</b></center><br><hr>';
include("module/table.php");
?>
