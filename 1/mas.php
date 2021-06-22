<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
</form> 
<?php 
$mas= array(array (1,2,3,4),
			array (5,6,7,12),
			array (4,-3,2,8),
			array (7,3,0,10));
For ($i=0;$i<4;$i++){
	For ($j=0;$j<4;$j++){
if ($i<=$j){
$B[]=$mas[$i][$j];}
}
}
print_r($B);
sort($B);$k=0;
For ($i=0;$i<4;$i++){
	For ($j=0;$j<4;$j++){
	if ($i<=$j){$mas[$i][$j]=$B[$k];$k++;}}
	print($mas[$i]);
echo '<br>';}
?>		