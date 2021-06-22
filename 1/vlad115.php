<form name='one' method='POST'
Action='vlad115.php'>
<input type="text" name="n">
<input type="submit"> 
</form> 
<?php 
$n=$_POST['n']; 
$factorial = 1;
$x=0;
for ($k = 1; $k <= $n; $k++) {
	$factorial*= $k;
    $x+=$factorial/(1/($k+1) );
    
}
Echo $x;
?>