<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Cannot Connet to MySQL Server.Napas Please fix it.');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Cannot find the database. Please Edit the config file.');

//Получаем данные из базы
$data=mysql_query("SELECT characters.*,classname FROM characters,char_templates WHERE !accesslevel AND race=2 AND char_templates.ClassId=characters.classid ORDER BY level DESC LIMIT $top", $link) or die('Cannot get information from database.Napas Please fix it.');

//Заголовок
echo '<br><center><b>..:: Top of Dark Elfs::..</b></center><br><hr>';
include("module/table.php");
?>