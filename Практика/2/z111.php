<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
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

echo "<select name = '1'>";
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
</center>
