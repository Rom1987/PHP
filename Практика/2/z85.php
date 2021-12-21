<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
x1:<input type="text" name="x1"> 
y1:<input type="text" name="y1"> 
x2:<input type="text" name="x2">
y2:<input type="text" name="y2"> 
x3:<input type="text" name="x3"> 
y3:<input type="text" name="y3">
x4:<input type="text" name="x4"> 
y4:<input type="text" name="y4"> 
x5:<input type="text" name="x5">
y5:<input type="text" name="y5"> 
<input type="submit"> 
</form> 
<?php 
/*5.Пятиугольник задан координатами своих вершин. 
Найти его площадь, используя для вычисления площадей 
треугольников формулу Герона:
S=p(p-a)(p-b)(p-c), где p=(a+b+c)/2.
*/  
$x1=$_GET['x1']; 
$y1=$_GET['y1']; 
$x=$_GET['x2']; 
$y2=$_GET['y2']; 
$x3=$_GET['x3']; 
$y3=$_GET['y3']; 
$x4=$_GET['x4']; 
$y4=$_GET['y4']; 
$x5=$_GET['x5']; 
$y5=$_GET['y5'];
function l($x1,$y1,$x2,$y2){
  return $l=sqrt(($x1-$x2)*($x1-$x2)+($y1-$y2)*($y1-$y2));
}
 function s0($x1,$y1,$x2,$y2,$x3,$y3){ 

 $l1=l($x1,$y1,$x2,$y2);
  $l2=l($x2,$y2,$x3,$y3);
  $l3=l($x3,$y3,$x1,$y1);
  $p=($l1+$l2+$l3)/2;
 return $s0=$p*($p-$l1)*($p-$l2)*($p-$l3);
}
$s=s0($x1,$y1,$x2,$y2,$x3,$y3)+s0($x1,$y1,$x3,$y3,$x4,$y4)+s0($x1,$y1,$x4,$y4,$x5,$y5);
echo $s;
?>