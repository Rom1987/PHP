<?php
require ('session.php');

require ("mysql.php"); // импорт файла с подключением БД

$query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");
$result = mysqli_fetch_assoc($query)['password'];

if ( mysqli_num_rows($query) == 0 or !password_verify($_POST['password'], $result) ) { 

    $_SESSION['error']='
    <script>
        alert( "Неверно введён email или пароль");
    </script>';
    header("Location: index.php");
    exit;

} 

$_SESSION['email'] = $_POST['email'];


$_SESSION['password'] = $result;

mysqli_close($link);

header("Location: index.php");
?>