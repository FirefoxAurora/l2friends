<?
# Stats scripts
$fp = @fsockopen($hserver, $portlogin, $errno, $errstr, 1);
if($fp >= 1){
$loginonline = '<font color=green size=1 face=verdana>Online</font>';}
else{ $loginonline = '<font color=red size=1 face=verdana>Offline</font>'; }
$fp = @fsockopen($hserver, $portgame, $errno, $errstr, 1);
if($fp >= 1){
$gameonline = '<font color=green size=1 face=verdana>Online</font>';}
else{ $gameonline = '<font color=red size=1 face=verdana>Offline</font>'; }
$sql = mysql_query("SELECT count(*) FROM characters WHERE online = 1");
if( mysql_result($sql, 0, 0) <= 80){
$playsonline = "<font color=green>" . mysql_result($sql, 0, 0) . "</font>";}
elseif( mysql_result($sql, 0, 0) >= 80 AND mysql_result($sql, 0, 0) <= 150){
$playsonline = "<font color=orange>" . mysql_result($sql, 0, 0) . "</font>";}
elseif( mysql_result($sql, 0, 0) > 150){
$playsonline = "<font color=red>" . mysql_result($sql, 0, 0) . "</font>";}
$sql = mysql_query("SELECT count(*) FROM accounts");
$sql = mysql_query("SELECT count(*) FROM characters WHERE online ='1' AND accesslevel>50");
if( mysql_result($sql, 0, 0) <= 80){
$gmonline = "<font color=red>" . mysql_result($sql, 0, 0) . "</font>";}
$sql = mysql_query("SELECT count(*) FROM accounts");
$accountsnum = mysql_result($sql, 0, 0);
$sql = mysql_query("SELECT count(*) FROM characters");
$charnum = mysql_result($sql, 0, 0);
$sql = mysql_query("SELECT count(*) FROM clan_data");
$clannum = mysql_result($sql, 0, 0);
$sql = mysql_query("SELECT count(*) FROM characters Where accesslevel > 99");
$gmnum = mysql_result($sql, 0, 0);
?>