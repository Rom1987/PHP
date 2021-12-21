<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');
require ('mysql.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГАИ</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/auth.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">

    <script src="../Jquery/jquery-3.5.1.js"></script>
    <script>
        $(function(){
            $("header").load("header.php");
        });
    </script>
</head>
<body>
<?php 
   if ( !empty($_SESSION['error']) ):
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    elseif ( !empty($_SESSION['complete']) ): 
        echo $_SESSION['complete'];
        unset($_SESSION['complete']);
    endif;
    $query = mysqli_query($link, "SELECT * FROM users WHERE id_user = {$_SESSION['query']['id_user']}");
    $result = mysqli_fetch_assoc($query);
    ?>
    <header></header>

    <div class="content-account">
        <div class="welcome">
            <h3> Добро пожаловать, <?= $result['l_f_s'] ?> </h3>
            <p> Ваши данные: </p>
        </div>
        <!-- Аккаунт -->
        <form action="form_account.php" method="POST">
            <div class="header_content_account"> Аккаунт </div>
            <div class="wrapper account" style="margin-top: 0px;">
                
                <div class="id_users head"> Ваш id </div>
                <div class="email head"> Email </div>
                <div class="l_f_s head"> ФИО </div>
                <div class="address head"> Адрес проживания </div>
                <div class="date_of_birth head"> Дата рождения </div>
                <div class="phone head"> Телефон </div>

                <div class="id_users" name="id_users" value="<?= $result['id_user'] ?>"> <?= $result['id_user'] ?> </div>
                <div class="email"> <input name="email" type="text" value="<?= $result['email'] ?>" require> </div>
                <div class="l_f_s"> <input name="l_f_s" type="text" value="<?= $result['l_f_s'] ?>" require> </div>
                <div class="address"> <textarea name="address" require> <?= $result['address'] ?> </textarea> </div>
                <div class="date_of_birth"> <input name="date_of_birth" type="date" value="<?= $result['date_of_birth'] ?>" require> </div>
                <div class="phone"> <input name="phone" type="tel" value="<?= $result['phone'] ?>" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" maxlength="11" required> </div>
            
            </div>
            <button class="btn_account" name="update" value="<?= $result['id_user'] ?>"> Обновить аккаунт </button>
            <button class="btn-warning btn_account" style="color: white;" name="remove" value="<?= $result['id_user'] ?>"> Удалить аккаунт </button>
        </form>

        <!-- Автомобили -->
        <form id="form_car" method="POST">
            <div class="header_content_account"> Автомобили </div>
            <div class="wrapper cars_for_account" style="margin-top: 0px;">
                
                <div class="id_car head"> id машины </div>
                <div class="breeder head"> Производитель </div>
                <div class="model head"> Модель </div>
                <div class="car_number head"> Номер машины </div>
                <div class="category head"> Категория </div>
                <div class="checkbox"> 
                    Выбрать всё
                    <input name="cb_all" type="checkbox" placeholder="Выбрать">
                </div>
                <?php
                $query_records = mysqli_query($link, "SELECT code_car FROM records WHERE code_user = {$_SESSION['query']['id_user']}");
                $result_records = mysqli_fetch_all($query_records);
                foreach ( $result_records as $value ) {
                    
                    $query_cars = mysqli_query($link, "SELECT * FROM cars WHERE id_car = '{$value[0]}'");
                    $result = mysqli_fetch_all($query_cars);

                    foreach ( $result as $value ) {?>

                        <div class="id_car" name="id_car<?= $value[0] ?>" value="<?= $value[0] ?>"> <?= $value[0] ?> </div>
                        <div class="breeder"> <input type="text" name="breeder<?=$value[0]?>" value="<?= $value[1] ?>" require> </div>
                        <div class="model"> <input type="text" name="model<?=$value[0]?>" value="<?= $value[2] ?>" require> </div>
                        <div class="car_number"> <input type="text" name="car_number<?=$value[0]?>" 
                        value="<?=$value[3]?>" pattern="[А-Я]{1}[0-9]{3}[А-Я]{2}[0-9]{2,3}"
                        maxlength="9" required> </div>
                        <select class='category' value="<?= $value[4] ?>" name="category<?=$value[0]?>">
                            <option value="<?= $value[4] ?>" selected> <?= $value[4] ?> </option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="M">M</option>
                        </select>
                        <input class="checkbox" type="checkbox" name="box[]" value="<?= $value[0] ?>"> <?php 
                    }
                } ?>
            </div>
            <button name="update" onclick="form_car()" value="<?= $result['id_user'] ?>"> Обновить данные о автомобилях </button>
            <button class="btn-warning" style="color: white;" name="remove" onclick="form_car()" value="<?= $result['id_user'] ?>"> Удалить данные о автомобилях </button>
        </form>
       
        <!-- Записи -->
        <form id="form_record" method="POST">
            <div class="header_content_account"> Записи </div>
            <div class="wrapper records" style="margin-top: 0px;">
                
                <div class="id_record head"> id_records </div>
                <div class="record_address head"> record_address </div>
                <div class="datetime head"> datetime </div>
                <div class="code_user head"> Код пользователя </div>
                <div class="code_car head"> Код машины </div>
                <div class="checkbox"> 
                    Выбрать всё
                    <input name="cb_all" type="checkbox" placeholder="Выбрать">
                </div>

                <?php
                $query_records = mysqli_query($link, "SELECT * FROM records WHERE code_user = {$_SESSION['query']['id_user']}");
                $result = mysqli_fetch_all($query_records);
                foreach ( $result as $value ) {

                    $datetime = new DateTime($value[2]); ?> 
                    <div class="id_record" name="id_record<?= $value[0] ?>"> <?= $value[0] ?> </div>
                    <div class="record_address"> <textarea name="record_address<?= $value[0] ?>" type="text" require> <?= $value[1] ?> </textarea> </div>
                    <div class="datetime"> <input name="datetime<?= $value[0] ?>" type="datetime-local" value="<?= $datetime->format('Y-m-d\TH:i:s'); ?>" require> </div>
                    <div class="code_user"> <?= $value[3] ?> </div>
                    <div class="code_car"> <?= $value[4] ?> </div>
                    <input class="checkbox" type="checkbox" name="box[]" value="<?= $value[0] ?>">

                <?php } ?>

            </div>
            <button name="update" onclick="form_record()" value="<?= $result['id_user'] ?>"> Обновить запись </button>
            <button class="btn-warning" style="color: white;" name="remove" onclick="form_record()" value="<?= $result['id_user'] ?>"> Удалить запись </button>
        </form>
    </div>
    <?php
    mysqli_close($link);
    ?>
    <script src="js/checkbox.js"></script>
</body>
</html>