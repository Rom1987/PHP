<center>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="new1.css">
</head>
<html>
<body background=https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg> 
<div class="block1">
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
echo "Вы зарегистрировались";?>
<br>
 <a href="new30.1.php">Меню информации из БД</a><?php }
 else {
  echo "Произошла ошибка: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</div>
</body>
</html>
</center>