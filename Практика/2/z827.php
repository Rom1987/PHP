<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
a:<input type="text" name="a"> 
b:<input type="text" name="b"> 
c:<input type="text" name="c"> 
<input type="submit"> 
</form> 
<?php 
/*27. В векторах a, b, и с заменить компоненты в обратном порядке.*/  
  $a=$_GET['a']; 
  $b=$_GET['b']; 
  $c=$_GET['c']; 
  $f=array ($a,$b,$c);
function first($m){
	$ob=$m[0];
	$m[0]=$m[2];
	$m[2]=$ob;
return print_r ($m);
  } 
 first($f); 
?>