<form name='one' method='post'
Action='z 2(2).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='text' name='c'>
<input type='text' name='d'>
<input type='submit'>
</form>
<?php
/*Даны вещественные положительные числа a, b, c, d. Выяснить, можно ли прямоугольник со сторонами а, Ь уместить внутри прямоугольника со сторонами c, d так, чтобы каждая из сторон одного прямоугольника была параллельна или перпендикулярна каждой стороне второго прямоугольника.
*/
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
If($a<=$c && $b<=$d or $a<=$d && $b<=$c) 
{
echo ('yes');
}
else{
echo ('no');
}
?>
