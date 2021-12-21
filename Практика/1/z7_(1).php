<form name='one' method='post'
action='z7_(1).php'>
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
$a=array('A','B','C','D','E');
For ($i=0;$i<=$n;$i++){
	for ($l=0;$l<$i*3;$l++){ echo "&nbsp";}
for($j=$i;$j<=4; $j++)
{   
	echo $a[$j].' ';
} 
echo '<br>';
}
?>
<form name='one' method='post'
action='z7_(1).php'>
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
$a=array(array('A','B','C','D','E'),
array('&nbsp;'.'&nbsp;'.'&nbsp;','B','C','D','E'),
array('&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;','C','D','E'),
array('&nbsp;'.'&nbsp;','&nbsp;'.'&nbsp;','&nbsp;'.'&nbsp;'.'&nbsp;','D','E'),
array('&nbsp;'.'&nbsp;','&nbsp;'.'&nbsp;','&nbsp;'.'&nbsp;','&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;','E'),
);
$k=$n;
For ($i=0;$i<=$n;$i++){
	echo '<br>';
	For ($j=0;$j<=$k;$j++){
		echo $a[$i][$j].'&nbsp;';	
}
}
?>
