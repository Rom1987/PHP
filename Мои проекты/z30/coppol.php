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
    <style>
<?php echo file_get_contents("ctill.css");
echo file_get_contents("tab.css") ?>
</style>
</head>
<body>
<?
function myfunc(){
    $connection = mysqli_connect("localhost","root","","polzovatel");
    if($_REQUEST['age']==1){      
        return $query=mysqli_query($connection, "SELECT * FROM `polzovatel` ORDER BY id desc");
        }    
        if($_REQUEST['age']==2){      
          return  $query = mysqli_query($connection, "SELECT * FROM `polzovatel` ORDER BY name desc");
            }   
                        mysqli_close($connection);
}
function myfunc1(){
    $connection = mysqli_connect("localhost","root","","polzovatel");
    if($_REQUEST['age1']==1){      
        return $query = mysqli_query($connection, "SELECT * FROM `polzovatel` ORDER BY id");
        }    
        if($_REQUEST['age1']==2){      
            return $query = mysqli_query($connection, "SELECT * FROM `polzovatel` ORDER BY name");
            } 
                        mysqli_close($connection);
}


$name1=$_SESSION['name'];
$hash=$_SESSION['password'];

//admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];

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
      </select>
      <br>
      <button  type="submit" name="button" value="Сортировка">Сортировка</button>
      <p class="text">Сортировка таблицы по возрастанию:</p>
      <select name="age1" class='text box1' id="">
          <option class='text' value="1">id</option>
          <option class='text' value="2">Name</option>
      </select>
      <br>
      <button  type="submit" name="button1" value="Сортировка">Сортировка</button>
  </form>
  <?php
                                     $db_server="localhost"; //хост
                                     $db_user ="root"; //пользователь
                                     $db_password =""; //пароль
                                     $db_name ="polzovatel"; // Имя базы данных
                                     // Пытаемся соединиться
                                     $mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
                                     
                                      if(!isset($_REQUEST['age']) && !isset($_REQUEST['age1']) ){
                                          $connection = mysqli_connect("localhost","root","","polzovatel");
                                          $query = mysqli_query($connection,"SELECT * FROM `polzovatel`"); 
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
                                            <td><?echo $article['name']?></td> 
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

</center>