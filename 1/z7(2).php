<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
</form> 
<?php 
$a=array (1,2,3);
$b=array (array(23000,34000,16000),
		  array(30000,25000,24000),
		  array(1000,7000,6500));
		  echo '<table border=1>';
echo '<tr>';
echo '<td rowspan=2>'.Работник.'</td>';
echo '<td colspan=3>'.Месяц.'</td>';
echo '</tr>';
echo '<tr>';
for ($i=0;$i<=2;$i++){
	echo '<td>'.$a[$i].'</td>';
	}
echo '</tr>';
$n=1;
for($i=0;$i<=2;$i++){
	echo '<tr>';
echo '<td>'.$n.'</td>';
for ($j=0;$j<=2;$j++){
	echo '<td>'.$b[$i][$j].'</td>';
}
echo '</tr>';
$n++;
}
echo '</table>';
$n=1;
$s=0;
$r=0;
$y=0;
$j=0;
for ($i=0;$i<=2;$i++){
	$s+=$b[$i][$j];
}
echo $n.':'.$s.'<br>';
$n++;
$j++;
for ($i=0;$i<=2;$i++){
	$r+=$b[$i][$j];
}
echo $n.':'.$r.'<br>';
$n++;
$j++;
for ($i=0;$i<=2;$i++){
	$y+=$b[$i][$j];
}
echo $n.':'.$y.'<br>';
$n++;
$max=max($s,$r,$y);
echo 'max='.$max;
?>