<center>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<form action="" method="get">
<p>Ваш возраст?</p>
    <select name="age"  id="">
        <option value="1">< 20</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">> 30</option>
    </select>
    <input type="submit">
</form>
<?php
/*Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте
такими: менее 20 лет, 20-25, 26-30, более 30.*/
if (isset($_REQUEST['age'])) {
    switch ($_REQUEST['age']) {
        case 1:
            echo 'Вам менее 20 лет';
            break;
        case 2:
            echo 'Вам 20-25 лет';
            break;
        case 3:
            echo 'Вам 26-30 лет';
            break;
        case 4:
            echo 'Вам более 30 лет';
            break;
    }
}
?>
</center>