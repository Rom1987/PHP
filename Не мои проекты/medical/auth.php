<?php
session_start();
if ( isset($_POST['exit']) ){
  session_unset();
}
$link = mysqli_connect("localhost","root","","medical");
mysqli_query($link, "SET NAMES 'utf-8'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <style>
        body {
            background-image: url(https://krot.info/uploads/posts/2020-02/1580728080_4-p-foni-dlya-meditsinskikh-prezentatsii-9.jpg);
        }
      <?php echo file_get_contents("css/style.css"); ?> 
    </style>
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php"><span style="color:brown">&#10133;Мед-центер&#10133;</a></span>
            <div>
                <span style="color:brown">
                    &#128657; Многопрофильный&#128657;<br>&#128657;медицинский центр&#128657; </span>
            </div>
            <div class="phone">
                <span style="color:brown">
                +7 (495) 522 53 40 &#128222;<br>
                +7 (968) 781 45 59 &#128222;</span>
            </div>
        </div>
    </div>
    <?
    include('tabs.php');
    ?>
</header>

<?php

$section='<section>
<div class="container">
    <span style="color:brown">
    <p class="title-maim">Авторизация&#10004;<hr></p></span>
    <form class="auth" action="" method="POST">
        <input placeholder="Логин" type="text" name="Login">
        <input placeholder="Пароль" type="password" name="Password">
        <button name="send">Отправить</button>
    </form>
</div>
</section>';

if ( isset($_POST['send']) ) {

$errors = array();

if ( empty($_POST['Login']) ) {

  $errors[] = 'Введите логин!';

} else {

  $Login = $_POST['Login'];
  $query = "SELECT * FROM `user` WHERE Login='$Login'";
  $result = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($result);

  if ( !empty($user) ) {

    $hash_password = $user['Password']; // соленой пароль из БД

  }
}

if ( empty($_POST['Password']) ) {

  $errors[] = 'Введите пароль!';

}
else if ( !password_verify($_POST['Password'], $hash_password) or empty($user) ) {

  $errors[] = 'Неверно введен логин или пароль!';

}

if ( empty($errors) ) { ?>

  <center><div class="complete"> Вы прошли авторизацию </div></center> <?
  $_SESSION['Login'] = $Login;
  $_SESSION['Password'] = $hash_password;

} else {

  echo $section; // подключение формы для авторизации 
  ?>
  
  <center>
    <div class="complete" style="color: brown; position: relative; top: -80px;">
    <b> <? echo (array_shift($errors)) ?> </b>
    </div>
  </center>

<?
  mysqli_close($link);
}
} else if ( isset($_SESSION['Login']) and isset($_SESSION['Password']) ) { ?>
  <center><div class="complete"> Вы прошли авторизацию </div></center> <?
} else { 

  echo $section; // подключение формы для авторизации 

  } 


if( isset($_SESSION['Login']) and isset($_SESSION['Password']) ) { ?>
  <form action="" method="POST">
  <center><button type='submit' name="exit"> Выход </button></center>
  </form> <?
  
  }?>
</div> <!--Конец div class=block-->

<footer class="bottom-fixed">
    <div class="footer-main">
        <div class="container">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span style="color:brown">
            <p style="text-align: center">© 1998 - 2020 Многопрофильный медицинский центр</p></span>
        </div>
    </div>
</footer>
</body>
</html>