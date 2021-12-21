<center>
<div class="block_authorization">
<?php
if ( isset($_POST['exit']) ) {

    session_unset();

}
if ( isset($_POST['unpack']) ) {

  $errors = array();

  if ( empty($_POST['name1']) ) {

    $errors[] = 'Введите никнейм!';

  } else {

    $name1 = $_POST['name1'];
    $query = "SELECT * FROM byuer WHERE nickname='$name1'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ( !empty($user) ) {

      $hash_password = $user['password']; // соленой пароль из БД

    }
  }

  if ( empty($_POST['password1']) ) {

    $errors[] = 'Введите пароль!';

  }
  else if ( !password_verify($_POST['password1'], $hash_password) or empty($user) ) {

    $errors[] = 'Неверно введено имя или пароль!';

  }
  
  if ( empty($errors) ) { ?>

    <div class="complete"> <h4>Добро пожаловать</h4> </div> <?
    $_SESSION['user_nickname'] = $name1;
    $_SESSION['user_password'] = $hash_password;

  } else {

    include ('authorization.html'); // подключение формы для авторизации ?>
    <div class="error">
      <b> <? echo (array_shift($errors)) ?> </b>
    </div>

  <? }
} else if ( isset($_SESSION['user_nickname']) and isset($_SESSION['user_password']) ) { ?>

  <div class="complete"> <h4>Добро пожаловать</h4> </div><? 

} else {

  include ('authorization.html'); // подключение формы для авторизации

} 
if( isset($_SESSION['user_nickname']) and isset($_SESSION['user_password']) ) { ?>
    <form action="" method="POST">
    <center><div> <button type='submit' class="link" name="exit"> Выход </button></div></center>
    </form> <?
    
    }?>
</div> <!--Конец block_authorization -->
</center>