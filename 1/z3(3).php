<form name='one' method='post'
Action='z3(3).php'>
<input type='text' name='a'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$s=0;
for ($n=0;$n<=$a;$n++){
$s=$s+($a+$n)*($a+$n);
echo ('S='.$s.'<br>');
}
?>
