<html>
<head>
<title>Товары</title>

</head>
<body>

<TABLE BORDER="1" WIDTH=100% BGCOLOR="#99CCCC">
<TR BGCOLOR="#CCCCFF" ALIGN="CENTER">
<TD>№</TD>
<TD>Название</TD>
<TD>Стоимость</TD>
<TD>Тип</TD>
<td> кнопка</td>
</TR>
<td>1</td>
<td>АКВАДЕТРИМ</td>
<td>192.00 руб.</td>
<td>ВИТАМИНЫ</td>
<td>
<INPUT name="Choice1" type="checkbox"></td>
</tr>
<tr>
<td>2</td>
<td>ФЕМИБИОН НАТАЛКЕР</td>
<td>1027.00 руб.</td>
<td>ВИТАМИНЫ</td>
<td>
<INPUT name="Choice2" type="checkbox"></td>
</tr>
<tr>
<td>3</td>
<td>АСКОРУТИН</td>
<td>47.00 руб.</td>
<td>ВИТАМИНЫ</td>
<td>
<INPUT name="Choice3" type="checkbox"></td>
</tr>
<tr>
<td>4</td>
<td>АСКОРБИНОВАЯ К-ТА</td>
<td>24.99 руб.</td>
<td>ВИТАМИНЫ</td>
<td>
<INPUT name="Choice4" type="checkbox"></td>
</tr>
<tr>
<td>5</td>
<td>АЕВИТ N30 КАПС</td>
<td>100.00 руб.</td>
<td>ВИТАМИНЫ</td>
<td>
<INPUT name="Choice5" type="checkbox" ></td>
</tr>

</TABLE>


</body>
</html>
 
<html>
<form>
<body>
<FORM method="GET" action="">
Имя:
<INPUT name="FirstName" type="text">
Фамилия:
<INPUT name="LastName" type="text">
Название:
<INPUT name="Title" type="text">
Кол-во:
<INPUT name="Kol-vo" type="text" >
Цена:
<INPUT name="Price" type="text" >
<?
include('zakaz.txt');
?>
<INPUT type="submit" name="u" value="Отправить">
</form>
<?php
$w=$_GET['LastName'];
$e=$_GET['Title'];
$f=$_GET['FirstName'];
$k=$_GET['Kol-vo'];
$p=$_GET['Price'];
$m1=$_GET['Choice1'];
$m2=$_GET['Choice2'];
$m3=$_GET['Choice3'];
$m4=$_GET['Choice4'];
$m5=$_GET['Choice5'];
if ($m1==on)
{ $m1="АКВАДЕТРИМ
192.00 руб.
ВИТАМИНЫ";}
else {$m2='';}
if ($m2==on)
{ $m2=" АКВАДЕТРИМ
192.00 руб.
ВИТАМИНЫ";}
else {$m2='';}
if ($m3==on)
{ $m3="АКВАДЕТРИМ
192.00 руб.
ВИТАМИНЫ";}
else {$m3='';}
if ($m4==on)
{$m4="АКВАДЕТРИМ
192.00 руб.
ВИТАМИНЫ";}
else {$m4='';}
if ($m5==on)
{$m5="АКВАДЕТРИМ
192.00 руб.
ВИТАМИНЫ";}
else {$m5='';}
$h = fopen("client.txt","a");
$text = "$w $e $f $k $p $m1 $m2 $m3 $m4 $m5";
if (fwrite($h,$text))
{
echo 'Запись прошла успешно'.'<br>';
}
else
{
echo "Произошла ошибка при записи данных";
}
?>
</html>





/*2. Создать текстовый файл с информацией о товарах (название, цена, фирма), в котором отдельная строка соответствует одному товару.
Создать скрипт, который выводит на страницу прайс товаров с возможностью заказа товара по нажатию кнопки возле соответствующей строки.
При заказе товара, обязательно пользователь вводит свое имя и требуемое количество товара.
Список заказов хранить в другом файле, например “zakazi.txt”.*/
?>
<BR>
<BR>
<INPUT type="submit" value="Отправить">
</FORM>