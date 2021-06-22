<form name='one' method='post'
action 'z7_(2).php'>
<input type='text' name='N'>
<input type='text' name='M'>
<input type='submit'>
</form>
<?php
/*Даны целые положительные числа M и N. Сформировать целочислен-
ную матрицу размера M × N, у которой все элементы I-й строки имеют
значение 10·I (I = 1, . . ., M).
*/
$N=$_POST['N'];
$M=$_POST['M'];
echo '<br>';
for($i=1;$i<=$N;$i++){
	echo '<br>';	
	for($j=1;$j<=$M;$j++){
	$matrix[$i][$j]=$i*10;
	echo $matrix[$i][$j].' ';
	}
}
?>