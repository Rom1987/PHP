<form name='one' method='post'
Action='z4(case9).php'>
<input type='text' name='d'>
<input type='text' name='m'>
<input type='submit'>
</form>
<?php
$d=$_POST['d'];
$m=$_POST['m'];
switch ($m) {
Case 1:
Case 3:
Case 5:
Case 7:
Case 8:
Case 10:
  If ($d==31) {
$d=0;
$m=$m+1; } 
       else {break;
                } 
Case 12: if ($d==31) {
$d=0;
$m=1;}   
else {break;} 
case 4:  
case 6:
case 9:
case 11:
  If ($d==30) {
$d=0;
$m=$m+1;   } else {break;} 
case 2: 
 If ($d==28) {
$d=0;
$m=$m+1;} else {break;} 
 }
 $x=$d+1;
echo $x. '<br>'.$m;
?>