<?php
    $login = filter_var(trim($_POST['login']),
     FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
     FILTER_SANITIZE_STRING);





    $pass = md5($pass."odfgop852");

 $dbase = new mysqli('local3.ru','root','','account');
 
 $acv = $dbase->query("SELECT * FROM `user` WHERE `login`= '$login' AND `pass` = '$pass'");
 $user = $acv->fetch_assoc();
 if(count($user)==0)
 {
    echo "Такой пользователь не найден";
     exit();
 }
   
 setcookie('user', $user['name'], time() + 3600, "/");

 $dbase->close();

 header('Location:/register.php');
?>
