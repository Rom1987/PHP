<form name='one' method='post'
Action='vlad78.php'>
<input type='text' name='a'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$n=$_POST['n'];
$s=0;
$t=1;
for ($i=0;$i<=$n;$i++){
	$t=$t*($a+$i); 
$s+=1/$t;	

}
Echo $s;
?>    