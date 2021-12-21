<form name='one' method='post'
Action='z3_(2).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='text' name='c'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$x=$c;
$y=$c;
$n=0;
do {
$n=$n+1;
$x=$x+$c;
}
while ($x<=$a);
$x=$n;
$n=0;
do {
$n=$n+$x;
$y=$y+$c;
}
while ($y<=$b);
echo $n;
?>