<html>
<head>
<body bgcolor="#000000" text="lime" link="#009933" vlink="#009933" padding="0" leftmargin="0">
<font size="2"> 
<TITLE><?php
include"connection.php";
echo $htitle . " - Live map";
?></TITLE>

<script>
<!--
//enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
var limit="0"

if (document.images){
var parselimit=limit.split(":")
parselimit=parselimit[0]*60+parselimit[1]*1
}
function beginrefresh(){
if (!document.images)
return
if (parselimit==1)
window.location.reload()
else{ 
parselimit-=1
curmin=Math.floor(parselimit/60)
cursec=parselimit%60
if (curmin!=0)
curtime=curmin+" minutes "+cursec+" seconds to automatic refresh!"
else
curtime=cursec+" seconds to automatic refresh!"
window.status=curtime
setTimeout("beginrefresh()",1000)
}
}

window.onload=beginrefresh
//-->
</script>

</head>
<?php
$query_players=mysql_query("SELECT char_name,x,y,race,z,level FROM characters WHERE online = '1'");
echo "<div style=position:absolute;top:0px;left:0px><img src=C5.jpg></div>";

while ($res=mysql_fetch_array($query_players))
  {
	$name=$res['char_name'];
	$valx=$res['x'];
	$valy=$res['y'];
	$valz=$res['z'];
	$race=$res['race'];
  $level=$res['level'];
	
  $x=116+($valx+107823)/200; //Aden
  $y=2580+($valy-255420 )/200;  //Aden
	echo "<div style=\"position:absolute;top:".$y."px;left:".$x."px\"><img src=".$race.".png title=\"$name x:$valx y:$valy z:$valz\"></div>";
	}

$query_online_count="SELECT count(*) FROM characters WHERE accesslevel<100 and online = '1'";
$result = mysql_query($query_online_count);
$online = mysql_result ($result, 0, 0);

echo '<div style=position:absolute;top:10px;left:120px><table><tr><td align=center><b><u><font color=000000>'.$online.'</font></b></u></td><td><b><u><font color=000000>Players Online</font></u></b></td><tr>
 <tr><td><img src=0.png width=15></td><td><b><font color=red>Human</font></b></td><tr>
 <tr><td><img src=1.png width=15></td><td><b><font color=yellow>Elf</font></b></td><tr>
 <tr><td><img src=2.png width=15></td><td><b><font color=blue>Dark Elf</font></b></td><tr>
 <tr><td><img src=3.png width=15></td><td><b><font color=green>Orc</font></b></td><tr>
 <tr><td><img src=4.png width=15></td><td><b><font color=cyan>Dwarf</font></b></td></tr>
</table></div>';
"<!-- Author Unknown, converted for use with L2J by Napas mod version by Dima Napas@Megateam.info -->\n";//Do Not Remove
mysql_close(); 

?> 

