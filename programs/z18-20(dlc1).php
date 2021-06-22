<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<?php
/*Сделайте функцию, которая создает обычный текстовый инпут. Функция должна
иметь следующие параметры: type, name, value.*/
	function input($type, $name, $value)
	{
		return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
	}
	echo input('text', 'input', '1');
?>
</center>
