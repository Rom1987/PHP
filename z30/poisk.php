<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ctill.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<style>
.blocks{
background-color: yellow;
border-radius: 20px;
border: 10px ridge DeepSkyBlue; 
margin-top: 50px;
padding-top: 25px;
width: 600px;
height: 380px;
}
    </style>
<div class="header"> 
    <div class="header-1">
        <a href="#">Сcылка<a>
        <a href="#">Ссылка2<a>
        <a href="#">Ссылка3<a>
    </div>
    <div class="header-2">
        <a href="#">Ссылка4<a>
        <a href="#">Сcылка5<a>
        <a href="#">Сcылка6<a>
    </div>
</div>
<div class="blocks">
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
        $search3= !empty ($_POST['search3']) ? $_POST['search3']:'';
?>
  <form  action=""  method="post">
	 <!--Поиск-->
	 <div>
	<label for="search"> Введи наименование</label> <input name="search" type="text" placeholder="наименование" value='<?=$search?>'/> 
       <br> 

    <label for="search1"> Введи страну-экспортер </label> <input name="search1" type="text" placeholder="страна-экспортер" value='<?=$search1?>'/> 
       
<br>

	<label for="search2"> Введи срок поставки </label> <input name="search2" type="date" placeholder="срок поставки" value='<?=$search2?>'/> 
<br>

	<label for="search3"> Введи количество товара </label> <input name="search3" type="text" placeholder="количество товара" value='<?=$search3?>'/> 
   <br>
   <div class="err">
   <b style="color:yellow">Ошибки:</b>
    <?php if (is_numeric($name)==true && !empty($name)){?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'наименование таблицы' нужно ввести текст, а не число</b></div>
<?php } ?> 

 <?php if (is_numeric($search3)==false && !empty($search3)){?>
 <div class="bg-danger text-warning"> <b class='error'>В поле 'количество товара' нужно ввести число</b> </div>
<?php } ?> 

<?php if (!empty($search) && check_length($search, 2, 20)==false) {?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'наименование' количество символов от 2 до 20</b> </div> 
<?php }?>
<?php if (empty($search2)) {?>
<div class="bg-danger text-warning"> <b class='error'>Поле 'срок поставки' не заполнена</b> </div> 
<?php }?>
<?php if (!empty($search1) && check_length($search1, 2, 20)==false){?>
<div class="bg-danger text-warning"> <b class='error'>В поле 'страну-экспортер' количество символов от 2 до 20</b> </div>
<?php }
 if(empty($search) && empty($search1) && empty($search2) && empty($search3) 
 or is_numeric($search3)==true && !empty($search3) && !empty($search) && check_length($search, 2, 20)==true && !empty($search1) && check_length($search1, 2, 20)==true){?>
 <div class="err2">
<div class="bg-danger text-warning"> <b class='error'>Ошибок нет</b> </div>
</div>
<?php } ?>
</div>
     <input  type="submit" name="unpack" value="Поиск"/>
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
     ?>  <br> <div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div>  <br> <?php
$search = clean($search); 
$search1 = clean($search1);
$search2 = clean($search2);
$search3 = clean($search3);
    }  
 }

$db_server="localhost"; //хост
$db_user ="root"; //пользователь
$db_password =""; //пароль
$db_name ="z15"; // Имя базы данных
// Пытаемся соединиться
$mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
// Проверяем, удалось ли соединение
if (mysqli_connect_errno())
{
echo "Ошибка подключения <br>";
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
else
{
// Устанавливаем кодировку подключения
$mysqli->set_charset('utf8');
// Формируем запрос 
$sql ="SELECT * FROM `z151` WHERE `name`='$search' and `Export_country`='$search1' and `Delivery_time`='$search2' and `Quantity_of_goods`='$search3'";
$result = $mysqli->query($sql);
// Перебор результата
while($row = $result->fetch_object())
{?>
<div class="result">
<table border="0" width="99%" bgcolor="lime"> 
   <tbody> 
    <tr bgcolor="lime" align="CENTER"> 
     <td><?print $row->Name?></td> 
     <td><?print $row->Export_country?></td> 
     <td><?print $row->Delivery_time?></td> 
     <td><?print $row->Quantity_of_goods?></td> 
    </tr> 
</tbody>
</table>
</div>
<?
}
}
// Освобождаем память
$result->free();
// Закрываем соединение
$mysqli->close();
?>
</div>
</body>
</html>
</center>