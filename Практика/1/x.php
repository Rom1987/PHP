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
$c[$i]=0;
for ($i=3;$i<=$n;$i++){	
$c[1]=$a;
$c[2]=$b;
$c[$i]=$c[$i]+$c[1]+$c[2];
echo 'array'. $c[1]. $c[2]. $c[$i];
} 
?>