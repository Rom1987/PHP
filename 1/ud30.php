<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
</form>  
<?php
for ($i=1;$i<=3;$i++){
    $A[$i]=rand(1,50);
    echo $A[$i]."<br>";
}
function first ($n)
{
   if ($i%2==0) {
return $A[$i]=0;
   }
   else {
       return $A[$i];
   }
}
echo first ($A[1])."<br>";
echo first ($A[2])."<br>";
echo first ($A[3]);
?>