<?php
$h = fopen("p.txt","a");
/* открывает на запись файл 1.txt если он существует, или создает пустой
файл с таким именем, если его еще нет */
$text = "Этот текст запишем в файл.";
if (fwrite($h,$text)){
echo 'Запись прошла успешно'.'<br>';
}
else
{echo "Произошла ошибка при записи данных";}
readfile ("p.txt");
echo '<br>'.__FILE__.'<br>';
echo __DIR__.'<br>';
$path = ".";
$filelist = array();
if($handle = opendir($path)){
while($entry = readdir($handle)){
echo $entry."<br>";
}

closedir($handle);
}


fclose($h);
?>