<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
<input type="submit"> 
</form>  
<?php
$n=$_GET['n'];
function is_prime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return 'не простое' ;
        }
    }
    return 'простое';
}
echo is_prime ($n);
?>
