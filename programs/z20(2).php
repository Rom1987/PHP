<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="get">
<p>Какие языки вы знаете?</p>
    <select name="lang[]" multiple id="">
        <option value="html">html</option>
        <option value="css">css</option>
        <option value="php">php</option>
        <option value="js">js</option>
    </select>
    <input type="submit">
</form>
<?php
/*Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html,
css, php, javascript. Выведите на экран те языки, которые знает
пользователь.*/
if (isset($_REQUEST['lang'])) {
    echo "Вы знаете ".implode(', ', $_REQUEST['lang']);
}
?>
</center>