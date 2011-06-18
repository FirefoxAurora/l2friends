<?php
include("module/stat-menu.php");
#######################
#    Configuration    #
#######################
$noneed=1;
include("../../config/config.php");
if (Isset($_GET['server']))
{
include("../../config/config_".$serb[$_GET['server']].".php");}
else
{ include("../../config/config_".$serb[1].".php");}
$serverName=$htitle;
$databaseHost=$L2JBS_config["mysql_host"];
$databaseName=$L2JBS_config["mysql_db"];
$databaseLogin=$L2JBS_config["mysql_login"];
$databasePassword=$L2JBS_config["mysql_password"];

// Print top of page

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
$result = mysql_query("SELECT castle.name, clan_data.clan_name FROM castle,clan_data WHERE clan_data.hasCastle=castle.id");
while($row= mysql_fetch_array($result,MYSQL_ASSOC)){
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
case 'Schuttgart':$SchuttgartTax=$row['taxPercent'].'%';
$SchuttgartSiegeDate=date('D\, j M Y H\:i',$row['siegeDate']/1000);break;	
}
}
?>
<table cellpadding=0 cellspacing=0 width="588" align=center>
<?/*******************************  Aden  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Aden Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/aden.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Siege Date<td>Castle Owner<td>Tax
<tr class=text><td><?print $adenSiegeDate;?><td><?print$adenOwner;?><td><?print$adenTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Defenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='5' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='5' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/
?>
<?/*******************************  Dion  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Dion Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/dion.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $dionSiegeDate;?><td><?print$dionOwner;?><td><?print$dionTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='2' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='2' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></tr>';
/*********************************************************************************/
?>
<?/*******************************  Giran  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Giran Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/giran.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $giranSiegeDate;?><td><?print$giranOwner;?><td><?print$giranTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='3' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='3' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/
?>
<?/*******************************  Gludio  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Gludio Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/gludio.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $gludioSiegeDate;?><td><?print$gludioOwner;?><td><?print$gludioTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='1' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='1' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';


/*********************************************************************************/?>

<?/*******************************  Goddard  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Goddard Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/goddard.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $goddardSiegeDate;?><td><?print$goddardOwner;?><td><?print$goddardTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='7' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='7' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/?>

<?/*******************************  Innadril  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Innadril Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/innadril.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $innadrilSiegeDate;?><td><?print$innadrilOwner;?><td><?print$innadrilTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='6' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='6' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/?>

<?/*******************************  Oren  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Oren Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/oren.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $orenSiegeDate;?><td><?print$orenOwner;?><td><?print$orenTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='4' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='4' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/
?>

<?/*******************************  Rune  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Rune Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/rune.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $runeSiegeDate;?><td><?print$runeOwner;?><td><?print$runeTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='8' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='8' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table><br><br><br></td></tr>';
/*********************************************************************************/
?>
<?/*******************************  Schuttgart  ***********************************/?>
<tr><td><table cellpadding=0 cellspacing=0 width="95%" align=center>
<Tr align=center><td colspan=2><p class=zag>Schuttgart Castle<br><br>
<tr valign=top><td width=200><img src="module/castle/schuttgart.jpg"><td>
<table cellpadding=0 cellspacing=7 width=95% border=0 align=center>
<tr class=date><td>Date of Siege<td>Castle Owner<td>Tax
<tr class=text><td><?print $SchuttgartSiegeDate;?><td><?print$schuttgartOwner;?><td><?print$SchuttgartTax;?>
<tr class=text><td colspan=2><br>
<tr class=date><td colspan=2>Attakers<td colspan=2>Deffenders
<tr class=text><td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='9' AND type='1'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");

while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
}}?>
<td colspan=2>
<?
$result = mysql_query("SELECT clan_id FROM siege_clans WHERE castle_id='9' AND type='0'");
while($row=mysql_fetch_array($result))
{
$result2 = mysql_query("SELECT clan_name FROM clan_data WHERE clan_id='$row[0]'");
while($row2=mysql_fetch_array($result2))
{
print $row2[0];print'<br>';
if($row2[0]!="")
{$s11="1";break;}
}
}
if($s11=="1"){print '';}
else
print 'NPC</table></table></td></tr>';
/*********************************************************************************/
?></table>
