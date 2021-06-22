<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="GET">
	<p>html<input type="checkbox" name="lang[]" value="html"></p>
	<p>css<input type="checkbox" name="lang[]" value="css"></p>
	<p>php<input type="checkbox" name="lang[]" value="php"></p>
	<p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
	<input type="submit">
</form>

<?php
/*Спросите у пользователя, какие из языков он знает: html, css, php, javascript.
Выведите на экран те языки, которые знает пользователь.*/
	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(', ', $_REQUEST['lang']);
	}
	else {
		echo "Вы не знаете этих языков";
	}
?>
</center>