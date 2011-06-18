<?php
//Создаем начало таблицы
echo "<table><thead><tr><th>Place</th><th>Face</th><th><center>Nick</center></th><th>Level</th><th> <center>Proffesion</center></th><th><center>Clan</center></th><th>Pvp/PK</th><th><center>Time in Game</center></th><th>Status</th><tr></thead>\n";
//Выводим содержимое таблицы
 $result2 = mysql_query("SELECT clan_id,clan_name FROM clan_data", $link)
    or die ("Error: ".mysql_error());
  while ($row2=mysql_fetch_row($result2))
    $clans_array[$row2[0]]=$row2[1];
  $clans_array[0]="";
$n=1;
while ($top=mysql_fetch_array($data))
{
	$onlinetimeH=round(($top[onlinetime]/60/60)-0.5);
	$onlinetimeM=round(((($top[onlinetime]/60/60)-$onlinetimeH)*60)-0.5);
	$clan=mysql_fetch_array(mysql_query("select * from clan_data where clan_id=$top[clanid]"));
	if ($clan[clan_name]=='') { $clan[clan_name]="No Clan"; }
	if ($top['sex']==0) { $name='<font color=#8080FF>'.$top[char_name].'</font>'; } else { $name='<font color=#FF8080>'.$top[char_name].'</font>'; }
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
	echo "<tr><td><b><center>$n</center></b></td><td><img src='$img'></td><td> $name</td><td><center> $top[level]</center></td><td><center>$class[ClassName]</center></td><td><center><a href=index.php?d=module&p=clantop>$clan[clan_name]</a></center> </td><td><center><b>$top[pvpkills]</b>/<b><font color=red>$top[pkkills]</font></b></center></td><td><center>$onlinetimeH Hours $onlinetimeM min.</center></td><td>$online</td></tr>\n";
	$n++;
}
//Закрываем таблицу
echo '</table>';
?>