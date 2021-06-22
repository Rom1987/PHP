<?php
session_start();
?>
<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<html>
<body>
<?php
//session
  if(isset($_SESSION['name'])){
	echo   "Имя: ".$_SESSION['name']." ";
	echo    "Хешированный пароль: ".$_SESSION['password'];
	}
	if (isset($_GET['exit'])){
		session_destroy();
		  }

$link = mysqli_connect("localhost","root","","polzovatel");
mysqli_query($link, "SET NAMES 'utf-8'");
/*Авторизация*/
$form = '
<form  action=""  method="post">
<label for="name1"> Введи имя</label> <input name="name1" required oncheck="color_();" type="text" placeholder="имя"/>  <br> 
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
			echo "Вы прошли авторизацию"."<br>";
		$_SESSION['name']=$name1;
	    $_SESSION['password']=$hash;
		} else {
			echo $form."Неверно введено имя или пароль"."<br>";// Пароль не подошел, выведем сообщение
		}
    }
    else {
      echo $form."Неверно введено имя или пароль"."<br>";// Пользователя с таким логином нет, выведем сообщение
    }
  }
    else {
		echo $form;// Пользователя с таким логином нет, выведем сообщение
	}

/*Создать сайт из четырех страниц. На первой странице
создать форму авторизации на сайте с двумя обязательных
полями: login, password. Если данные введены верно, то
записать в сессию, при наличии регистрации пользователю
доступна кнопка  &quot;Выход&quot;. В момент выхода происходит
удалени
е созданной ранее сессии. (Задание выполняется с БД)*/
?>
<a href="onesession.php">1</a>
<a href="twosession.php">2</a>
<a href="3session.php">3</a>
<a href="4session.php">4</a>
<br>
<a href="?exit">Выход</a>
</center>
</body>
</html>