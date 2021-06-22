<form method='get'>
Введите дату:<input type="date" name="d"/>
<input type="submit" value="Отправить"/>
</form>
<?php
$d=$_GET['d'];
echo date('h:i:s d.m.Y', strtotime($d));
/* Сделайте форму, которая спрашивает дату-время в формате
'2025-12-31T12:13:59'. С помощью функции strtotime
и функции date преобразуйте ее в формат '12:13:59 31.12.2025'. */
?>