<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
x1:<input type="text" name="x1"> 
y1:<input type="text" name="y1"> 
x2:<input type="text" name="x2">
y2:<input type="text" name="y2"> 
<input type="submit"> 
</form> 
<?php 
$x1=$_GET['x1']; 
$y1=$_GET['y1']; 
$x2=$_GET['x2']; 
$y2=$_GET['y2'];  
function RectPS($x1,$y1,$x2,$y2,&$P,&$S){
    $a=abs($x2-$x1);
    $b=abs($y2-$y1);
echo $P=($a+$b)*2; 
echo "<br>";
echo $S=$a*$b;
}
RectPS($x1,$y1,$x2,$y2,$P,$S);
?>