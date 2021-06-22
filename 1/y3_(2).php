<form name='one' method='post'
Action='y3_(2).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
while ($a>=$b) 
{
$a-=$b;
echo $a;
}
?>    