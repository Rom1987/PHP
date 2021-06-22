<form name='one' method='post'
Action='z_2(2).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='text' name='c'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
If ($a>0) 
{
$x=$a*$a;
echo ('x='.$x.'<br>');
}
else
{
echo ('a='.$a.'<br>');
}
If ($b>0) 
{
$y=$b*$b;
echo ('y='.$y.'<br>');
}
else
{
echo ('b='.$b.'<br>');
}
If ($c>0) 
{
$z=$c*$c;
echo ('z='.$z.'<br>');
}
else
{
echo ('c='.$c.'<br>');
}
?>