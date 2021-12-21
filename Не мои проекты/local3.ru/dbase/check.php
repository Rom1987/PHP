<?php
  $login = filter_var(trim($_POST['login']),
   FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
   FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
   FILTER_SANITIZE_STRING);
   
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
    {
        echo "Недопустимая длинна логина (от 5 до 90 символов)";
        exit();
    } 
else if(mb_strlen($name) < 3 || mb_strlen($name) > 50)
    { 
      echo "Недопустимая длинна имени (от 3 до 50 символов)";
      exit();
    }
else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 12)
    { 
      echo "Недопустимая длинна пароля (от 2 до 12 символов)";
      exit();
    }

   $pass = md5($pass."odfgop852");

$dbase = new mysqli('local3.ru','root','','account');
    $dbase->query("INSERT INTO `user` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
$dbase->close();

 header('Location:/register.php');
?>

