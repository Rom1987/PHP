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

    <form id="form_car" method="POST">
        <button  name="update" onclick="form_car()" value="<?= $result['id_user'] ?>"> Обновить </button>
        <button class="btn-danger" style="color: white;" name="remove" onclick="form_car()" value="<?= $result['id_user'] ?>"> Удалить </button>
        <div class="wrapper cars">
            
            <div class="id_car head"> id_cars </div>
            <div class="breeder head"> breeder </div>
            <div class="model head"> model </div>
            <div class="car_number head"> car_number </div>
            <div class="category head"> category </div>
            <div class="checkbox"> 
                Выбрать всё
                <input name="cb_all" type="checkbox" placeholder="Выбрать">
            </div>
            <?php
            $query = mysqli_query($link, "SELECT * FROM cars");
            $result = mysqli_fetch_all($query);

            foreach ( $result as $value ) {?>

                <div class="id_cars" name="id_cars<?= $value[0] ?>" value="<?= $value[0] ?>"> <?= $value[0] ?> </div>
                <div class="breeder"> <input type="text" name="breeder<?=$value[0]?>" value="<?= $value[1] ?>" require> </div>
                <div class="model"> <input type="text" name="model<?=$value[0]?>" value="<?= $value[2] ?>" require> </div>
                <div class="car_number"> <input type="text" name="car_number<?=$value[0]?>" 
                value="<?=$value[3]?>" pattern="[А-Я]{1}[0-9]{3}[А-Я]{2}[0-9]{2,3}"
                maxlength="9" required> </div>
                <select class='category' name="category<?=$value[0]?>">
                    <option value="<?=$value[4]?>" selected> <?= $value[4] ?> </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="M">M</option>
                </select>
                <input class="checkbox" type="checkbox" name="box[]" value="<?= $value[0] ?>">

            <?php }
                mysqli_close($link);
            ?>
        </div>
    </form>
    <script src="js/checkbox.js"></script>
</body>
</html>