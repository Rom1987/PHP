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

$name1=$_SESSION['name'];
$hash=$_SESSION['password'];

//admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];

if (isset($nameadmin) and isset($hashadmin)){
$_SESSION['a']=1;    
$_SESSION['name1']=$nameadmin;
$_SESSION['password1']=$hashadmin;
    include 'admin/adminpoisk2.php';   
}
//

if (isset($name1) and isset($hash)){
  $_SESSION['n']=1;
  ?>
  <div class="header">
      <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
      <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
      <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
      <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
      </div>
  <div class="poisk2">
  <?
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
    echo "<option class='text' value = '$object->id' > $object->Name </option>";
  }
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
$_SESSION['name']=$name1;
$_SESSION['password']=$hash;
}
if(!isset($name1) and !isset($nameadmin) or !isset($hashadmin) and !isset($hash) ){?>
  <div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>  
  <?}?>
</body>
</html>
</center>