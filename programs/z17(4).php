<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php
$db_server="localhost"; //хост
$db_user ="root"; //пользователь
$db_password =""; //пароль
$db_name ="z15"; // Имя базы данных
// Пытаемся соединиться
$mysqli = new mysqli($db_server, $db_user, $db_password, $db_name);
$connection = mysqli_connect("localhost","root","","z15");

if (isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 1;
}
$limit = 3;
$number = ($page * $limit) - $limit;
$sel="SELECT COUNT(*) FROM `z151`";
$res_count = mysqli_query($connection, $sel);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY id, Name, Export_country, Delivery_time, Quantity_of_goods LIMIT $number, $limit");


while($article = mysqli_fetch_assoc($query)){
	echo '<table border=1>';
	echo '<tr>'."<td>".$article['id']."</td>"."<td>".$article['Name']."</td>"."<td>".$article['Export_country']."</td>"."<td>".$article['Delivery_time']."</td>"."<td>".$article['Quantity_of_goods']."</td>".'</tr>';
	echo '</table>';
}
for ($i = 1; $i <=$str_pag; $i++){
	echo "<a href=?page=".$i.">".$i."</a>";
}	
mysqli_close($connection);
?>
</center>