<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="GET">
	<p>Вы знаете PHP?</p>
	<p>да<input type="radio" name="php"  value="1"></p>
	<p>нет<input type="radio" name="php" value="0"></p>
	<input type="submit">
</form>

<?php
/*Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите
результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже
отмечен.*/
	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
		echo 'Вы не знаете PHP';
	}

	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
		echo 'Вы знаете PHP!';
	}
?>
</center>