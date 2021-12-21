<form name="authForm" method="post" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
<input type="submit"> 
</form> 
<?php 
$n=$_POST['n']; 
for ($i=1;$i<=$n;$i++) 
{echo $i; 
} 
for ($i=1;$i<=$n;$i++){ 
echo "<br>"; 
for ($i=1;$i<=$n-1;$i++) 
{ 
echo $i; 
}} 
?>