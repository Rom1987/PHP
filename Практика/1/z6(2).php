<form name='one' method='post'
action='z6(2).php'>
</form>
<?php 
/*Даны действительные числа
 x1, ..., x17. 
Найти сумму значений | x[i] - x[j] | 
при условии, что (1 <= i < j <= 17.)*/
for ($i=1;$i<=17;$i++){
$a[$i]=rand (0,100);}
$s=0;
for ($i=1;$i<=16;$i++){
for ($j=$i+1;$j<=17;$j++) {
$s=$s + abs($a[$i] - $a[$j]);
Echo $s.'<br>';} 
	}  
?>
