<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');

require ("mysql.php"); // импорт файла с подключением БД

$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");

if ( mysqli_num_rows($query) != 0 ) { 

    $_SESSION['error'] = "
    <script>
        alert ('Пользователь с таким email существует');
    </script>";
    header("Location: index.php");
    exit;

}   

$sql ="INSERT INTO users (email, password, l_f_s, address, date_of_birth, phone )
VALUES ('{$_POST['email']}', '$hash_password', '{$_POST['l_f_s']}', '{$_POST['address']}', 
'{$_POST['date_of_birth']}', {$_POST['phone']} )";

if ( mysqli_query($link, $sql) ) {

    $_SESSION['complete'] = "
    <script>
        alert ( 'Регистрация успешна пройдена' );
    </script>";
    
} else {

    $_SESSION['error'] = "<script> aler('Ошибка при регистрации'); </script>";
    mysqli_close($link);
    header("Location: index.php");
    exit;

}

$query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");
$mass = mysqli_fetch_assoc($query);

$_SESSION['query'] = $mass;
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $hash_password;

mysqli_close($link);

header("Location: index.php");
?>