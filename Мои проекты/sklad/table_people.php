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
    echo file_get_contents("css/tab_people.css");
    echo file_get_contents("css/header.css");
    ?>
    </style>
</head>

<body>

    <!-- Выпадающий список -->
    <?php include('menu.php'); ?>
    <!-- end Выпадающий список -->

    <form action="table_people.php" method="POST">
        <center>
            <?
// $name1=$_SESSION['name'];
// $hash=$_SESSION['password'];

//admin
if ( $_SESSION['user_nickname']=='admin' and  isset($_SESSION['user_password']) ){
  include('mysql.php');

// выбор checkbox 

// удаление
if ( isset($_POST['button']) ){
  // $value это все значения user_code (код пользователя)
  foreach ($_POST['box'] as $value) {
    mysqli_query($link, "DELETE FROM byuer WHERE ID='$value';");
  }
}

// изменение
if ( isset($_POST['change']) ) {
  foreach ($_POST['box'] as $value) {

    $nickname_value = 'nickname'.$value;
    $nickname = $_POST[$nickname_value];

    $password_value = 'password'.$value;
    $password = $_POST[$password_value];

    $name_value = 'name'.$value;
    $name = $_POST[$name_value];

    $address_value = 'address'.$value;
    $address = $_POST[$address_value];

    $number_value = 'number'.$value;
    $number = $_POST[$number_value];

    $email_value = 'email'.$value;
    $email = $_POST[$email_value];

    $query ="UPDATE `byuer` SET nickname='$nickname', password='$password', 
    name='$name', address='$address', number='$number', email='$email' WHERE ID='$value'";
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
$sel="SELECT COUNT(*) FROM `byuer`";
$res_count = mysqli_query($link, $sel);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($link, "SELECT * FROM `byuer` LIMIT $number, $limit");
// SELECT * FROM `users` ORDER BY ID, L_F_S, Address, Date_of_Birth, Phone, User_code LIMIT $number, $limit

  ?>
            <div class="marg col col-sm col-md col-lg col-xl mx-auto">
                <table class="col col-sm col-md col-lg col-xl mx-auto" border="0" width="99%">
                    <tbody>
                        <tr align="CENTER">
                            <td>ID</td>
                            <td>nickname</td>
                            <td>password</td>
                            <td>name</td>
                            <td>address</td>
                            <td>number</td>
                            <td>email</td>
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
                            <td><textarea name="nickname<?=$article['ID']?>"
                                    type="text"><?= $article['nickname'] ?></textarea></td>
                            <td> <textarea name="password<?=$article['ID']?>"
                                    type="text"><?= $article['password'] ?></textarea> </td>
                            <td> <textarea name="name<?=$article['ID']?>" type="text"><?= $article['name'] ?></textarea>
                            </td>
                            <td> <textarea class="textarea_address" name="address<?=$article['ID']?>"
                                    type="text"><?= $article['address'] ?></textarea> </td>
                            <td> <textarea name="number<?=$article['ID']?>"
                                    type="text"><?= $article['number'] ?></textarea> </td>
                            <td> <textarea name="email<?=$article['ID']?>"
                                    type="text"><?= $article['email'] ?></textarea> </td>
                            <td><input type="checkbox" class="checkbox" name="box[]" value="<?=$article['ID']?>" /></td>
                        </tr>
                    </tbody>
                </table>
                <? } ?>

                <button name='button' value='button'>Удалить</button> <br>
                <button name='change' value='change'>Изменить</button> <br>
                <? for ($i = 1; $i <=$str_pag; $i++){?>
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