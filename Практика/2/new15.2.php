<!DOCTYPE html>
<head>Загрузка  файлов на сервер
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
.d { 
    display:inline-block;
}
.f{
    position:absolute;
    margin-top:-170px;
    margin-left:650px;
}
</style>
</head>
<?php
			$search= !empty ($_POST['search']) ? $_POST['search']:''; /*фио  адрес статья закключения дата заклучения*/ 
            $search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
            $search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
            $search3= !empty ($_POST['search3']) ? $_POST['search3']:'';
            
            $name= !empty ($_POST['name']) ? $_POST['name']:'';
            $s= !empty ($_POST['s']) ? $_POST['s']:'';
            $s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
            $s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
            $s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
    

?>
  <form  action=""  method="post">
	 <!--Поиск-->
	<label for="search"> Введи ФИО</label> <input name="search" type="text" placeholder="ФИО" value='<?=$search?>'/> 
<?php if (empty($search)) { ?>
<div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
         <?php if (!empty($search)) {
         if (check_length($search, 2, 60)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'ФИО' количество символов от 2 до 60</b> </div>
<?php }} ?>
<br> 

    <label for="search1"> Введи регистрация по месту жительства </label> <input name="search1" type="text" placeholder="регистрация по месту жительства" value='<?=$search1?>'/> 
	<?php if (empty($search1)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
        <?php if (!empty($search1)){
        if (check_length($search1, 2, 60)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'регистрация по месту жительства' количество символов от 2 до 60</b> </div>
        <?php } } ?>
<br>

	<label for="search2"> Введи дата заключения под стражу </label> <input name="search2" type="date" placeholder="дата заключения под стражу" value='<?=$search2?>'/> 
	<?php if (empty($search2)) { ?> 
        <div class="d bg-danger text-warning"><b class='error'>Поле пустое</b> </div> <?php } ?>
<br>

	<label for="search3"> Введи статью заключения </label> <input name="search3" type="text" placeholder="статья заключение" value='<?=$search3?>'/> 
    <?php if (empty($search3)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>

 <?php if (is_numeric($search3)==false && !empty($search3)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'статью заключения' нужно ввести статью</b> </div>
<?php } ?> 

<br>
     <input  type="submit" name="unpack" value="Поиск"/>


      <!--Создание БД-->
      
      <div class="f">
    <label for="name"> Введи наименование таблицы</label> <input name="name" type="text" placeholder="наименование таблицы" value='<?=$name?>'/>
    <br>
    <?php if (is_numeric($name)==true && !empty($name)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'наименование таблицы' нужно ввести тескт на не число</b> </div><br>
<?php } ?> 
	<label for="s"> Введи ФИО</label> <input name="s" type="text" placeholder="ФИО" value='<?=$s?>'/> 
         <?php if (!empty($s)) {
         if (check_length($s, 2, 60)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'ФИО' количество символов от 2 до 60</b> </div>
<?php }} ?>
<br> 

    <label for="s1"> Введи регистрация по месту жительства </label> <input name="s1" type="text" placeholder="регистрация по месту жительства" value='<?=$s1?>'/> 
        <?php if (!empty($s1)){
        if (check_length($s1, 2, 60)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'регистрация по месту жительства' количество символов от 2 до 60</b> </div>
        <?php } } ?>
<br>

	<label for="s2"> Введи дата заключения под стражу</label> <input name="s2" type="date" placeholder="дата заключения под стражу" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи статью заключения </label> <input name="s3" type="text" placeholder="статья заключение" value='<?=$s3?>'/> 
   

    <?php if (is_numeric($s3)==false && !empty($s3)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'статью заключения' нужно ввести статью </b> </div>
<?php } ?>  

<br>
<input  type="submit" name="sk" value="Создать таблицу"/>
     
     </div>
     <!--end Создание БД-->
  </form>
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


if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3)) {
    if (check_length($search, 2, 60) && check_length($search1, 2, 60) && check_length($search2, 2, 60) && check_length($search3, 1, 10000) && is_numeric($search3)==true){
     ?>   <div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div> 
<?php
$search = clean($search); 
$search1 = clean($search1);
$search2 = clean($search2);
$search3 = clean($search3);
    }  
 }

else {
  ?>  <div class="d bg-danger text-warning" style="display:inline-block;"> <b>Заполните поля</b> </div>  <?php   
}



if (!empty($s) && !empty($s1) && !empty($s2) && !empty($s3)) {
    if (check_length($s, 2, 60) && check_length($s1, 2, 60) && check_length($s2, 2, 60) && check_length($s3, 1, 10000) && is_numeric($s3)==true){
     ?>  <center> <br><div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div></center>   <?php
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
    }  
 }

 $conn = mysqli_connect("localhost","root","","task15");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }


 $sql="CREATE TABLE $name (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, FIO varchar(60), 
                                    registration_at_the_place_of_residence varchar(60), 
									                                 date_of_detention, 
															article_conclusion text)";
 
$sql1="INSERT INTO $name (FIO,registration_at_the_place_of_residence,  date_of_detention,article_conclusion text) VALUES ('$s','$s1','$s2','$s3')";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
 mysqli_close($conn);


/*
1. Реализация заполнения полей через форму(в соответствии с вариантом)
2. Реализовать проверку данных и их соответствие правилу ввода для
каждого из полей.
3. Реализовать проверку на корректность тремя функциями php.

Имеются сведения об экспортируемых товарах: наименование, страна-экспортер,
срок поставки и количество товара. Вывести страны, в которые должен быть
поставлен данный товар до 1 июля.
*/
?>