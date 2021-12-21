<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
x:<input type="text" name="x"> 
n:<input type="text" name="n"> 
<input type="submit"> 
</form> 
<?php 
$x=$_GET['x']; 
$n=$_GET['n']; 
$p=1;
for ($k=1;$k<=$n;$k++){
$p=$p*(($k/$k+1)-pow(cos(abs($x)),$k));
echo $p.'<br>';
}
?>