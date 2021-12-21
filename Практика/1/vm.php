<form name='one' method='post'
Action='vm.php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php
$n=$_POST['n'];
$a1=1;
  $a2=2;
  $ak=($a1+2*$a2)/3;
  $k=3;
while (abs($ak-$a2) < $n) {
$a1=$a2;
  $a2=$ak;	
  $ak=($a1+2*$a2)/3;
  $k++;
}
echo $k.' '. $a2. ' '. $ak;
?>