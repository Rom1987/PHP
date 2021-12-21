<form name='one' method='post'
Action='z 2(3).php'>
<input type='text' name='x1'>
<input type='text' name='y1'>
<input type='text' name='x2'>
<input type='text' name='y2'>
<input type='submit'>
</form>
<?php
/*Даны координаты (как целые от 1 до 8) двух различных полей шахматной доски. Если король за один ход может перейти с одного поля на другое, вывести логическое значение True, в противном случае вывести значение False.
*/
$x1=$_POST['x1'];
$y1=$_POST['y1'];
$x2=$_POST['x2'];
$y2=$_POST['y2'];
$dx=abs($x1-$x2);
$dy=abs($y1-$y2);
If($dx<2 && $dy<2 and $dx!=0 && $dy!=0) 
{
echo ('true');
}
else{
echo ('false');
}
?>