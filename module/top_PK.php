<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Error MYSQL.');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Error DB.');

//Получаем данные из базы
$data=mysql_query("SELECT * FROM characters WHERE $where AND accesslevel<50 AND pkkills>0 ORDER BY  pkkills DESC LIMIT $top") or die('Error (DB INFO ).');

//Заголовок
echo '<br><center><b>..:: TOP PK ::..</b></center><br><hr>';
include("module/table.php");
?>