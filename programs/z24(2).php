<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php


$link = mysqli_connect("localhost","root","","polzovatel");
mysqli_query($link, "SET NAMES 'utf-8'");

$form = '
<form  action=""  method="post">
<label for="name"> Введи имя</label> <input name="name" oncheck="color_();" type="text" placeholder="имя"/>  <br> 
<label for="password"> Введи пароль</label> <input name="password" type="password" placeholder="пароль"/> <br>
<input  type="submit" name="unpack" value="Авторизоваться"/>
  </form>
';

if(!empty($_POST['name']) and !empty($_POST['password'])) {

$name = $_POST['name'];
$password = md5($_POST['password']);

$query = "SELECT * FROM polzovatel WHERE name = '$name' AND password = '$password'";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($res);

if(!empty($user)) {
    echo "Вы прошли авторизацию";
} else {
echo $form."Неверно введено имя или пароль";
}
} else {
echo $form;
}
/*Модифицируйте код так, чтобы в случае успешной авторизации форма для ввода
пароля и логина не показывалась на экране.*/
?>
</center>