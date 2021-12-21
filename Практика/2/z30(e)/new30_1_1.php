<center>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="new2.css">
</head>
<html>
<body background=https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg> 
<div class="block1">
<?php
  // Подключение к базе данных MySQL.
  $link = mysqli_connect("localhost","root","","task15");
  if (!$link) {
  echo "Ошибка соединения с сервером MySQL!";
  exit;
  }
// изменение набора символов на utf8
  mysqli_set_charset($link, "utf8");
// Выбираем БД для работы в MySQL.
  $db_select = mysqli_select_db ($link, "task15");
    if (!$db_select) {
    echo "Не удалось выбрать БД MySQL.";
    exit;
    }
// Делаем выборку из таблицы.
  $sql = "SELECT * FROM `hospital`";
  $result_select = mysqli_query($link, $sql);
  echo '<form action="" method="get">';
  echo "<select name = 'age'>";
  	echo "<option value='0'>Выбор</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id' > $object->first_name </option>";}
  	echo "</select>";
	  echo '<input type="submit">';
  echo '</form>';
  
 $query = mysqli_query($link, 'SELECT COUNT(*) FROM `hospital`'); 
$count = mysqli_fetch_row($query)[0];

if (isset($_REQUEST['age'])){
for ($i=1; $i<=$count; $i++){
    if ($_REQUEST['age']==$i){
        $sql1="SELECT * FROM `hospital` WHERE id='$i'";
  $c= mysqli_query($link, $sql1);
  while($article=mysqli_fetch_assoc($c)){
    echo '<table border=1>';
   echo '<tr>'."<td>".$article['id']."</td>".
	            "<td>".$article['first_name']."</td>".
				"<td>".$article['surname']."</td>".
				"<td>".$article['date_born']."</td>".
				"<td>".$article['adrres']."</td>".
				"<td>".$article['underlying_disease ']."</td>".
				"<td>".$article['date_of_last_visit_a_doctor']."</td>".
				'</tr>';
    echo '</table>';
  }
    }
}
}

?>
<br>
<a href="new30.1.php">Выход в меню информации из БД</a><BR>
<a href="new30.php">Выход на главную страничку </a>
</div>

</body>
</html>
</center>