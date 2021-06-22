<form name='one' method='POST'
Action='eg.php'>
<input type="text" name="e">
<input type="submit"> 
</form> 
<?php 
$e=$_POST['e']; 
$factorial = 1;
$x=0;
for ($i = 1; $i <= $e; $i++) {
    $x+=pow(-2,$i)/$factorial *= $i;
    if (abs($x)<$e){
    	echo $x.'<br>';
    }
}

?>