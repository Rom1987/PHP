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

	

$i=0;
$Rez=0;
$TempRez=8;
$TempRez2=1;	
while (abs ($TempRez)>$e){
	$Rez+=$TempRez;
	$i=$i+1;
	 $TempRez=abs(($a-$i+1)*pow($x,$i)/first ($i));

	}
	
	return $Rez;
	}
	
 echo 'x='.$x;
for ($j=0; $j <= 5; $j++) {
 $c=power4($a,$x,$e[$j]);
	 echo $c ."-".$e[$j] ."<br>";	                          
}               
  
  
  // if ($e > 0 and $a > 0){
	    
	//}					
//else {'не выполнено из условий |x|<1,e>0';}	
  ?>
					
