<form name='one' method='post'
Action='z5(118).php'>
</form>
<?php
$i=1;
$a=0;
do {
$a=$a+1/$i;
$i=$i+2;
}
while ($i<=9999);
$i=2;
$b=0;
do {
$b=$b+1/$i;
$i=$i+2;
}
while ($i<=10000);
$c=$a-$b;
echo $c;
?>