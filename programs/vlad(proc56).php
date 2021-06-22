<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
xa:<input type="text" name="x1"> 
ya:<input type="text" name="y1"> 
xb:<input type="text" name="x2">
yb:<input type="text" name="y2"> 
xc:<input type="text" name="x3"> 
yc:<input type="text" name="y3">
xd:<input type="text" name="x4"> 
yd:<input type="text" name="y4"> 
<input type="submit"> 
</form> 
<?php 
$x1=$_GET['x1']; 
$y1=$_GET['y1']; 
$x2=$_GET['x2']; 
$y2=$_GET['y2']; 
$x3=$_GET['x3']; 
$y3=$_GET['y3']; 
$x4=$_GET['x4']; 
$y4=$_GET['y4']; 
function Leng($x1,$y1,$x2,$y2){
  return $l=sqrt(($x1-$x2)*($x1-$x2)+($y1-$y2)*($y1-$y2));
}
echo "|AB|=".Leng ($x1,$y1,$x2,$y2)."<br>";
echo "|AC|=".Leng ($x1,$y1,$x3,$y3)."<br>";
echo "|AD|=".Leng ($x1,$y1,$x4,$y4);
?>
