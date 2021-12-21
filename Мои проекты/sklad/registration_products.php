<?php
session_start();
if (isset($_POST['exit'])){
  session_unset();
    }
?>
<center>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="js/header.js"></script>
        <style>
        <?php echo file_get_contents("css/style.css");
        echo file_get_contents("css/registration.css");
        echo file_get_contents("css/header.css");
        ?>
        </style>
    </head>

    <body>
        <!-- Выпадающий список -->
        <?php
  include('menu.php'); 
?>
        <!-- end Выпадающий список -->

        <div class='block_registration col col-sm col-md col-lg col-xl mx-auto'>

            <?
include('mysql.php');

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
  
/*Регистрация*/
$name = $_POST['name'];
$img = $_POST['img'];
$categoria_name = $_POST['categoria_name'];
$composition = $_POST['composition'];
$manufacturer = $_POST['manufacturer'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// проверка на наличие ошибок
if( isset($_POST['registration_button']) ) {
  $errors = array();

  if( empty($_POST['name']) ) { 
    $errors[] = 'Введите имя продукта!';
  }

  if( empty($_POST['img']) ) { 
    $errors[] = 'Введите адрес картинки!';
  }
  
  if( empty($_POST['categoria_name']) ) { 
    $errors[] = 'Введите категорию!';
  }

  if( empty($_POST['composition']) ) { 
    $errors[] = 'Введите сотав!';
  }
  
  if( empty($_POST['manufacturer']) ) {
    $errors[] = 'Введите производителя!';
  }
  
  if( empty($_POST['price']) ) {
    $errors[] = 'Введите цену!';
  }

  if( empty($_POST['quantity']) ) { 
    $errors[] = 'Введите количество!';
  }

  // если нет ошибок то регистрируем
  if ( empty($errors) ) {
    $sql ="INSERT INTO napitki (name, img, categoria_name, composition, manufacturer, price, quantity)
    VALUES ('$name', '$img', '$categoria_name', '$composition', '$manufacturer', '$price', '$quantity')";
    mysqli_query($link, $sql);

    ?>
            <div class="complete col col-sm col-md col-lg col-xl mx-auto" style="display:inline-block;">
                <h3>Вы зарегистрировали продукт</h3>
            </div>
            <? 
  mysqli_close($link);
  }
  else { ?>
            <!-- array_shift() - извлекает первый элемент массива. -->
            <div style="color: red;">
                <? echo (array_shift($errors)) ?>
            </div>
            <? }
}

// Форма регистрации ПК
include ('form_products_registration.php');

if( password_verify($_POST['password1'], $hashadmin) or password_verify($_POST['password1'], $hash) ) {?>
            <div> <a class="link" href="?exit">Выход</a> </div>
            <?}?>

            <center>
                <div class='posit col col-sm col-md col-lg col-xl mx-auto'>
                    <a class="link" href="table_products.php"> Таблица продуктов </a> <br>
                </div>
            </center>
        </div> <!-- end block_registration -->

    </body>

    </html>
</center>