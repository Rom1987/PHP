<!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="vieweport" content="width=devise-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-opera">
        <style>
<?php echo file_get_contents("css/style.css"); ?>
</style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Домашние Пишечки/register</title>
    </head>

    <body>

        <?php require "elem/head.php" ?>

        <?php 
    if($_COOKIE['user'] == ''):
        ?>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1>Пройти регистрацию</h1>
                    <form action="dbase/check.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="text" class="form-control" name="name" id="login" placeholder="Имя"><br>
                        <input type="password" class="form-control" name="pass" id="login" placeholder="Пароль"><br>
                        <button class="btn btn-outline-primary" type="submit">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Пройти авторизацию</h1>
                    <form action="dbase/auth.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" class="form-control" name="pass" id="login" placeholder="Пароль"><br>
                        <button class="btn btn-outline-primary" type="submit">Авторизоваться</button>
                    </form>
                </div>
                <?php else: ?>
                <p class="container">Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="dbase/exit.php">здесь</a>.</p>
                <p class="container">Ваш логин, </p>
                <h3 class="container" mt-5 mb-4>Услуги</h3>
                <?php endif; 
                  ?>
            </div>
        </div>
        
        
        <?php require "elem/under.php" ?>

    </body>
    </html>
