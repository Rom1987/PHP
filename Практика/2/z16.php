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
    margin-left:550px;
}
</style>
</head>
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
        $search3= !empty ($_POST['search3']) ? $_POST['search3']:'';

        $s= !empty ($_POST['s']) ? $_POST['s']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
		$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';

?>
  <form  action="z16.php"  method="post">
	 <!--Поиск-->
	<label for="search"> Введи наименование</label> <input name="search" type="text" placeholder="наименование" value='<?=$search?>'/> 
<?php if (empty($search)) { ?>
<div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
         <?php if (!empty($search)) {
         if (check_length($search, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'наименование' количество символов от 2 до 20</b> </div>
<?php }} ?>
<br> 

    <label for="search1"> Введи страну-экспортер </label> <input name="search1" type="text" placeholder="страна-экспортер" value='<?=$search1?>'/> 
	<?php if (empty($search1)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
        <?php if (!empty($search1)){
        if (check_length($search1, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'страну-экспортер' количество символов от 2 до 20</b> </div>
        <?php } } ?>
<br>

	<label for="search2"> Введи срок поставки </label> <input name="search2" type="date" placeholder="срок поставки" value='<?=$search2?>'/> 
	<?php if (empty($search2)) { ?> 
        <div class="d bg-danger text-warning"><b class='error'>Поле пустое</b> </div> <?php } ?>
<br>

	<label for="search3"> Введи количество товара </label> <input name="search3" type="text" placeholder="количество товара" value='<?=$search3?>'/> 
    <?php if (empty($search3)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>

 <?php if (is_numeric($search3)==false && !empty($search3)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'количество товара' нужно ввести число</b> </div>
<?php } ?> 

<br>
     <input  type="submit" name="unpack" value="Поиск"/>


      <!--Создание БД-->
      
      <div class="f">
	<label for="s"> Введи наименование</label> <input name="s" type="text" placeholder="наименование" value='<?=$s?>'/> 

         <?php if (!empty($s)) {
         if (check_length($s, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'наименование' количество символов от 2 до 20</b> </div>
<?php }} ?>
<br> 

    <label for="s1"> Введи страну-экспортер </label> <input name="s1" type="text" placeholder="страна-экспортер" value='<?=$s1?>'/> 
        <?php if (!empty($s1)){
        if (check_length($s1, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'страну-экспортер' количество символов от 2 до 20</b> </div>
        <?php } } ?>
<br>

	<label for="s2"> Введи срок поставки </label> <input name="s2" type="date" placeholder="срок поставки" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи количество товара </label> <input name="s3" type="text" placeholder="количество товара" value='<?=$s3?>'/> 
   

 <?php if (is_numeric($s3)==false && !empty($s3)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'количество товара' нужно ввести число</b> </div>
<?php } ?> 

<br>
     <input  type="submit" name="unpack" value="Создать"/>
     
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
    if (check_length($search, 2, 20) && check_length($search1, 2, 20) && check_length($search2, 10, 10) && check_length($search3, 1, 10000) && is_numeric($search3)==true){
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
    if (check_length($s, 2, 20) && check_length($s1, 2, 20) && check_length($s2, 10, 10) && check_length($s3, 1, 10000) && is_numeric($s3)==true){
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div></center>   <?php
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
    }  
 }

 $conn = mysqli_connect("localhost","root","","z15");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }

 $sql="INSERT INTO z151 (Name, Export_country, Delivery_time, Quantity_of_goods) VALUES ('$s','$s1','$s2','$s3')";
 mysqli_query($conn, $sql);
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