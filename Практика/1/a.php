<form name='one' method='post'
action='a.php'>

<input type="submit">
</form>
<?php
for ($a==1; $a <= 100; $a++) {
$s=(3*$a+4)/($a*$a-5*$a-9);
echo ('s='.$s. "<br>");
}
?>