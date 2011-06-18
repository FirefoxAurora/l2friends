<?php
include("module/stat-menu.php");
mysql_connect($L2JBS_config["mysql_host"],$L2JBS_config["mysql_login"],$L2JBS_config["mysql_password"]) or die('Cannot connect to mysql server.');
mysql_select_db($L2JBS_config["mysql_db"]) or dir('Cannot connect to the database.');

//Получаем данные из базы
$data=mysql_query("SELECT * FROM characters WHERE $where AND accesslevel>50 ORDER BY    level   DESC LIMIT $top") or die('Cannot get information from databse.');

//Заголовок
echo '<br><center><b>..:: GameMasters List ::..</b></center><br><hr>';
echo "<center><table><thead><tr><th>№ |</th><th>Face |</th><th><center>Nick |</center></th><th>Status |</th><th>Leave Message</th><tr></thead>\n";
//Выводим содержимое таблицы
 $result2 = mysql_query("SELECT clan_id,clan_name FROM clan_data", $link)
    or die ("Error: ".mysql_error());
  while ($row2=mysql_fetch_row($result2))
    $clans_array[$row2[0]]=$row2[1];
  $clans_array[0]="";
$n=1;
while ($top=mysql_fetch_array($data))
{
	
	if ($top['sex']==0) { $name=''.$top[char_name].'</font>'; } else { $name='<font color=#FF8080>'.$top[char_name].'</font>'; }
	$class=mysql_fetch_array(mysql_query("select ClassName from char_templates where ClassId=$top[classid]"));
	if (($top['sex']==0) && ($top['race']==4)) { $img='./module/face/dwarf_male.gif'; }
	if (($top['sex']==1) && ($top['race']==4)) { $img='./module/face/dwarf_female.gif'; }
	if (($top['sex']==0) && ($top['race']==2)) { $img='./module/face/darkelf_male.gif'; }
	if (($top['sex']==1) && ($top['race']==2)) { $img='./module/face/darkelf_female.gif'; }
	if (($top['sex']==0) && ($top['race']==0)) { $img='./module/face/human_male.gif'; }
	if (($top['sex']==1) && ($top['race']==0)) { $img='./module/face/human_female.gif'; }
	if (($top['sex']==0) && ($top['race']==1)) { $img='./module/face/elf_male.gif'; }
	if (($top['sex']==1) && ($top['race']==1)) { $img='./module/face/elf_female.gif'; }
	if (($top['sex']==0) && ($top['race']==3)) { $img='./module/face/orc_male.gif'; }
	if (($top['sex']==1) && ($top['race']==3)) { $img='./module/face/orc_female.gif'; }
	if ($top['online']==1) {$online='<font color=green>Online</font>'; } 
	else {$online='<font color=red>Offline</font>'; } 
	echo "<tr><td><b><center>$n</center></b></td><td><img src='$img'></td><td> $name</td><td>$online</td><td><a href=index.php?id=msg>Message</a></td></tr>\n";
	$n++;
}
//Закрываем таблицу
echo '</table>';
?></center>