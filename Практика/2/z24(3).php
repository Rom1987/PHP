<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php

		$name= !empty ($_POST['name']) ? $_POST['name']:'';
		$password= !empty ($_POST['password']) ? $_POST['password']:'';

?>
  <form  action=""  method="post">
	<label for="name"> Введи имя</label> <input name="name" oncheck="color_();" type="text" placeholder="имя" value='<?=$name?>'/> <br> 
    <label for="password"> Введи пароль</label> <input name="password" type="password" placeholder="пароль" value='<?=$password?>'/> <br>
     <input  type="submit" name="unpack" value="Зарегистрироваться"/>
  </form>
<?php
/*Регистрация*/
$link = mysqli_connect("localhost","root","","polzovatel");
mysqli_query($link, "SET NAMES 'utf-8'");

if(!empty($name) and !empty($password)){
$name=$_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$conn = mysqli_connect("localhost","root","","polzovatel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="INSERT INTO polzovatel (name, password) VALUES ('$name', '$password')";


if (mysqli_query($conn, $sql)) {
  echo "Вы зарегистрировались";
} else {
  echo "Произошла ошибка: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}




/*Авторизация*/
$form = '
<form  action=""  method="post">
<label for="name1"> Введи имя</label> <input name="name1" oncheck="color_();" type="text" placeholder="имя"/>  <br> 
<label for="password1"> Введи пароль</label> <input name="password1" type="password" placeholder="пароль"/> <br>
<input  type="submit" name="unpack" value="Авторизоваться"/>
  </form>
';

if(!empty($_POST['name1']) and !empty($_POST['password1'])) {
$name1 = $_POST['name1'];
$query = "SELECT * FROM polzovatel WHERE name='$name1'"; 
$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);
	//Если пользователь с таким логином есть...
	if (!empty($user)) {
		$hash = $user['password']; // соленый пароль из БД
		
		// Проверяем соответствие хеша из базы введенному паролю
		if (password_verify($_POST['password1'], $hash)) {
            echo "Вы прошли авторизацию";// Все ок, авторизуем...
		} else {
			echo $form."Неверно введено имя или пароль";// Пароль не подошел, выведем сообщение
		}
    }
    else {
      echo $form."Неверно введено имя или пароль";// Пользователя с таким логином нет, выведем сообщение
    }
  }
    else {
		echo $form;// Пользователя с таким логином нет, выведем сообщение
	}

/*Реализуйте описанную выше авторизацию с соленым паролем. Попробуйте
зарегистрируйтесь, авторизуйтесь, убедитесь, что все работает.*/
?>
</center>