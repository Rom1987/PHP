<form name='one' method='post'
action='z7.php'>
<input type='text' name='n'>
<input type='text' name='m'>
<input type='submit'>
</form>
<?php 
/*Даны действительные числа а1, ... а10.
 Вычислить 
*/

$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$a[]=rand(1,100);
$x=0;
for ($i=0;$i<=10;$i++){ 
	
	for ($n=1;$n<=10;$n++) {
		
	
	$x+=pow($a[$i],$n);
}} 
echo $x;
?>