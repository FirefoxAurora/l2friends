<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Cannot connect to mysql server..');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Cannot get the database.');

//Получаем данные из базы
$data=mysql_query("SELECT characters.*,classname FROM characters,char_templates WHERE !accesslevel AND race=1 AND char_templates.ClassId=characters.classid ORDER BY level DESC LIMIT $top", $link) or die('Cannot get information from database.');

//Заголовок
echo '<br><center><b>..:: Elfs Top ::..</b></center><br><hr>';
include("module/table.php");
?>