<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
if ( isset($_POST['exit']) ) {
    session_unset();
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Профиль -->

    <form method="POST">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="index.php" class="logout">Выход</a>
        <button name="exit" href="index.php" > EXIT </button>
    </form>

</body>
</html>