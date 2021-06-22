<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <form action="" method="GET">
	<input type="submit">
</form>
<?php
/*Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки*/
	function input($name)
	{
		if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
			$value = 'checked';
		} else {
			$value = '';
		}
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
	}
	echo input('checkbox');
?>
</center>