<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
k:<input type="text" name="k"> 
L:<input type="text" name="L"> 
<input type="submit"> 
</form> 
<?php 
$n=$_GET['n']; 
$k=$_GET['k']-1; 
$L=$_GET['L']-1; 
for($i=0;$i<$n;$i++){ 
$mas[$i]=rand(0,10);} 
print_r ($mas); 
$sum=0; 
for ($i=0;$i<$n;$i++){ 
 if (($i<$k)||($L<$i)){ 
 for ($i=count($mas[$i]);$i<=0;$i--){ 
  unset ($mas[$i]); 
  } 
  } 
  } 
?>