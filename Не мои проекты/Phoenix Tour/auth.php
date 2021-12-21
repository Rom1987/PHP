<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/Лого.png" type="images/png">
</head>
<body>

<!-- Форма авторизации -->

    <form action="" method="POST">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button name='unpack' type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/www/index.php">зарегистрируйтесь</a>!
        </p>
        <?php
        include('vendor/auth1.php');
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>