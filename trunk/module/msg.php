<?php
include("module/stat-menu.php");
$filename="./module/data.txt";
//���� ���� ����������
if ( file_exists($filename) )
{
     //������ ��������� � ������
     $data=file($filename);
    
     //������� ������� $data
     
     {
         //��� - �������� ��������
         //�������� �� ������� ������� ������
         if($content==="")
         {
             continue;
         }
         //��������� ������ �� ����� �� ������������, � ���� � ������
         //������ ������� "=" ���, ��������� ����� � ��������� (������)
         if(!$values=explode("=", $content))
         {
             continue;
         }
         echo "<tr>";
         //���������� - ��� ��� ��������������� ����
         foreach($values as $text)
         {
             echo" <td valign=top>";
             //�������� "���������� ������" �������
             $text=str_replace("*#!equals!#*", "=", $text);
             echo $text;
             echo" </td>";
         }
         echo " </tr>";
     }
     echo "</table> ";
}
else
{
     echo "";
}
?>
     <br> 
     <b>Write message to server Administration:</b>  
     <form name='form' action='./index.php?id=script2' method='POST'>
       Your Nick:<br>
         <input type=text name='text' size=20 value=''><br><br>
         Message:<br>
         <textarea name='textarea' rows=5 cols=20></textarea><br><br>
         <input type=submit name='action' value='Send'>
     </form>

 


