<form name='one' method='post'
action='new 1.php'>
<input type='submit'>
</form>
<?php

$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket); 
?>