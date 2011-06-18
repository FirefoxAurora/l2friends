<?php
include("module/stat-menu.php");
  $result = mysql_query("SELECT clan_data.*,char_name,csum,ccount,cavg FROM clan_data INNER JOIN characters ON clan_data.leader_id=characters.obj_Id LEFT JOIN (SELECT clanid, SUM(level) AS csum, count(level) AS ccount, AVG(level) AS cavg FROM characters WHERE clanid GROUP BY clanid) AS levels ON clan_data.clan_id=levels.clanid ORDER BY clan_level DESC, csum DESC", $link)
    or die ("Error: ".mysql_error());

print '<table>
<caption><br><b>..:: Clans Top ::..</b><br><br><hr></caption>
<thead>
<tr style="vertical-align: bottom;">
<th>Clan Name</th>
<th>Leader</th>
<th class="sortedColumn">Level</th>
<th>Castle</th>
<th>Tax of levels</th>
<th>Members</th>
<th>Middle Level</th>
</tr>
</thead>
<tfoot>
<tr><td colspan="7" style="text-align: right;">'.$L2JBS_lang["clantop_total"].': '.mysql_num_rows($result).'</td></tr>
</tfoot>
<tbody id="TblBdy">
';

  $i=1;
  while ($row=mysql_fetch_array($result))
  {
    switch ($row["hasCastle"])
    {
      case 1: $row["hasCastle"]=$L2JBS_lang["clantop_gludiocastle"]; break;
      case 2: $row["hasCastle"]=$L2JBS_lang["clantop_dioncastle"]; break;
      case 3: $row["hasCastle"]=$L2JBS_lang["clantop_girancastle"]; break;
      case 4: $row["hasCastle"]=$L2JBS_lang["clantop_orencastle"]; break;
      case 5: $row["hasCastle"]=$L2JBS_lang["clantop_adencastle"]; break;
      case 6: $row["hasCastle"]=$L2JBS_lang["clantop_innadrilcastle"]; break;
      default: $row["hasCastle"]=$L2JBS_lang["clantop_nocastle"];
    }
    print "<tr". (($i++ % 2) ? "" : " class=\"alternateRow\"") ."><td><a href=\"index.php?d=module&p=clanview&clan_name=". $row["clan_name"]."\">". htmlspecialchars($row["clan_name"]). "</a></td><td>". $row["char_name"]. "</td><td class=\"numeric sortedColumn\">".$row["clan_level"]. "</td><td>".$row["hasCastle"]. "</td><td class=\"numeric\">".$row["csum"]. "</td><td class=\"numeric\">".$row["ccount"]. "</td><td class=\"numeric\">".$row["cavg"]. "</td></tr>\n";
  }
  print "</tbody>\n</table>\n";
  mysql_close($link);
?>
 
