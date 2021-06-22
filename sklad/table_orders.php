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
    echo file_get_contents("css/tab_orders.css");
    echo file_get_contents("css/header.css");
    ?>
    </style>
</head>

<body>

    <!-- Выпадающий список -->
    <?php include('menu.php'); ?>
    <!-- end Выпадающий список -->

    <form action="table_orders.php" method="POST">
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
    mysqli_query($link, "DELETE FROM `orders` WHERE ID='$value';");
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
$sel="SELECT COUNT(*) FROM `orders`";
$res_count = mysqli_query($link, $sel);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($link, "SELECT * FROM `orders` LIMIT $number, $limit");


  ?>
            <div style='overflow-x: auto;' class="marg col col-sm col-md col-lg col-xl mx-auto">
                <table class="col col-sm col-md col-lg col-xl mx-auto" border="0" width="99%">
                    <tbody>
                        <tr align="CENTER">
                            <td>ID</td>
                            <td>name_Byuer</td>
                            <td>name_Napitki</td>
                            <td>Purchase_date</td>
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
                            <td><?= $article['ID']?></td>
                            <td>
                                <p name="name_Byuer<?=$article['ID']?>"><?= $article['name_Byuer'] ?></p>
                            </td>
                            <td>
                                <p name="name_Napitki<?=$article['ID']?>"><?= $article['name_Napitki'] ?></p>
                            </td>
                            <td>
                                <p name="Purchase_date<?=$article['ID']?>"><?= $article['Purchase_date'] ?></p>
                            </td>
                            <td><input type="checkbox" class="checkbox" name="box[]" value="<?=$article['ID']?>" /></td>
                        </tr>
                    </tbody>
                </table>
                <? } ?>

                <button name='button' value='button'>Удалить</button> <br>

                <? for ($i = 1; $i <=$str_pag; $i++) {?>
                <div class='kvasov-link' style="display: inline;">
                    <? echo "<a class='link_in_page' href=?page=".$i.">".$i."</a>"; ?>
                </div>
                <?}
      mysqli_close($link);
    } ?>
            </div> <!-- end marg -->
        </center>
    </form>
</body>

</html>