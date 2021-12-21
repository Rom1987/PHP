<form name='one' method='post'
Action='ud.php'>
<input type='text' name='n'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form>
<?php
$n=$_POST['n'];
$a=$_POST['a'];
$b=$_POST['b'];
$c[1]=$a;
$c[2]=$b;
$s=$a+$b;
Echo $c[1].' '. $c[2]. ' ';
for ($i=3;$i<=$n;$i++){
	$c[$i]=$s;
$s=$s+$c[$i];
echo  $c[$i]. ' ' ;
} 
?>