<?php
session_start();
if (isset($_POST['exit'])){
  session_unset();
    }
?>
<center>
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
        <?php echo file_get_contents("css/style.css");
        echo file_get_contents("css/registration.css");
        echo file_get_contents("css/header.css");
        ?>
        </style>
    </head>

    <body>

        <!-- Меню -->
        <?php include('menu.php'); ?>


        <div class='block_registration col col-sm col-md col-lg col-xl mx-auto'>

            <?
include('mysql.php');

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
  
/*Регистрация*/
$user_nickname = $_POST['user_nickname'];
$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
$user_lname = $_POST['user_lname'];
$user_fname = $_POST['user_fname'];
$user_sname = $_POST['user_sname'];
$user_address = $_POST['user_address'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];

// проверка на наличие ошибок
if( isset($_POST['registration_button']) ) {
  $errors = array();

  if( empty($_POST['user_nickname']) ) { 
    $errors[] = 'Введите никнейм!';
  }
  else {
    // подключение БД
    $query = mysqli_query($link, "SELECT * FROM byuer WHERE nickname='$user_nickname'");
    $mass = mysqli_fetch_assoc($query);
    if ($mass['nickname']==$_POST['user_nickname']){
      $errors[] = 'Пользователь с таким никнейном существует!';
    }
  }

  if( empty($_POST['user_password']) ) { 
    $errors[] = 'Введите пароль!';
  }
  
  if( empty($_POST['user_lname']) ) { 
    $errors[] = 'Введите фамилию!';
  }

  if( empty($_POST['user_fname']) ) { 
    $errors[] = 'Введите имя!';
  }

  if( empty($_POST['user_sname']) ) { 
    $errors[] = 'Введите отчество!';
  }

  if( empty($_POST['user_address']) ) { 
    $errors[] = 'Введите адрес проживания!';
  }

  if( empty($_POST['user_phone']) ) {
    $errors[] = 'Введите номер телефона!';
  }

  if ( (strlen($_POST['user_phone'])<11 or strlen($_POST['user_phone'])>11) and strlen($_POST['user_phone'])!=0 ) { 
    $errors[] = 'Номер телефона должен состоять из 11 цифр';
  }

  if ( empty($_POST['user_email']) ) {
    $errors[] = 'Введите e-mail!';
  }

  // если нет ошибок то регистрируем
  if ( empty($errors) ) {
    $L_F_S = $user_lname.' '.$user_fname.' '.$user_sname;

    $sql = "INSERT INTO byuer (nickname, password, name, address, number, email) VALUES ('$user_nickname',
    '$user_password', '$L_F_S', '$user_address', '$user_phone', '$user_email')";
    mysqli_query($link, $sql);
    $_SESSION['user_nickname'] = $user_nickname;
    $_SESSION['user_password'] = $user_password;
    ?>
            <div class="col col-sm col-md col-lg col-xl mx-auto" style="color: lime; display:inline-block;">
                <h3>Вы прошли регистрацию</h3>
            </div>
            <? 
  mysqli_close($link);
  }
  else { 
    include ('form_registration.php'); // подключение формы для регистрации
    ?>
            <!-- array_shift() - извлекает первый элемент массива. -->
            <div class="error">
                <? echo (array_shift($errors)) ?>
            </div>
            <? }
}
else {
  include ('form_registration.php'); // подключение формы для регистрации
}

if( password_verify($_POST['password1'], $hashadmin) or password_verify($_POST['password1'], $hash) or 
isset($_SESSION['user_nickname']) or isset($_SESSION['user_password']) ) {?>
            <div> <a class="link" href="?exit">Выход</a> </div>
            <?}?>

        </div> <!-- end block_registration -->

    </body>

    </html>
</center>