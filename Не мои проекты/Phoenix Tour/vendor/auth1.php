<div class='block'>
<?php
include('connect.php');
if ( isset($_POST['exit']) ) {

    session_unset();

}
if ( isset($_POST['unpack']) ) {

    $password = md5($_POST['password']);
    $login = $_POST['login'];
    $query = "SELECT * FROM `turizm` WHERE login='$login'";
    $result = mysqli_query($link, $query);
    mysqli_fetch_object($result_select)
    $mass = mysqli_fetch_assoc($result)['password'];
    echo $mass;

    $errors = array();

  if ( empty($_POST['login']) ) {

    $errors[] = 'Введите логин!';

  } else {

    //можно написать здесь условие для админа если admin то идёт проверка пароля и закидываем session в переменные потом
    $login = $_POST['login'];
    $query = "SELECT * FROM turizm WHERE login='$login'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ( !empty($user) ) {

      $hash_password = $user['password']; // соленой пароль из БД

    }
  }

  if ( empty($_POST['password']) ) {

    $errors[] = 'Введите пароль!';

  }
  else if ( $password == $mass or empty($user) ) {

    $errors[] = 'Неверно введено имя или пароль!';

  }
  
  if ( empty($errors) ) { 

    if ( $_POST['login']=='admin' ) { ?>

      <div class="complete"> Добро пожаловать босс </div> 
      <?

    } else { ?>

      <div class="complete"> Вы прошли авторизацию </div> 
      <?

    }
    $_SESSION['user_nickname'] = $login;
    $_SESSION['user_password'] = $hash_password;

  } else {

    include('../auth.php'); // подключение формы для авторизации ?>
    <div class="error">
    <b> <? echo (array_shift($errors)) ?> </b>
    </div>

  <? }
} else if ( $_SESSION['user_nickname']=='admin' and isset($_SESSION['user_password']) ) { ?>

  <div class="complete"> Добро пожаловать босс </div> <?

} else if ( isset($_SESSION['user_nickname']) and $_SESSION['user_nickname']!='admin'
  and isset($_SESSION['user_password'])) { ?>

  <div class="complete"> Вы прошли авторизацию </div> <?

} else {

  include('../auth.php'); // подключение формы для авторизации

} 
if( isset($_SESSION['user_nickname']) and isset($_SESSION['user_password']) ) { ?>
    <form action="" method="POST">
    <center><div> <button type='submit' class="link" name="exit"> Выход </button></div></center>
    </form> <?
    
    }?>
</div> <!--Конец div class=block-->