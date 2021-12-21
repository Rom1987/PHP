<form name='one' method='post'
Action='z.php'>
<input type='text' name='a'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$c=$a%16;
echo $c;
?>