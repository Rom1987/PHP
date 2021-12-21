<form name='one' method='post'
Action='z3_(5).php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php
$n=$_POST['n'];
 $x=0;
while ($x<=sqrt($n)){
 $y=0;
while ($y<=sqrt($n)){
 $z=0;
while ($z<=sqrt($n)){
	if  ($x*$x+$y*$y+$z*$z==$n)
	echo $z.'<br>'.$y.'<br>'.$x.'<br>'.'/'.'<br>';
	$z++;} 
	$y++;} 
    $x++;}
?>
    
