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
        <option value="2">first_name</option>
        <option value="3">name</option>
        <option value="4">surname</option>
        <option value="5">date_born</option>
		<option value="6">adrres</option>
        <option value="7">ununderlying_disease </option>
		<option value="8">date_of_last_visit_a_doctor</option>
    </select>
    <br>
    <input name="button" value="Сортировать" type="submit">
    <p>Сортировка таблицы по возрастанию:</p>
    <select name="age1" id="">
        <option value="1">id</option>
        <option value="2">first_name</option>
        <option value="3">name</option>
        <option value="4">surname</option>
        <option value="5">date_born</option>
		<option value="6">adrres</option>
        <option value="7">ununderlying_disease </option>
		<option value="8">date_of_last_visit_a_doctor</option>
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
                                        $query = mysqli_query($connection,"SELECT * FROM `task15`"); 
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
                                            return $query=mysqli_query($connection, "SELECT * FROM `task15` ORDER BY id desc");
                                            }    
                                            if($_REQUEST['age']==2){      
                                              return  $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY first_name desc");
                                                }   
                                                if($_REQUEST['age']==3){      
                                                   return $query=mysqli_query($connection, "SELECT * FROM `task15` ORDER BY name desc");
                                                    }   
                                                    if($_REQUEST['age']==4){      
                                                        return  $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY surname desc");
                                                        }   
                                                        if($_REQUEST['age']==5){      
                                                            return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY date_born  desc");
                                                            }
															if($_REQUEST['age']==6){      
                                                                return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY adrres desc");
                                                                } 
																if($_REQUEST['age']==7){      
                                                                    return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY underlying_disease desc");
                                                                    }   
																	if($_REQUEST['age']==8){      
                                                                        return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY date_of_last_visit_a_doctor desc");
                                                                        }  

                                                            mysqli_close($connection);
                                    }
                                    function myfunc1(){
                                        $connection = mysqli_connect("localhost","root","","z15");
                                        if($_REQUEST['age1']==1){      
                                            return $query=mysqli_query($connection, "SELECT * FROM `task15` ORDER BY id");
                                            }    
                                            if($_REQUEST['age1']==2){      
                                              return  $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY first_name");
                                                }   
                                                if($_REQUEST['age1']==3){      
                                                   return $query=mysqli_query($connection, "SELECT * FROM `task15` ORDER BY name");
                                                    }   
                                                    if($_REQUEST['age1']==4){      
                                                        return  $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY surname");
                                                        }   
                                                        if($_REQUEST['age1']==5){      
                                                            return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY date_born");
                                                            }
															if($_REQUEST['age1']==6){      
                                                                return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY adrres");
                                                                } 
																if($_REQUEST['age1']==7){      
                                                                    return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY ununderlying_disease");
                                                                    }   
																	if($_REQUEST['age1']==8){      
                                                                        return $query = mysqli_query($connection, "SELECT * FROM `task15` ORDER BY date_of_last_visit_a_doctor");
                                                                        }  

                                    }
                                
                                      while($article = mysqli_fetch_assoc($query)){
                                           echo '<table border=1>';
                                           echo '<tr>'.
										   "<td>".$article['id']."</td>".
										   "<td>".$article['first_name']."</td>".
										   "<td>".$article['name']."</td>".
										   "<td>".$article['surname']."</td>".
										   "<td>".$article['date_born']."</td>".
										   "<td>".$article['adrres']."</td>".
										   "<td>".$article['ununderlying_disease']."</td>".
										   "<td>".$article['date_of_last_visit_a_doctor']."</td>".'</tr>';
                                           echo '</table>';
                                
                                       }
                                   ?>
</center>