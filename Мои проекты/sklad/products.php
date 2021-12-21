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
    echo file_get_contents("css/test_block_style.css");
    echo file_get_contents("css/header.css");
    ?>
    </style>
</head>

<body>

    <?php
include('mysql.php');

// Меню
include('menu.php'); 
?>

    <!-- поиск -->
    <form action="products.php" method="GET">
        <div class="button_search">
            <input name='search' placeholder="Поиск" value="<?= $_GET['search'] ?>" type="search">
            <button name="button_search"> Поиск </button>
        </div>
    </form>
    <!-- end поиск -->

    <!-- Категория напитков -->
    <form action="products.php" method="GET">
        <div class="block_category">
            <button class="category" name="default"> Сброс </button>
            <br>
            <button class="category" name="tea"> Чай </button>
            <br>
            <button class="category" name="juice"> Сок </button>
            <br>
            <button class="category" name="coffee"> Кофе </button>
        </div>
    </form>

    <form action="products.php" method="GET">

        <center>
            <!-- Блоки с продуктами -->
            <!-- покупка -->
            <? include('buy.php'); ?>
        </center>
        <!-- Объекты из таблицы 'napitki' -->
        <div class="post-wrap">
            <?
  if ( isset($_GET['tea']) ) {
    $sql_products = "SELECT * FROM `napitki` WHERE categoria_name='Чай'";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
  } 
  else if ( isset($_GET['juice']) ) {
    $sql_products = "SELECT * FROM `napitki` WHERE categoria_name='Сок'";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
  }
  else if ( isset($_GET['coffee']) ) {
    $sql_products = "SELECT * FROM `napitki` WHERE categoria_name='Кофе'";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
  }
  else if ( isset($_GET['default']) ) {
    $sql_products = "SELECT * FROM `napitki`";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
    }
  else if ( isset($_GET['button_search']) ) {
    $search = $_GET['search'];
    $sql_products = "SELECT * FROM `napitki` WHERE `name` Like '%$search%'";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
  }
  else {
    $sql_products = "SELECT * FROM `napitki`";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
  } ?>

    </form>
    <center>
        <?
for ($i = 1; $i <=$str_pag; $i++) { ?>
        <div class='kvasov-link' style="display: inline;">
            <? echo "<a class='link' href=?page=".$i.">".$i."</a>"; ?>
        </div>
        <?
}?>
    </center>
    </div> <!-- end post-wrap -->

    <?
mysqli_close($link);
?>

</body>

</html>