<form name='one' method='POST'
Action='e5.php'>
N:<input type="text" name="N">
a:<input type="text" name="a"> 
<input type="submit"> 
</form> 
 
<?php 
$N=$_POST['N']; 
$a=$_POST['a']; 
switch ($N){ 
 case 1: 
 echo $a; break;
 case 2:
 $R1=$a*sqrt(3)/6; 
 echo $R1;break;
 case 3:  $R2=2*$R1;  
 echo $R2;break;
 case 4:
  $S=$a*$a*sqrt(3)/4; 
 echo $S;
 break; 
} 
?>