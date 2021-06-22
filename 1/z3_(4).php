<form name='one' method='post'
Action='z3_(4).php'>
<input type='text' name='p'>
<input type='submit'>
</form>
<?php
$p=$_POST['p']; //вести p 0<p<50
$x=10;
$k=1;
while ($x<200){
$k=$k+1;
$x=$x+$x*$p/100;
}
echo $k.'<br>';
echo $x;
?>