<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Error MySQL.');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Error DB.');

//�������� ������ �� ����
$data=mysql_query("SELECT * FROM characters WHERE $where  AND accesslevel<50 AND pvpkills>0 ORDER BY  pvpkills DESC LIMIT $top") or die('Error (DB info ).');

//���������
echo '<br><center><b>..:: TOP PVP ::..</b></center><br><hr>';
include("module/table.php");
?>