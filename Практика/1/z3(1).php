<form name='one' method='post'
action='z3(1).php'>
<input type="text" name="a">
<input type="submit">
</form>
<?php
$a=$_POST['a'];
$s=0;
for ($n=1 ; $n <=$a ; $n++) {
$s=$s+1/$n;
echo ('s='.$s."<br>");
}
?>
    