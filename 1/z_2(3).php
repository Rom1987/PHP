<form name='one' method='post'
Action='z_2(3).php'>
<input type='text' name='x1'>
<input type='text' name='y1'>
<input type='text' name='x2'>
<input type='text' name='y2'>
<input type='submit'>
</form>
<?php
$x1=$_POST['x1'];
$y1=$_POST['y1'];
$x2=$_POST['x2'];
$y2=$_POST['y2'];
$dx=abs($x1-$x2);
$dy=abs($y1-$y2);
If($x1==$x2 or $y1==$y2 or $dy==$dx) 
{
echo ('true');
}
else{
echo ('false');
}
?>