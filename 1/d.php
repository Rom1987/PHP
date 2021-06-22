<form name='one' method='post'
Action='d.php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
If ($a<>0) {$x=-$b/$a;
echo $x;}
Else {echo 'ошибка'; }
?>