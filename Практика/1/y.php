<form name='one' method='POST'
Action='y.php'>
N:<input type="text" name="N">
<input type="submit"> 
</form> 
 
<?php 
$N=$_POST['N'];
if ($N%2==0) {
	$i=2;
	$f=1;
		$f=$f*$i;
		$i=$i-2;
		echo $f;
}
Else {
	$i=1;
	$f=1;
	while ($i<=$n){
		
		$f=$f*$i;
		$i=$i+2;
		echo $f;
	}
	
}
?>
