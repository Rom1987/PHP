<form name='one' method='post'
Action='cer.php'>
<input type='text' name='a'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$s=0;
for ($n=0;$n<=$a;$n++){
$s=$s+($a+2)*($a+2);
}
$s=$n*$n+$s;
echo ('S='.$s.'<br>');
?>
