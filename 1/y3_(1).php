<form name='one' method='post'
Action='y3_(1).php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
for ($a=$a;$a<=$b;$a++){
	$n=0;
do 	{
$n++;
echo $n;	
}
while ($a%7==1 or $a%7==2 or $a%7==5) 
} 
?>    