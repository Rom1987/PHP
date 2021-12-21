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
<?php
echo file_get_contents("ctill.css");
echo file_get_contents("tab.css") ?>
</style>
</head>
<body>
<?
function myfunc(){
    $connection = mysqli_connect("localhost","root","","z15");
    if($_REQUEST['age']==1){      
        return $query=mysqli_query($connection, "SELECT * FROM `z151` ORDER BY id desc");
        }    
        if($_REQUEST['age']==2){      
          return  $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Name desc");
            }   
            if($_REQUEST['age']==3){      
               return $query=mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Export_country desc");
                }   
                if($_REQUEST['age']==4){      
                    return  $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Delivery_time desc");
                    }   
                    if($_REQUEST['age']==5){      
                        return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Quantity_of_goods desc");
                        }  
                        mysqli_close($connection);
}
function myfunc1(){
    $connection = mysqli_connect("localhost","root","","z15");
    if($_REQUEST['age1']==1){      
        return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY id");
        }    
        if($_REQUEST['age1']==2){      
            return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Name");
            }   
            if($_REQUEST['age1']==3){      
                return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Export_country");
                }   
                if($_REQUEST['age1']==4){      
                    return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Delivery_time");
                    }   
                    if($_REQUEST['age1']==5){      
                        return $query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY Quantity_of_goods");
                        }  
                        mysqli_close($connection);
}


$name1=$_SESSION['name'];
$hash=$_SESSION['password'];

//admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];

if (isset($nameadmin) and isset($hashadmin)){
$_SESSION['a']=1;    
$_SESSION['name1']=$nameadmin;
$_SESSION['password1']=$hashadmin;
include 'admin/admincoptipovka.php';   
}
//

if (isset($name1) and isset($hash)){
$_SESSION['n']=1;
$_SESSION['name']=$name1;
$_SESSION['password']=$hash;
?>
  <div class="header kvasov-link">
      <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
      <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
      <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
      <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
      </div>

<div class="blocks2 text">
<form action="" method="GET">
<p>Сортировка таблицы по убыванию:</p>
    <select class='box1 text' name="age" id="">
        <option class='text' value="1">id</option>
        <option class='text' value="2">Name</option>
        <option class='text' value="3">Export_country</option>
        <option class='text' value="4">Delivery_time</option>
        <option class='text' value="5">Quantity_of_goods</option>
    </select>
    <br>
    <button  type="submit" name="button" value="Сортировать">Сортировать</button>
    <p>Сортировка таблицы по возрастанию:</p>
    <select class='box1 text' name="age1" id="">
        <option class='text' value="1">id</option>
        <option class='text' value="2">Name</option>
        <option class='text' value="3">Export_country</option>
        <option class='text' value="4">Delivery_time</option>
        <option class='text' value="5">Quantity_of_goods</option>
    </select>
    <br>
    <button  type="submit" name="button1" value="Сортировать">Сортировать</button>
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
                                       <?}?> 
                                       </div>
                                     <?  
}
if(!isset($name1) and !isset($nameadmin) or !isset($hashadmin) and !isset($hash) ){?>
<div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>  
<?}?>
                                   </body>
                                   </html>

</center>