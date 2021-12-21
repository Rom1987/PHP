<form name='one' method="post" 
action="e7.1.php" > 
n:<input type="text" name="n"> 
<input type="submit"> 
</form> 
<?php 
$n=$_POST['n']; 
for ($i=1;$i<=$n;$i++) 
{echo $i; 
} 
echo "<br>"; 
for ($i=1;$i<=$n-1;$i++) 
{ 
echo $i; 
}
?>
<form name='one' method='post'
action='e7.1.php'>
<input type='text' name='n'>
<input type='submit'>
</form>
<?php 
/*Использую вложенные циклы и оператор вывода выведите на экране
монитора рисунок:
A B C D E
  B C D E
    C D E
      D E
        E
Значение n – количество строк в рисунке, задается с клавиатуры.*/
$n=$_POST['n'];
$a=array(1,2,3,4,5,6);
For ($i=5;$i>=$n;$i--){
foreach($a as $v)
{ 
	echo $v.' ';
	unset ($a[$i]);
}echo '<br>';}
?>