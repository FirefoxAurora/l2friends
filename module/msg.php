<?php
include("module/stat-menu.php");
$filename="./module/data.txt";
//Если файл существует
if ( file_exists($filename) )
{
     //Чтение построчно в массив
     $data=file($filename);
    
     //Перебор массива $data
     
     {
         //Это - здоровая паранойя
         //проверка на пустоту текущей строки
         if($content==="")
         {
             continue;
         }
         //Разбиваем строку из файла на составляющие, а если в строке
         //вообще символа "=" нет, переходим сразу к следующей (строке)
         if(!$values=explode("=", $content))
         {
             continue;
         }
         echo "<tr>";
         //Перебираем - это для универсальности кода
         foreach($values as $text)
         {
             echo" <td valign=top>";
             //Заменяем "безопасные строки" обратно
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

 


