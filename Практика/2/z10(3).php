<form name='one' method='post'
action='z10(3).php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php 
/* 3.Напишите программу, которая читает
 с клавиатуры строку текста и преобразует
 ее в новую строку "задом на перед".*/
 $n=$_POST['n'];
 $s=strrev ($n);
 echo $s;
?>