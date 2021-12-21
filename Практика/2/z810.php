<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
m:<input type="text" name="m"> 
<input type="submit"> 
</form> 
<?php 
/*10. Определить число сочетаний из n по m 
(n>m), по формуле С=n!/m!(n-m).
*/  
  $n=$_GET['n']; 
  $m=$_GET['m']; 
  echo 'n>m'.'<br>';
  if ($n>$m){
function first($f){
 $f1=1;
    for ($i = 1; $i <= $f; $i++) {
        $f1*= $i;
    }
	return $f1;
  } 
  $c=first($n)/first ($m)*($n-$m);
  echo $c;
  }
  else {echo 'n>m !!!';}
?>