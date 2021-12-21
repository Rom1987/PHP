<form name='one' method='post'
action 'z6_.php'>
<input type='text' name='N'>
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
$N=$_POST['N'];
$M=$_POST['M'];
for($i=0;$i<$N;$i++){
	echo '<br>';
	for($j=0;$j<$M;$j++){
	$matrix[$i][$j]=rand(-100,100);
	echo $matrix[$i][$j].' ';
	}
}
echo '<br>';
for($j=0;$j<$M;$j++){
	$mas=array();
	for($i=0;$i<$N;$i++){
	if ($matrix [$i][$j]%2==0){
	$mas[]=$matrix [$i][$j];
	}
	}
	sort ($mas);
	$v=0;
	for($i=0;$i<$N;$i++){
	if ($matrix [$i][$j]%2==0){
		
	$matrix [$i][$j]=$mas[$v];
	$v++;
	}
	}
}
echo '<br>';
for($i=0;$i<$N;$i++){
	echo '<br>';
	for($j=0;$j<$M;$j++){
	echo $matrix[$i][$j].' ';
	}
}
	               
?>