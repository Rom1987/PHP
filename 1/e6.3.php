<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
k:<input type="text" name="k"> 
l:<input type="text" name="l"> 
<input type="submit"> 
</form> 
<?php 
$n=$_GET['n']; 
$k=$_GET['k']; 
$l=$_GET['l']; 
for($i=1;$i<=$n;$i++){ 
$a[$i]=rand(0,10);
echo $a[$i].' ';
}
$i=$k+1;
while ($i<$k+($l-$k)/2){
	if ($i<>($l-$i+$k)){
		$a[$i]=$a[$i]+$a[$l-$i+$k];
		$a[$l-$i+$k]=$a[$i]-$a[$l-$i+$k];
		$a[$i]=$a[$i]-$a[$l-$i+$k];
		$i=$i+1;
	}
	else {$i=$i+1;}
}
echo'<br>';
for($i=1;$i<=$n;$i++){ 
echo $a[$i].' ';
}
?>