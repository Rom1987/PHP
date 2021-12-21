<?
session_start();
?>
<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="ctill.css">
<style>
.dostyp{
margin-top: 20%;
}
</style>
</head>
<body>
<?
if (isset($nameadmin) and isset($hashadmin)){?>
    <div class="header">  
         <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
         <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
         <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
         <div class="header-1 kvasov-link"><a href="save.php">Создание<a> </div>
         <div class="header-1 kvasov-link"> <a href="delete.php">Удаление<a> </div>
         <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
         <div class="header-1 kvasov-link"> <a href="polzovatel.php">Пользователи<a></div>
         <div class="header-1 kvasov-link"> <a href="coppol.php">Сортир. польз.<a></div>
         <div class="header-1 kvasov-link"> <a href="pdelete.php">Удаление польз.<a></div>
        </div>
<div class="blocks2">
<form action="" method="GET">
<p class="text">Сортировка таблицы по убыванию:</p>
    <select name="age" class='text box1'id="">
        <option class='text' value="1">id</option>
        <option class='text' value="2">Name</option>
        <option class='text' value="3">Export_country</option>
        <option class='text' value="4">Delivery_time</option>
        <option class='text' value="5">Quantity_of_goods</option>
    </select>
    <br>
    <button  type="submit" name="button" value="Сортировка">Сортировка</button>
    <p class="text">Сортировка таблицы по возрастанию:</p>
    <select name="age1" class='text box1' id="">
        <option class='text' value="1">id</option>
        <option class='text' value="2">Name</option>
        <option class='text' value="3">Export_country</option>
        <option class='text' value="4">Delivery_time</option>
        <option class='text' value="5">Quantity_of_goods</option>
    </select>
    <br>
    <button  type="submit" name="button1" value="Сортировка">Сортировка</button>
</form>
<?php
                                   $db_server="localhost"; //хост
                                   $db_user ="root"; //пользователь
                                   $db_password =""; //пароль
                                   $db_name ="z15"; // Имя базы данных
                                   // Пытаемся соединиться
                                   $mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
                                   
                                    if(!isset($_REQUEST['age']) && !isset($_REQUEST['age1']) ){
                                        $connection = mysqli_connect("localhost","root","","z15");
                                        $query = mysqli_query($connection,"SELECT * FROM `z151`"); 
                                        mysqli_close($connection);
                                    }

                                    if(isset($_GET['button'])){
                                        $query=myfunc();
                                        }
                                        if(isset($_GET['button1'])){
                                            $query=myfunc1();
                                            }

                                  ?>
                                    </div>
                                    <div class="marg1"><?
                                      while($article = mysqli_fetch_assoc($query)){?>
                                         <table class="table-hover table-dark" border="0" width="99%">
                                        <tbody> 
                                         <tr bgcolor="lime" align="CENTER"> 
                                          <td><?echo $article['id']?></td> 
                                          <td><?echo $article['Name']?></td> 
                                          <td><?echo $article['Export_country']?></td> 
                                          <td><?echo $article['Delivery_time']?></td> 
                                          <td><?echo $article['Quantity_of_goods']?></td> 
                                         </tr> 
                                     </tbody>
                                     </table>   
                                       <?}
                                       }
                                       else{?>
                                        <div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>  
                                        <?}?>   
                                       </body>
                                       </html>