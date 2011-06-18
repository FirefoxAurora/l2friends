<?php
include("module/stat-menu.php");?>
 <br><b><center>..:: Server Rates ::..</center></b><br> 
<table  width="100%"border="1" >
<tr><td>

EXP: <?php echo $exp;?><br>
SP: <?php echo $sp;?><br></td><td valign="top">
Adena: <?php echo $adena;?><br></td><td>
Items: <?php echo $items;?><br>
Spoil: <?php echo $spoil;?><br>

</td></tr></table>



 <br><b><center>..:: For all ::..</center></b><br> 
<table  width="100%"border="1" >
<tr><td width="25%" valign="top">


Login Server: <?php echo $loginonline; ?><br>
Game Server: <?php echo $gameonline; ?><?php echo $gm; ?><br>
Online: <?php echo $playsonline; ?><br> GameMasters Online: <?php echo $gmonline; ?> <br>
Accounts: <?php echo $accountsnum; ?><br>
Characters: <?php echo $charnum; ?> GameMasters: <?php echo $gmnum; ?><br>
Clans: <?php echo $clannum; ?><br>
<img src="module/stat/sex.jpg">
<?php
$sql = mysql_query("select count(*) from characters where sex = 0");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?>
<br>
<img src="module/stat/sex1.jpg">
<?php
$sql = mysql_query("select count(*) from characters where sex = 1");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?>
</td><td valign="top"> 
<b>Races creation % :</b><br>
<table><tr><td><left>
Humans:
</left><br>
Elfs:
<br>
Dark Elfs:
<br>
Orcs:
<br>
Dwarfs:
</td><td width="50%">
<?php
$sql = mysql_query("select count(*) from characters where race = 0");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?><br>
<?php
$sql = mysql_query("select count(*) from characters where race = 1");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?><br>
<?php
$sql = mysql_query("select count(*) from characters where race = 2");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?><br>
<?php
$sql = mysql_query("select count(*) from characters where race = 3");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?><br>
<?php
$sql = mysql_query("select count(*) from characters where race = 4");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?>
</td></tr></table>
</td><td valign="top">
<b>Seven Signs:</b><br><br>
<?php
echo "Players for dusk: ".mysql_result($sql, 0, 0)."<br>";
$sql = mysql_query("select count(*) from seven_signs where cabal like '%dusk%'");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?><br><br>

<?php
echo "Players for dawn: " . mysql_result($sql, 0, 0) . "<br>";
$sql = mysql_query("select count(*) from seven_signs where cabal like '%dawn%'");
$tfg = round(mysql_result($sql, 0, 0)/($charnum/100));
echo "&nbsp<img src=\"module/stat/sexline.jpg\" height=\"10px\" width=\"".$tfg."px\">&nbsp&nbsp ".$tfg."%";
?>

</td></tr></table>
 <br><b><center>..:: Castles ::..</center></b><br><hr>

<table width="100%; border="1" >
<tr>
<td width="20%">Castle:<br>Aden<br>Goddard<br>Giran<br>Oren<br>Gludio<br>Dion<br>Innadril<br>Rune<br>Schuttgart</td>
<td width="30%">Owners:<br>
<?php

/********  GIRAN  *************/
$giranOwner = "No Owner";
$giranSiegeDate = " ... ";
$giranTax ="";
/*********  OREN  **************/
$orenOwner = "No Owner";
$orenSiegeDate = " ... ";
$orenTax ="";
/**********  ADEN  **************/
$adenOwner = "No Owner";
$adenSiegeDate = " ... ";
$adenTax ="";
/********  Gludio  **************/
$gludioOwner = "No Owner";
$gludioSiegeDate = "...";
$gludioTax ="";
/**********  DION  ***************/
$dionOwner = "No Owner";
$dionSiegeDate = " ... ";
$dionTax ="";
/********  INNADRIL  *************/
$innadrilOwner = "No Owner";
$innadrilSiegeDate = " ... ";
$innadrilTax ="";
/********  GODDARD  *************/
$goddardOwner = "No Owner";
$goddardSiegeDate = " ... ";
$goddardTax ="";
/*********************************/
/********  RUNE  *************/
$runeOwner = "No Owner";
$runeSiegeDate = " ... ";
$runeTax ="";
/*********************************/
/********  SCHUTTGART  *************/
$schuttgartOwner = "No Owner";
$schuttgartSiegeDate = " ... ";
$schuttgartTax ="";
/*********************************/
$result = mysql_query("SELECT name,taxPercent,siegeDate FROM castle");
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
		switch($row['name']){
			case 'Giran':$giranTax=$row['taxPercent'].'%';
				$giranSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Oren':$orenTax=$row['taxPercent'].'%';
				$orenSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Aden':$adenTax=$row['taxPercent'].'%';
				$adenSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Gludio':$gludioTax=$row['taxPercent'].'%';
				$gludioSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Dion':$dionTax=$row['taxPercent'].'%';
				$dionSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Innadril':$innadrilTax=$row['taxPercent'].'%';
				$innadrilSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Goddard':$goddardTax=$row['taxPercent'].'%';
				$goddardSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;
			case 'Rune':$runeTax=$row['taxPercent'].'%';
				$runeSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;	
			case 'Schuttgart':$schuttgartTax=$row['taxPercent'].'%';
				$schuttgartSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;		

			}
	}
$sql = mysql_query("SELECT castle.name, clan_data.clan_name FROM castle,clan_data WHERE clan_data.hasCastle=castle.id");
	while($row= mysql_fetch_array($sql,MYSQL_ASSOC)){
		switch($row['name']){
			case 'Giran':$giranOwner=$row['clan_name'];break;
			case 'Oren':$orenOwner=$row['clan_name'];break;
			case 'Aden':$adenOwner=$row['clan_name'];break;
			case 'Gludio':$gludioOwner=$row['clan_name'];break;
			case 'Dion':$dionOwner=$row['clan_name'];break;
			case 'Innadril':$innadrilOwner=$row['clan_name'];break;
			case 'Goddard':$goddardOwner=$row['clan_name'];break;
			case 'Rune':$runeOwner=$row['clan_name'];break;
			case 'Schuttgart':$schuttgartOwner=$row['clan_name'];break;
			

			

			}
	}
echo $adenOwner."<br>";
echo $goddardOwner."<br>";
echo $giranOwner."<br>";
echo $orenOwner."<br>";
echo $gludioOwner."<br>";
echo $dionOwner."<br>";
echo $innadrilOwner."<br>";
echo $runeOwner."<br>";
echo $schuttgartOwner."<br>";



?>
</td>
<td width="35%">Siege Date:<br>
<?
echo $adenSiegeDate."<br>";
echo $goddardSiegeDate."<br>";
echo $giranSiegeDate."<br>";
echo $orenSiegeDate."<br>";
echo $gludioSiegeDate."<br>";
echo $dionSiegeDate."<br>";
echo $innadrilSiegeDate."<br>";
echo $runeSiegeDate."<br>";
echo $schuttgartSiegeDate."<br>";


?>
</td>
<td width="15%">Tax:<br>
<?
echo $adenTax."<br>";
echo $goddardTax."<br>";
echo $giranTax."<br>";
echo $orenTax."<br>";
echo $gludioTax."<br>";
echo $dionTax."<br>";
echo $innadrilTax."<br>";
echo $runeTax."<br>";
echo $schuttgartTax."<br>";


?>
</td>
</tr>
</table>

<hr>

