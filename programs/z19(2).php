<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="GET">
	<p>Ваш возраст?</p>
	<p>Менее 20 лет<input type="radio" name="php"  value="0"></p>
	<p>20-25<input type="radio" name="php" value="1"></p>
    <p>26-30<input type="radio" name="php"  value="2"></p>
	<p>Более 30<input type="radio" name="php" value="3"></p>
	<input type="submit">
</form>

<?php
/*Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты
ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.*/
	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
		echo 'Вам менее 20 лет';
	}

	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
		echo 'Вам 20-25 лет';
    }
    if (isset($_REQUEST['php']) and $_REQUEST['php'] == 2) {
		echo 'Вам 26-30 лет';
	}

	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 3) {
		echo 'Вам более 30 лет';
	}
?>
</center>