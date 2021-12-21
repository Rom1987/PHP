<?php
$a=$_GET['a'];
$b=$_GET['b'];
if ($a>$b)
{echo $x=$a*$a-$b;}
elseif ($a=$b){echo $x=-$a;}
elseif($a<$b) {echo $x=($a*$b-1)/$b;}
?>