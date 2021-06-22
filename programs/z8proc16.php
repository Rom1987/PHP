<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
a:<input type="text" name="a"> 
b:<input type="text" name="b">
<input type="submit"> 
</form> 
<?php 
/*Proc16. Описать функцию Sign(X) целого типа, возвращающую для веще-
ственного числа X следующие значения:
−1, если X < 0; 0, если X = 0; 1, если X > 0.
С помощью этой функции найти значение выражения Sign(A) + Sign(B)
для данных вещественных чисел A и B.
*/  
  $a=$_GET['a']; 
  $b=$_GET['b']; 
function Sign($x){
 if($x<0){
  return $x=-1;
 }
 if ($x==0){
   return $x=0;
 }
 else {
 return  $x=1;
 }
  } 
echo Sign($a)+Sign($b);
?>