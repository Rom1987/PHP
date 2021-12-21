<form name='one' method='post'
action 'e6.1.1.php'>
<input type='text' name='M'>
<input type='submit'>
</form>
<?php
/*Дана матрица размерностью NxM. Ввод
элементов матрицы реализовать через
датчик случайных чисел. Отсортировать
в порядке возрастания четные элементов
каждого столбца.
*/
$M=$_POST['M'];
for($i=0;$i<$M;$i++){
	echo '<br>';
	for($j=0;$j<$M;$j++){
	$matrix[$i][$j]=rand(-100,100);
	echo $matrix[$i][$j].' ';
	}
}
echo '<br>';
for($i=0;$i<$M;$i++){
	echo '<br>';
	for($j=0;$j<$M;$j++){
	$a=usort ($matrix);
	echo $a.' ';
	}
echo $matrix[$i][$j].' ';}
?>