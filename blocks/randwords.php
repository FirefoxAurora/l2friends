<?  
$bgcolor=""; // ���� ���� �������
$border="1"; // 0/1 - ���� ������/��� ������� :-)
$brdcolor=""; // ���� ������� �������
$width="100%"; // ������ ����� �����
$height="14"; // ������ ������
$fontcolor="000000"; // ���� ������
//****** ���� ������ �� ���������� ������ ���� *********//

$lines = file("blocks/database.dat");
$itogo=count($lines)-1;
srand((double) microtime()*1000000);
$i=rand(0,$itogo); // �������� ��������� ����� (0...MAX)
$dt=explode("|", $lines[$i]);

print"
<table 
<tr><td height=$height><font color=$fontcolor>$dt[0]</font></td></tr></table>
";
?>
