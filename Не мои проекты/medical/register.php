<?php
session_start();
if ( isset($_POST['exit']) ){
  session_unset();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
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
                    &#128657;Многопрофильный&#128657;<br>&#128657;медицинский центр&#128657; </span>
            </div>
            <div class="phone">
                <span style="color:brown">
                +7 (495) 522 53 40 &#128222;<br>
                +7 (968) 781 45 59 &#128222; </span>
            </div>
        </div>
    </div>
    <?
    include('tabs.php');
    ?>
</header>

<?php
$section = '<section>
    <div class="container">
        <span style="color:brown">
        <p class="title-maim">Регистрация&#10004;<hr><p></span>
        <form class="register" action="" method="POST">
            <input placeholder="ФИО" type="text" name="LFS">
            <input placeholder="Email" type="email" name="Email">
            <input placeholder="Логин" type="text" name="Login">
            <input placeholder="Пароль" type="password" name="Password">
            <input placeholder="Повторите пароль" type="password" name="Password_2">
            <button name="send">Отправить</button>
        </form>
    </div>
</section>';


$link = mysqli_connect("localhost","root","","medical");
mysqli_query($link, "SET NAMES 'utf-8'");

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
  
/*Регистрация*/
$LFS = $_POST['LFS'];
$Email = $_POST['Email'];
$Login = $_POST['Login'];
$Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

// проверка на наличие ошибок
if( isset($_POST['send']) ) {
  $errors = array();

  if( empty($_POST['LFS']) ) { 
    $errors[] = 'Введите ФИО!';
  }

  if( empty($_POST['Email']) ) { 
    $errors[] = 'Введите Email!';
  }

  if( empty($_POST['Login']) ) { 
    $errors[] = 'Введите Login!';
  } else {
    // подключение БД
    $query = mysqli_query($link, "SELECT * FROM user WHERE Login='$Login'");
    $mass = mysqli_fetch_assoc($query);
    if ($mass['Login']==$_POST['Login']){
      $errors[] = 'Пользователь с таким логином уже существует!';
    }
  }

  if( empty($_POST['Password']) ) { 
    $errors[] = 'Введите пароль!';
  }
  
  if( empty($_POST['Password_2']) ) { 
    $errors[] = 'Введите повторно пароль!';
  }

  if ( $_POST['Password']!=$_POST['Password_2'] ) {
    $errors[]='Не правильно потверждён пароль!';
  }

  // если нет ошибок то регистрируем
  if ( empty($errors) ) {

    $sql ="INSERT INTO user (LFS, Email, Login, Password) VALUES ('$LFS', '$Email', '$Login', '$Password')";
    mysqli_query($link, $sql);
    echo mysqli_error($link);

    $_SESSION['Login'] = $Login;
    $_SESSION['Password'] = $Password;
    ?>
    <center>
    <div class="complete">
    <h3>Вы прошли регистрацию</h3>
    </div>
    </center>
  <? 
  mysqli_close($link);
  }
  else { 
    echo $section; // подключение формы для регистрации
    ?>
    <!-- array_shift() - извлекает первый элемент массива. -->
    <center>
    <div class="complete" style="color: brown; position: relative; top: -70px; max-width: 275px;">
    <b> <? echo (array_shift($errors)) ?> </b>
    </div>
  </center>
  <? }
} else if ( isset($_SESSION['Login']) and isset($_SESSION['Password']) ) { ?>
  <center><div class="complete"> Вы прошли авторизацию </div></center> <?
} else {
  echo $section; // подключение формы для регистрации
}

if( isset($_SESSION['Login']) or isset($_SESSION['Password']) ) {?>
  <form action="" method="POST">
  <center><button type='submit' name="exit"> Выход </button></center>
  </form>
<?}?>

<footer>
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