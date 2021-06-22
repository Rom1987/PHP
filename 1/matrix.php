<form name='one' method='post'
action 'matrix.php'>
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
$mas=array();
$r=0;
for($i=0;$i<$N;$i++){
	for($j=0;$j<$M;$j++){
	$matrix[$i][$j]=rand(-100,100);	
	}
}
for($i=0;$i<$N;$i++){
	echo '<br>';
	for($j=0;$j<$M;$j++){
	echo $matrix[$i][$j].' ';
	}
}	
for($i=0;$i<$N;$i++){
	for($j=0;$j<$M;$j++){
	if ($i<$j) {$mas[]=$matrix[$i][$j];}
	}
}
sort($mas);
for($i=0;$i<$N;$i++){
	for($j=0;$j<$M;$j++){
	if ($i<$j){ 
	$matrix[$i][$j]=$mas[$r];
	$r++;
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
