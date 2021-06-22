<?php
require ('session.php');

require ("mysql.php"); // импорт файла с подключением БД

require ("admin.php"); // импорт файла для проверки email админа

$query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");
$mass = mysqli_fetch_assoc($query);
$result = $mass['password'];

if ( mysqli_num_rows($query) == 0 or !password_verify($_POST['password'], $result) ) { 

    $_SESSION['error'] = "
    <script>
        alert ('Неверно введён email или пароль');
    </script>";
    mysqli_close($link);
    header("Location: index.php");
    exit;

} 

// если введён email админа
if ( $_POST['email'] == $_SESSION['email_admin'] ) {

    $_SESSION['email'] = $_SESSION['email_admin'];

} else if ( $_POST['email'] != $_SESSION['email_admin'] ) {
    
    // если не введён email админа
    $_SESSION['email'] = $_POST['email'];

}

$_SESSION['password'] = $result;

$_SESSION['query'] = $mass;

mysqli_close($link);

header("Location: index.php");
?>