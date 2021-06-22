<form name='one' method='post'
Action='z4(case8).php'>
<input type='text' name='d'>
<input type='text' name='m'>
<input type='submit'>
</form>
<?php
$d=$_POST['d'];
$m=$_POST['m'];
$x=$d-1;
if ($x==0){
switch ($m) {
case 1:echo ('31.12');
break;
case 2:echo '31.01';
break;
case 3:echo '28.02';break;
case 4:echo '31.03';break;
case 5:echo '30.04';break;
case 6:echo '31.05';break;
case 7:echo '30.06';break;
case 8:echo '31.07';break;
case 9:echo '31.08';break;
case 10:echo '30.09';break;
case 11:echo '31.10';break;
case 12:echo '30.11';	
break;
}}
else {echo $x.'.';
echo $m.'<br>';}
?>