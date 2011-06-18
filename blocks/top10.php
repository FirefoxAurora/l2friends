<?php
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Cannot connet to MySQL Server. Please edit the config .');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Cannot find chusen databse. Please edit the config.');

$data=mysql_query("SELECT * FROM characters WHERE $where and accesslevel<50  ORDER BY  level  DESC LIMIT 10 ") or die('Cannot take the info from database.');

echo "<table><thead><tr><th><center>Nick</center></th><tr></thead>\n";

$result2 = mysql_query("SELECT clan_id,clan_name FROM clan_data", $link)
    or die ("Error: ".mysql_error());
  while ($row2=mysql_fetch_row($result2))
$n=1;
while ($top=mysql_fetch_array($data))
{	
if ($top['sex']==0) { $name='<font color=#8080FF>'.$top[char_name].'</font>'; } else { $name='<font color=#FF8080>' .$top[char_name].'</font>'; }
echo "<tr><td><b><center>$n</center></b></td><td>$name</td><td><center></td></tr>\n";
$n++;
}

echo '</table>';
?>