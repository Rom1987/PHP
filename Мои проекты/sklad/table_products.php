<?php
session_start();
?>
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
    echo file_get_contents("css/tab_BD_products.css");
    echo file_get_contents("css/header.css");
    ?>
    </style>
</head>

<body>

    <!-- Выпадающий список -->
    <?php include('menu.php'); ?>
    <!-- end Выпадающий список -->

    <form action="table_products.php" method="POST">
        <center>
            <?
//admin
if ( $_SESSION['user_nickname']=='admin' and  isset($_SESSION['user_password']) ){
    include('mysql.php');

// выбор checkbox 

// удаление
if ( isset($_POST['button']) ){
  // $value это все значения user_code (код пользователя)
  foreach ($_POST['box'] as $value) {
    mysqli_query($link, "DELETE FROM orders WHERE code_Byuer='$value';");
    mysqli_query($link, "DELETE FROM napitki WHERE ID='$value';");
  }
}

// изменение
if ( isset($_POST['change']) ) {
  foreach ($_POST['box'] as $value) {

    $name_value = 'name'.$value;
    $name = $_POST[$name_value];

    $img_value = 'img'.$value;
    $img = $_POST[$img_value];

    $categoria_name_value = 'categoria_name'.$value;
    $categoria_name = $_POST[$categoria_name_value];

    $composition_value = 'composition'.$value;
    $composition = $_POST[$composition_value];

    $manufacturer_value = 'manufacturer'.$value;
    $manufacturer = $_POST[$manufacturer_value];

    $price_value = 'price'.$value;
    $price = $_POST[$price_value];

    $quantity_value = 'quantity'.$value;
    $quantity = $_POST[$quantity_value];

    $query =
    "UPDATE `napitki` 
    SET name = '$name', img = '$img', 
    categoria_name = '$categoria_name', composition ='$composition ', 
    manufacturer = '$manufacturer', price = '$price', quantity = '$quantity' 
    WHERE ID = '$value'";
    mysqli_query($link,$query);
  }
}

// постраничный вывод
if (isset($_GET['page'])){
  $page = $_GET['page'];
} else {
  $page = 1;
}
$limit = 10; //количество строк на одной странице
$number = ($page * $limit) - $limit;
$sel="SELECT COUNT(*) FROM `napitki`";
$res_count = mysqli_query($link, $sel);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($link, "SELECT * FROM `napitki` LIMIT $number, $limit");

  ?>
            <div class="marg col col-sm col-md col-lg col-xl mx-auto">
                <table class="col col-sm col-md col-lg col-xl mx-auto" border="0" width="99%">
                    <tbody>
                        <tr align="CENTER">
                            <td>ID</td>
                            <td>name</td>
                            <td>img</td>
                            <td>categoria_name</td>
                            <td>composition</td>
                            <td>manufacturer</td>
                            <td>price</td>
                            <td>quantity</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <!-- </form> -->



                <!-- <form action="BD_PC.php" method="POST"> -->
                <? 
  while( $article = mysqli_fetch_assoc($query) ) {
    ?>
                <table class="hov col col-sm col-md col-lg col-xl mx-auto" border="0" width="99%">
                    <tbody>
                        <tr align="CENTER">
                            <td> <?= $article['ID']?> </td>
                            <td> <textarea class="textarea_name" name="name<?=$article['ID']?>"
                                    type="text"><?= $article['name'] ?></textarea> </td>
                            <td> <textarea name="img<?=$article['ID']?>" type="text"><?= $article['img'] ?></textarea>
                            </td>
                            <td>
                                <select class='textarea_categoria_name' name="categoria_name<?=$article['ID']?>">
                                    <option value="<?=$article['categoria_name']?>" disabled selected>
                                        <?=$article['categoria_name']?> </option>
                                    <option value="Чай"> Чай </option>
                                    <option value="Кофе"> Кофе </option>
                                    <option value="Сок"> Сок </option>
                                </select>
                            <td> <textarea name="composition<?=$article['ID']?>"
                                    type="text"><?= $article['composition'] ?></textarea> </td>
                            <td> <textarea class='textarea_manufacturer' name="manufacturer<?=$article['ID']?>"
                                    type="text"><?= $article['manufacturer'] ?></textarea> </td>
                            <td> <textarea class='textarea_price' name="price<?=$article['ID']?>"
                                    type="text"><?= $article['price'] ?></textarea> </td>
                            <td> <textarea class='textarea_quantity' name="quantity<?=$article['ID']?>"
                                    type="text"><?= $article['quantity'] ?></textarea> </td>
                            <td> <input type="checkbox" class="checkbox" name="box[]" value="<?=$article['ID']?>" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <? } ?>

                <button name='button' value='button'>Удалить</button> <br>
                <button name='change' value='change'>Изменить</button> <br>
                <a class="link" href="registration_products.php"> Регистрация продуктов </a> <br>
                <? for ($i = 1; $i <=$str_pag; $i++) { ?>
                <div class='kvasov-link' style="display: inline;">
                    <? echo "<a class='link_in_page' href=?page=".$i.">".$i."</a>"; ?>
                </div>
                <?
  }
      mysqli_close($link);
    } ?>
            </div> <!-- end marg -->
        </center>
    </form>
</body>

</html>