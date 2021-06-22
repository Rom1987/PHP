<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 

 
</form> 
<?php 
/*Написать программу вычисления суммы 
факториалов всех четных чисел от 2 до 100, 
используя подпрограмму вычисления факториала.
*/  
function first($n){

  $f=1;

    for ($i = 1; $i <= $n; $i++) {
        $f *= $i;
    }
return $f;
  }
  $s=0;
  for ($g = 2; $g <= 100; $g++) {
    if ($g%2==0){
    $s+=first ($g);  
    }
   } 
Echo $s;
?>
