
<?php 

function F($x){
  return abs(9 - ($x - 3) * ($x - 3)) - 2;
}

  $a = -10; $b = 10;
  $M = $a; $R = F($a);
  for ($t = $a; $t <= $b; $t++){
    if (F($t + 1) <= $R){
      $M = $t;
      $R = F($t);
    }
  $otv =   $M - $R;
  echo $otv;
}

    ?>