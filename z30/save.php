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
<?php echo file_get_contents("ctill.css");?>
</style>
</head>
<body>
    <?php
    function clean($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    function check_length($value, $min, $max) {
        $result = (mb_strlen($value) >= $min and mb_strlen($value) <= $max);
        return $result;
    }
     //admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];

if (isset($nameadmin) and isset($hashadmin)){
$_SESSION['a']=1;    
$_SESSION['name1']=$nameadmin;
$_SESSION['password1']=$hashadmin;
//
?>
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

<div class="blocks">
<?php
            $name= !empty ($_POST['name']) ? $_POST['name']:'';
            $s= !empty ($_POST['s']) ? $_POST['s']:'';
            $s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
            $s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
            $s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
    

?>
  <form  action=""  method="post">

      <!--Создание БД-->
      
      <div class="text">
    <label for="name"> Введи наименование таблицы</label> <input name="name" type="text" placeholder="наименование таблицы" value='<?=$name?>'/>
    <br>
    
	<label for="s"> Введи наименование</label> <input name="s" type="text" placeholder="наименование" value='<?=$s?>'/> 
       <br> 

    <label for="s1"> Введи страну-экспортер </label> <input name="s1" type="text" placeholder="страна-экспортер" value='<?=$s1?>'/> 
       
<br>

	<label for="s2"> Введи срок поставки </label> <input name="s2" type="date" placeholder="срок поставки" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи количество товара </label> <input name="s3" type="text" placeholder="количество товара" value='<?=$s3?>'/> 
   <br>

   <div class="err">
   <b style="color:yellow">Ошибки:</b>
    <?php if (is_numeric($name)==true && !empty($name)){?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'наименование таблицы' нужно ввести текст, а не число</b></div>
<?php } ?> 

 <?php if (is_numeric($s3)==false && !empty($s3)){?>
 <div class="bg-danger text-warning"> <b class='error'>В поле 'количество товара' нужно ввести число</b> </div>
<?php } ?> 

<?php if (!empty($s) && check_length($s, 2, 20)==false) {?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'наименование' количество символов от 2 до 20</b> </div> 
<?php }?>

<?php if (!empty($s1) && check_length($s1, 2, 20)==false){?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'страну-экспортер' количество символов от 2 до 20</b> </div>
<?php }
 if(empty($name) && empty($s) && empty($s1) && empty($s2) && empty($s3) or is_numeric($name)==false && !empty($name) && is_numeric($s3)==true && !empty($s3) && !empty($s) && check_length($s, 2, 20)==true && !empty($s1) && check_length($s1, 2, 20)==true){?>
 <div class="err2">
<div class="bg-danger text-warning"> <b class='error'>Ошибок нет</b> </div>
</div>
<?php } ?>
</div>
<button  type="submit" name="unpack" value="Создать таблицу">Создать таблицу</button>
     </div>
     <!--end Создание БД-->

     </div>
  </form>
<?php

/*
else {
  ?>  <div class="d bg-danger text-warning" style="display:inline-block;"> <b>Заполните поля</b> </div>  <?php   
}
*/


if (!empty($s) && !empty($s1) && !empty($s2) && !empty($s3)) {
    if (check_length($s, 2, 20) && check_length($s1, 2, 20) && check_length($s2, 10, 10) && check_length($s3, 1, 10000) && is_numeric($s3)==true){
     ?>  <center> <br><div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div></center>   <?php
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
    }  
 }

 $conn = mysqli_connect("localhost","root","", 'z15');

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }


 $sql="CREATE TABLE $name (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, Name varchar(20), Export_country varchar(20), Delivery_time date, Quantity_of_goods int(255))";
$sql1="INSERT INTO $name (Name, Export_country, Delivery_time, Quantity_of_goods) VALUES ('$s','$s1','$s2','$s3')";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
mysqli_close($conn);
?>
</div>
<?}
else{?>
    <div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>   
<?}?>
</body>
</html>
</center>