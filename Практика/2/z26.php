<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
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
  	echo "<select name = 'age'>";
  	echo "<option value='0'>Выбор</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id' > $object->Name </option>";}
  echo "</select>";
  echo '<input type="submit">';
  echo '</form>';
  
 $query = mysqli_query($link, 'SELECT COUNT(*) FROM z151'); 
$count = mysqli_fetch_row($query)[0];

if (isset($_REQUEST['age'])){
for ($i=1; $i<=$count; $i++){
    if ($_REQUEST['age']==$i){
        $sql1="SELECT * FROM `z151` WHERE id='$i'";
  $c= mysqli_query($link, $sql1);
  while($article=mysqli_fetch_assoc($c)){
    echo '<table border=1>';
    echo '<tr>'."<td>".$article['id']."</td>"."<td>".$article['Name']."</td>"."<td>".$article['Export_country']."</td>"."<td>".$article['Delivery_time']."</td>"."<td>".$article['Quantity_of_goods']."</td>".'</tr>';
    echo '</table>';
  }
    }
}
}
?>
</center>