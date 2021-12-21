<?php
$j = 0;
for ($k = 1;$k<= 9; $k++)  
{
  if ($A[$k] <= $A[0])    
    {     
      $A[0] = $A[$k];     
      $j += $k;    
    }
}
echo $k;
?>
