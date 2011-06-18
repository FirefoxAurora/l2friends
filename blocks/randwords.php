<?  
$bgcolor=""; // Цвет фона таблицы
$border="1"; // 0/1 - есть бордюр/нет бордюра :-)
$brdcolor=""; // Цвет бордюра таблицы
$width="100%"; // ширина этого добра
$height="14"; // высота строки
$fontcolor="000000"; // Цвет текста
//****** Ниже ничего не рекомендую менять ваще *********//

$lines = file("blocks/database.dat");
$itogo=count($lines)-1;
srand((double) microtime()*1000000);
$i=rand(0,$itogo); // выбираем случайное число (0...MAX)
$dt=explode("|", $lines[$i]);

print"
<table 
<tr><td height=$height><font color=$fontcolor>$dt[0]</font></td></tr></table>
";
?>
