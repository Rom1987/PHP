<form name='one' method='post'
action='z9(2).php'>
</form>
<?php 
/*Дана строка символов. Удалить из данной последовательности все группы
букв abcd.*/
$s='Such parts of the body as head and back are particularly important for us.
 Brain (our head) is responsible for all our body. In other words, 
 it controls both our physical organs and psychological state.';
$a='a';
$b='b';
$c='c';
$d='d';
$del='';
$a=str_replace ($a,$del,$s);
$a=str_replace ($b,$del,$a);
$a=str_replace ($c,$del,$a);
$a=str_replace ($d,$del,$a);
print_r ($a);
?>