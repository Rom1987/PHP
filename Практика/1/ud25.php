<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
a:<input type="text" name="a"> 
b:<input type="text" name="b"> 
c:<input type="text" name="c"> 
<input type="submit"> 
</form>  
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
function first ($n)
{
   if ($n>0) {
return $r=$n-0.5;
   }
   if ($n<0){
       return $n;
   }
}
echo first ($a)."<br>";
echo first ($b)."<br>";
echo first ($c);
?>