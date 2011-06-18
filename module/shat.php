<?php
include("module/stat-menu.php");?>
<br><center><b>..:: Game Chat veiw ::..</b></center><br><hr>
<?php
// Считывание всего файла.
$orders = file("$shat");
echo "<table  border=0>\n";
echo '<tr><th bgcolor = "#CCCCFF\">Date of message</th>
<th bgcolor = "#CCCCFF\">Autor</th>
<th bgcolor = "#CCCCFF\">Message</th>
</tr>';
for ($i = count($orders); $i >= count($orders)- 200; $i--)
{
// Разбиение строк
$s = $orders[$i];
$line = array();
preg_match("/(\\[[^\\]]+\\])[\\s]*([\\w]+)[\\s]*(\\[[^\\]]+\\])[\\s]*([\\ ]+[^\\z]+)/", $s, $line);
if ($line[2] == "SHOUT")$color='#c78354';
elseif ($line[2] == "ALL")$color='#fffdf9';
elseif ($line[2] == "TELL")$color='#be45b9';
elseif ($line[2] == "TRADE")$color='#d8a3cf';
elseif ($line[2] == "CLAN")$color='#948ad1';
elseif ($line[2] == "PARTY")$color='#08fb09';
// Вывод чата
if (($line[2] == "ALL") or ($line[2] == "TRADE")) {
echo "<tr><td><font color='$color'>$line[1]</td>
<td><font color='$color'>$line[3]</td>
<td><font color='$color'>$line[4]</td>
</tr>";
}
}
echo "</table>";
?>

