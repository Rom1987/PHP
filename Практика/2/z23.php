<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<form action="" method="GET">
<p>Сортировка таблицы по убыванию:</p>
    <select name="age" id="">
        <option value="1">id</option>
        <option value="2">Name</option>
        <option value="3">Export_country</option>
        <option value="4">Delivery_time</option>
        <option value="5">Quantity_of_goods</option>
    </select>
    <br>
    <input name="button" value="Сортировать" type="submit">
    <p>Сортировка таблицы по возрастанию:</p>
    <select name="age1" id="">
        <option value="1">id</option>
        <option value="2">Name</option>
        <option value="3">Export_country</option>
        <option value="4">Delivery_time</option>
        <option value="5">Quantity_of_goods</option>
    </select>
    <br>
    <input name="button1" value="Сортировать" type="submit">
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
                                      while($article = mysqli_fetch_assoc($query)){
                                           echo '<table border=1>';
                                           echo '<tr>'."<td>".$article['id']."</td>"."<td>".$article['Name']."</td>"."<td>".$article['Export_country']."</td>"."<td>".$article['Delivery_time']."</td>"."<td>".$article['Quantity_of_goods']."</td>".'</tr>';
                                           echo '</table>';
                                       }
                                   ?>
</center>