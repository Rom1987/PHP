<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="POST">
	<p>Ваше имя <input type="text" name="lang1[]" placeholder="Имя"></p>
	<p><input type="checkbox" name="lang[]" value=""></p>
	<input type="submit">
</form>

<?php
/*Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он
отмечен, то поприветствуйте пользователя, если не отмечен - попрощайтесь с
пользователем.*/
	if(isset($_REQUEST['lang']))
	{
		echo 'Привет '. implode(',', $_REQUEST['lang1']);
    }
    else {
        echo 'Пока '. implode(',', $_REQUEST['lang1']);
    }
?>
</center>