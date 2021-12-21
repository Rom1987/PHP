<center>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="new1.css">
</head>
<html>
<body background=https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg> 
<div class="block1">
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
?>
	
     <?php if (!empty($user)) {
			echo "Вы прошли авторизацию"  ;?>
			<br>
	 <a href="new30.2.php">Меню управления БД</a><?php }
	 
		else {
			echo "Неверно введено имя или пароль";
			
		}
	}
	?>
	</div>
	</body>
	</html>
</center>