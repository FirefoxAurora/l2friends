<?php
include("module/stat-menu.php");
$sql = mysql_query("SELECT obj_Id, char_name, accesslevel, IFNULL(c_w,0) AS weapon, IFNULL(c_ar,0) AS armor, IFNULL(c_e,0) AS etcitem, IFNULL(c_ad,0) AS adena, IFNULL(c_w,0)+IFNULL(c_ar,0)+IFNULL(c_e,0)+IFNULL(c_ad,0) AS summary FROM characters LEFT JOIN (SELECT owner_id,SUM(count*price) AS c_w FROM items,weapon WHERE items.item_id=weapon.item_id GROUP BY owner_id) AS t_w ON characters.obj_Id=t_w.owner_id LEFT JOIN (SELECT owner_id,SUM(count*price) AS c_ar FROM items,armor WHERE items.item_id=armor.item_id GROUP BY owner_id) AS t_ar ON characters.obj_Id=t_ar.owner_id LEFT JOIN (SELECT owner_id,SUM(count*price) AS c_e FROM items,etcitem WHERE items.item_id != 57 AND items.item_id=etcitem.item_id GROUP BY owner_id) AS t_e ON characters.obj_Id=t_e.owner_id LEFT JOIN (SELECT owner_id,SUM(count) AS c_ad FROM items WHERE items.item_id=57 GROUP BY owner_id) AS t_ad ON characters.obj_Id=t_ad.owner_id WHERE accesslevel=0 ORDER BY summary DESC LIMIT $top");
print '
<br><b><center>..:: Rich Players ::..</center></b><br><hr>
<table>
<thead>
<tr >
 <th>¹</th>
 <th>Nick</th>
 <th>Weapon</th>
 <th>Armor</th>
 <th>Items</th>
 <th>Adena</th>
 <th class="sortedColumn">At all</th>
</tr>
</thead>
<tbody id="TblBdy">
';

$i=1;
while ($row = @mysql_fetch_array($sql))
{
print ' <tr><td width="4%">'.$i.'</td><td width="30%">' .$row["char_name"]. '</td><td class="numeric" width="14%">' .$row["weapon"]. '</td><td class="numeric" width="14%">' .$row["armor"]. '</td><td class="numeric" width="14%">'.$row["etcitem"]. '</td><td class="numeric" width="14%">'.$row["adena"]. '</td><td class="numeric sortedColumn" width="30%">'.$row["summary"]. '</td></tr>
';
$i++;
}
print "</tbody>\n</table>\n";
?>
