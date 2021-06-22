<form name='one' method='post'
action='z3(2).php'>
<input type="submit">
</form>
<?php
$a=0.01;
for ($k=2; $k <= 10; $k++) {
$a=sin($k+$a);
echo ('a'.$k.'='.$a."<br>");
}
?>