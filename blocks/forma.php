<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td class="n-cell b-tblr p-2 ac"><center>
<form action="index.php?id=change_skin" method="post" name="change_skin">
<select name="skin">
<?
$i = 0;
foreach ($skins as $skins)
{
$i++;
if ($skins[1] == $skin_name)
echo '<option value="'.$skins[1].'" selected>'.$skins[0].'</option>';
else
echo '<option value="'.$skins[1].'">'.$skins[0].'</option>';
}
?>
</select>
<br>
<input name="submit" type="submit" value="Submit">
</center>
</td>
</form>
</tr>
</table>



