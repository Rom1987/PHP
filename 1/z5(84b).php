<form name='one' method='post'
Action='z5(84b).php'>
<input type='text' name='n'>
<input type='text' name='x'>
<input type='submit'>
</form>
<?php
$n=$_POST['n'];
$x=$_POST['x'];
/*даны натуральное n, действительное x. 
/*Вычислить: sin x+sin x^2+...+sin x^n. 
*/	
$su=0;
$s=1;
For ($n=1;$n<$x; $n++)
{
$s=$s*sin($x);
$su=$su+$s;
}
Echo $su;
?>