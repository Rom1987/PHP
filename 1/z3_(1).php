<form name='one' method='post'
Action='z3_(1).php'>
<input type='text' name='a'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$s=0;
$n=0;
do {
$s=$s+($a+$n)*($a+$n);
$n++;
echo ('S='.$s.'<br>');
} while ($n<=$a);
?>