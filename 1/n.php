<form name='one' method='post'
Action='n.php'>
<input type='text' name='a'>
<input type='submit'>
</form>
<?php
$a=$_POST['a'];
$s=1;
$k=1;
while ($s<$a){
$s+=1/$k;
$k++;	
}
echo $s.'<br>'.$k;
?>
    