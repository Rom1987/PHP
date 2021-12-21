<?php
require ('session.php');

require ("mysql.php"); // импорт файла с подключением БД

$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");

if ( mysqli_num_rows($query) != 0 ) { 

    echo 'Пользователь с таким email существует';
    exit;

}   

$sql ="INSERT INTO users (email, password, l_f_s, address, date_of_birth, phone )
VALUES ('{$_POST['email']}', '$hash_password', '{$_POST['l_f_s']}', '{$_POST['address']}', 
'{$_POST['date_of_birth']}', {$_POST['phone']} )";

if ( !mysqli_query($link, $sql) ){

    $_SESSION['error']='
    <script>
        alert("Ошибка при регистрации. Не корректный ввод данных");
    </script> ';
    header("Location: index.php");
    exit;
    
} 

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $hash_password;

mysqli_close($link);

header("Location: index.php");
?>