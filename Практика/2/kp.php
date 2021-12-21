<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
</form> 
<?php 
$s=0;
$n=20;
while ($s+$n<=100){
    $s+=25;
    $n-=5;
}
echo $s;
?>