<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
|x|<1:<input type="text" name="x"> 
a:<input type="text" name="a"> 
e>0:<input type="text" name="e1"> 
<input type="text" name="e2">
<input type="text" name="e3">
<input type="text" name="e4">
<input type="text" name="e5">
<input type="text" name="e6">     
<input type="submit"> 
</form> 
<?php 
/*Proc45. Описать функцию Power4(x, a, ε) вещественного типа (параметры x,
a, ε — вещественные, |x| < 1; a, ε > 0), находящую приближенное значение
функции (1 + x)^a:
(1 + x)^a = 1 + a·x + a·(a−1)·x^2/(2!) + . . . + a·(a−1)·. . .·(a−n+1)·x^n/(n!) + . . . .
В сумме учитывать все слагаемые, модуль которых больше ε. С помощью
Power4 найти приближенное значение (1 + x)^a для данных x и a при шести
данных ε.*/  
  $x=$_GET['x']; 
  $a=$_GET['a']; 
  $e1=$_GET['e1']; 
  $e2=$_GET['e2'];
  $e3=$_GET['e3'];
  $e4=$_GET['e4'];
  $e5=$_GET['e5'];
  $e6=$_GET['e6'];
  $e=array ($e1,$e2,$e3,$e4,$e5,$e6);
  function first($f){
 $f1=1;
    for ($i = 1; $i <= $f; $i++) {
        $f1*= $i;
    }
	return $f1;
  } 
function power4($a,$x,$e){
	    
for ($j=0; $j <= 5; $j++) {
	$s=0; 
	$n=1;
	for ($i = 1; $i <= $n; $i++) { 
	echo $h=abs(($a-$n+1)*pow($x,$n)/first ($n));
if ($h>$e[$j]){
	
	echo $s+=$h;
	echo $n++;
	echo $s;
	}
	
                               } 
		                          } 
                        }
  
  
  
  
if (abs ($x)<1 and $e>0){
	
	    power4($a,$x,$e);
		
	}					
else {'не выполнено из условий |x|<1,e>0';}						
 ?>