<form name='one' method='post'
action 'e6.1.1(1).php'>
<input type='text' name='N'>
<input type='text' name='M'>
<input type='submit'>
</form>
<?php
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
for($i=0;$i<=10;$i++){
	$mas=array();
	for($j=0;;){
	$mas[]=$matrix [$i][$j];
	}
for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
	$mas[]=$matrix [$i][$j];
	}
	sort ($mas);
	
?>