<form name='one' method='post'
Action='z6(1).php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php
/*Array16°.  Дан массив A размера N. Вывести его элементы в следующем порядке:
A1, AN, A2, AN−1, A3, AN−2, ….*/
$n=$_POST['n'];
for ($i=1;$i<=$n;$i++){
$a[$i]=rand (0,100);}
for ($i=1;$i<=$n;$i++){
     echo $a[$i].' '.$a[$n].' ';
$n--;	 
}
?>