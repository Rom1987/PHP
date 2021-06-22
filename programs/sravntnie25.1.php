<form method='GET'>
date1:<input type="date" name="date1"/>
date2:<input type="date" name="date2"/>
<input type="submit" value="Отправить"/>
</form>
<?php
if (!empty($_GET['date1']) and !empty($_GET['date2'])) {
	$date1 = $_REQUEST['date1'];
	$date2 = $_REQUEST['date2'];
	
	if ($date1 > $date2) {
		echo $date1;
		}
		elseif ($date1 == $date2) {
		echo "равны";}
			else {
				echo $date2;
				}	
}
/* Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. 
Первую дату запишите в переменную $date1, а вторую в $date2. 
Сравните, какая из введенных дат больше. Выведите ее на экран.  */
?>
