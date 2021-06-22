<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<?php
/*Сделайте функцию, которая создает чекбокс. Если чекбокс не отмечен - функция
должна отправлять 0 (то есть нужно сделать hidden инпут), если отмечен -
 1.*/
	function input($name)
	{
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1">';
	}
	echo input('checkbox');
?>
</center>