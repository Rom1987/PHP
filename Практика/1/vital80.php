<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
x:<input type="text" name="x"> 
<input type="submit"> 
</form> 
<?php 
$x=$_GET['x']; 
$a=$x;
$s=$a;
for ($i=1;$i<=6;$i++){
$a= $a * (-1) * $x * $x / (2 * $i) / (2 * $i + 1);
$s=$s+$a;
echo $s.'<br>';
}
?>