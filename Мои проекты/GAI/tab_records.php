<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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

    <form id="form_record" method="POST">
        <button name="update" onclick="form_record()" value="<?= $result['id_user'] ?>"> Обновить </button>
        <button class="btn-danger" style="color: white;" name="remove" onclick="form_record()" value="<?= $result['id_user'] ?>"> Удалить </button>
        <div class="wrapper records">
            
            <div class="id_records head"> id_records </div>
            <div class="record_address head"> record_address </div>
            <div class="datetime head"> datetime </div>
            <div class="code_user head"> code_user </div>
            <div class="code_car head"> code_car </div>
            <div class="checkbox"> 
                Выбрать всё
                <input name="cb_all" type="checkbox" placeholder="Выбрать">
            </div>
            <?php
            $query = mysqli_query($link, "SELECT * FROM records");
            $result = mysqli_fetch_all($query);
            
            foreach ( $result as $value ) {?>

                <?php $datetime = new DateTime($value[2]); ?> 
                <div class="id_records" name="id_records<?= $value[0] ?>"> <?= $value[0] ?> </div>
                <div class="record_address"> <textarea name="record_address<?= $value[0] ?>" type="text" require> <?= $value[1] ?> </textarea> </div>
                <div class="datetime"> <input name="datetime<?= $value[0] ?>" type="datetime-local" value="<?= $datetime->format('Y-m-d\TH:i:s'); ?>" require> </div>
                <div class="code_user"> <?= $value[3] ?> </div>
                <div class="code_car"> <?= $value[4] ?> </div>
                <input class="checkbox" type="checkbox" name="box[]" value="<?= $value[0] ?>">

            <?php }
            mysqli_close($link);
            ?>
        </div>
    </form>
    <script src="js/checkbox.js"></script>
</body>
</html>