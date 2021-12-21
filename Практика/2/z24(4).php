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

$name=$_POST['name'];
$password=md5($_POST['password']);
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
/*Внесите изменения в регистрацию с учетом хеширования, зарегистрируйте пару
новых пользователей, убедитесь, что в базу данных они добавились с
хешированными паролями.*/
?>
</center>