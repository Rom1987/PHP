<form name='one' method='post'
action='z10(13).php'>
Фамилия:<input type='text' name='f'>
Имя:<input type='text' name='i'>
Отечство:<input type='text' name='o'>
<input type='submit'>
</form>
<?php 
/*13. Дана строка содержащая Фамилию Имя и Отчество студента. Получить новую строку вида И.
Фамилия*/
$f=$_POST['f'];
$i=$_POST['i'];
$o=$_POST['o'];
$j=0;
 echo  $i[$j].'.'.$f;
?>