<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

		$name= !empty ($_POST['name']) ? $_POST['name']:'';
		$password= !empty ($_POST['password']) ? $_POST['password']:'';

?>
  <form  action=""  method="post">
	<label for="name"> Введи имя</label> <input name="name" oncheck="color_();" type="text" placeholder="имя" value='<?=$name?>'/> <br> 
    <label for="password"> Введи пароль</label> <input name="password" type="password" placeholder="пароль" value='<?=$password?>'/> <br>
     <input  type="submit" name="unpack" value="Авторизоваться"/>
  </form>
<?php
$conn = mysqli_connect("localhost","root","","polzovatel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	if (!empty($_POST['password']) and !empty($_POST['name'])) {
		
		$name = $_POST['name'];
		$password = md5($_POST['password']);

		$query = "SELECT * FROM polzovatel WHERE name='$name' AND password='$password'";
        $result = mysqli_query($conn, $query);

		$user = mysqli_fetch_assoc($result);
		if (!empty($user)) {
			echo "Вы прошли авторизацию";
		} else {
			echo "Неверно введено имя или пароль";
		}
	}
/*Реализуйте авторизацию. Сделайте так, чтобы, если пользователь прошел
авторизацию - выводилось сообщение об этом, а если не прошел - то сообщение о
том, что введенный логин или пароль вбиты неправильно. Обязательно
производить хеширование пароля при занесении в базу данных.*/
?>
</center>