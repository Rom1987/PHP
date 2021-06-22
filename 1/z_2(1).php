<form name='one' method='post'
Action='z_2(1).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
If ($a!=$b) 
{
$x=$a+$b;
$a=$x;
$b=$x;
echo ('a='.$a.'<br>');
echo ('b='.$b.'<br>');
}
else{
$a=0;
$b=0;
echo ('a='.$a.'<br>');
echo ('b='.$b.'<br>');
}
?>