 <form name='one' method='post'
action='ud7.php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php 
$n=$_POST['n'];
$a=array(1,2,3,4,5,6);
for ($i=0;$i<=$n;$i++){
for($j=0;$j<=5; $j++)
{   
  echo $a[$j].' ';
  $a[$j]=$a[$j]+1;
} 
echo '<br>';
}
?>