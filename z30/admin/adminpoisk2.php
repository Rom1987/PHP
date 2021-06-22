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
 

<div class="poisk2">
<?php
  // Подключение к базе данных MySQL.
  $link = mysqli_connect("localhost","root","","z15");
  if (!$link) {
  echo "Ошибка соединения с сервером MySQL!";
  exit;
  }
// изменение набора символов на utf8
  mysqli_set_charset($link, "utf8");
// Выбираем БД для работы в MySQL.
  $db_select = mysqli_select_db ($link, "z15");
    if (!$db_select) {
    echo "Не удалось выбрать БД MySQL.";
    exit;
    }
// Делаем выборку из таблицы.
  $sql = "SELECT * FROM `z151`";
  $result_select = mysqli_query($link, $sql);
  echo '<form action="" method="get">';
  	echo "<select class='box text' name = 'age'>";
  	echo "<option class='text' value='0'>Выбор</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option class='text' value = '$object->id' > $object->Name </option>";}
  echo "</select>";
  echo '<button  type="submit" name="unpack" value="Отправить">Отправить</button>';
  echo '</form>';
  
 $query = mysqli_query($link, 'SELECT COUNT(*) FROM z151'); 
$count = mysqli_fetch_row($query)[0];

if (isset($_REQUEST['age'])){
for ($i=1; $i<=$count; $i++){
    if ($_REQUEST['age']==$i){
        $sql1="SELECT * FROM `z151` WHERE id='$i'";
  $c= mysqli_query($link, $sql1);?>
  </div>
  <?
  while($article=mysqli_fetch_assoc($c)){ ?>
    <div class="result">
   <table border="0" width="99%" bgcolor="lime"> 
   <tbody> 
   <tr bgcolor="yellow" class="text" align="CENTER"> 
     <td><?echo $article['id']?></td> 
     <td><?echo $article['Name']?></td> 
     <td><?echo $article['Export_country']?></td> 
     <td><?echo $article['Delivery_time']?></td> 
     <td><?echo $article['Quantity_of_goods']?></td> 
    </tr> 
</tbody>
</table>
  </div>
  <?}
    }
}
}
}
else{?><div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>  <?}?>
</body>
</html>
</center>