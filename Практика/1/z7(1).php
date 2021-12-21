<form name='one' method='post'
action='z7(1).php'>
</form>
<?php 
/*Даны действительные числа а1, ... а10.
 Вычислить a1+a2^2+…+a10^10
*/
$a=array (4,5,89,67,32,54,7,9,16,78);
print_r($a);
$x=0;
for ($i=0;$i<=10;$i++){ 
	
	for ($n=1;$n<=10;$n++) {
		
	
	$x+=pow($a[$i],$n);
}} 
echo "<br>".$x;
?>