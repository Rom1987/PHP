<form name='one' method='post'
action='ud6_2.php'>
</form>
<?php 
$a = array();
for ($i = 0; $i < 20; $i++) {
    $a[$i] =rand(0,10000);
}
$max = -1;
for ($i = 0; $i < 20; $i++) {
    $n = $a[$i];
    if ( $n > 9 && $n < 100 && ($n % 3!= 0) && $n > $max) {
        $max = $n;
    }
}

if ($max > 0) {
    echo $max;
} else {
    echo 'не найдено';
}
?>