<?php
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
?>
    <header></header>

    <form id="form_user" method="POST">
        <button  name="update" onclick="form_user()" value="<?= $result['id_user'] ?>"> Обновить </button>
        <button class="btn-danger" style="color: white;" name="remove" onclick="form_user()" value="<?= $result['id_user'] ?>"> Удалить </button>
        <div class="wrapper users">
            
            <div class="id_users head"> id_users </div>
            <div class="email head"> email </div>
            <div class="l_f_s head"> l_f_s </div>
            <div class="address head"> address </div>
            <div class="date_of_birth head"> date_of_birth </div>
            <div class="phone head"> phone </div>
            <div class="checkbox"> 
                Выбрать всё
                <input name="cb_all" type="checkbox" placeholder="Выбрать">
            </div>
            <?php
            $query = mysqli_query($link, "SELECT * FROM users");
            $result = mysqli_fetch_all($query);
            
            foreach ( $result as $value ) {?> 
                <div class="id_users"> <?= $value[0] ?> </div>
                <div class="email"> <input name="email<?= $value[0] ?>" type="text" value="<?= $value[1] ?>" require> </div>
                <div class="l_f_s"> <input name="l_f_s<?= $value[0] ?>" type="text" value="<?= $value[3] ?>" require> </div>
                <div class="address"> <textarea name="address<?= $value[0] ?>" require> <?= $value[4] ?> </textarea> </div>
                <div class="date_of_birth"> <input name="date_of_birth<?= $value[0] ?>" type="date" value="<?= $value[5] ?>" require> </div>
                <div class="phone"> <input name="phone<?= $value[0] ?>" type="tel" value="<?= $value[6] ?>" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" maxlength="11" required> </div>
                <input class="checkbox" type="checkbox" name="box[]" value="<?= $value[0] ?>">

            <?php }
            
                mysqli_close($link);
            ?>
        </div>
    </form>
    <script src="js/checkbox.js"></script>
</body>
</html>