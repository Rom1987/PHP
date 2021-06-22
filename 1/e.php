<form name='one' method='post'
Action='e.php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php
$n=$_POST['n'];
do { for ($x=1;$x<=$n;$x=$x+0.1){
 $y=($x*$x-3*$x+2)/sqrt(2*$x*$x*$x-1); 
 echo $y.'<br>';}} 
while ($x<=$n);
?>
