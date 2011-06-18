<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Error (MySQL).');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Error ( DB ).');

//Получаем данные из базы
$data=mysql_query("SELECT * FROM characters WHERE $where ORDER BY onlinetime DESC LIMIT $top") or die('Error (DB info).');

//Заголовок
echo '<br><center><b>..:: TOP Activity ::..</b></center><br><hr>';
include("module/table.php");
?>