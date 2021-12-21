<head>Загрузка  файлов на сервер</head>
  <form  action="z13.php"  method="post">
    Название заметки: <input name="name" type="text">
    URL заметки: <input name="name1" type="text">
    Содержимое заметки: <input name="name2" type="text">
     <input  type="submit" name="upload" value="Загрузить"/>
  </form>
<?php
$name=$_POST['name'];
$name1=$_POST['name1'];
$name2=$_POST['name2']; 
  if(isset($_POST['upload'])){
  
$h = fopen("url1.html","a");

if (fwrite($h,$name.PHP_EOL) and fwrite($h,$name1.PHP_EOL) and fwrite($h,$name2.PHP_EOL)){
echo 'Запись прошла успешно'.'<br>';
} 
$s = fopen("url1.html","r");
echo '<table border=1>';
echo "<tr>";
echo "<td>".Название." ".заметки."</td>";
echo "<td>".URL." ".заметки."</td>";
echo "<td>".Содержимое." ".заметки."</td>";
echo "</tr>";

while (!feof($s)){
	
	$a1=fgets($s);$a2=fgets($s);$a3=fgets($s);
	
echo "<tr>";
echo "<td>".$a1."</td>";
echo "<td>".$a2."</td>";
echo "<td>".$a3."</td>";
echo "</tr>";

}

echo '</table>';
/*foreach ($s as $filename){
        echo $filename." и его размер: ".filesize($filename)." байт <br>";
}*/
 }
  
?>

