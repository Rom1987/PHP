<form name='one' method='post'
Action='e4.php'>
<input type='text' name='a'>
<input type='text' name='b'>
<input type='submit'>
</form> 
<?php 
$a=$_POST['a']; 
$b=$_POST['b']; 
do { 
 if ($a>$b){ 
  $a=$a-$b;} 
  else { 
   $b=$b-$a; 
  } 
 }  
 while ($a<>$b); 
echo $a; 
?>