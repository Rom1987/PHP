<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
n:<input type="text" name="n"> 
<input type="submit"> 
</form>  
<?php
/*34. 34. ��������� ������� ������������ ������� �����.*/
$n=$_GET['n'];
function first ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return '�� �������' ;
        }
    }
    return '�������';
}
echo first ($n);
?>