<!DOCTYPE html>
<head>Загрузка  файлов на сервер</head>
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
		$search3= !empty ($_POST['search3']) ? $_POST['search3']:'';

?>
  <form  action="z16(2).php"  method="post">
	 <!--Поиск-->
	<label for="search"> Введи наименование</label> <input name="search" oncheck="color_();" type="text" placeholder="наименование" value='<?=$search?>'/> <br> 
    <label for="search1"> Введи страну-экспортер </label> <input name="search1" type="text" placeholder="страна-экспортер" value='<?=$search1?>'/> <br>
	<label for="search2"> Введи срок поставки </label> <input name="search2" type="date" placeholder="срок поставки" value='<?=$search2?>'/> <br>
	<label for="search3"> Введи количество товара </label> <input name="search3" type="text" placeholder="количество товара" value='<?=$search3?>'/> <br>

    <label for="s"> Введи наименование</label> <input name="s" oncheck="color_();" type="text" placeholder="наименование" value='<?=$s?>'/> <br> 
    <label for="s1"> Введи страну-экспортер </label> <input name="s1" type="text" placeholder="страна-экспортер" value='<?=$s1?>'/> <br>
	<label for="s2"> Введи срок поставки </label> <input name="s2" type="date" placeholder="срок поставки" value='<?=$s2?>'/> <br>
	<label for="s3"> Введи количество товара </label> <input name="s3" type="text" placeholder="количество товара" value='<?=$s3?>'/> <br>
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


if (is_numeric($search3)==false && !empty($search3)){
    echo "В поле 'количество товара' нужно ввести число"."<br>";
} 





if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3)) {


    if (check_length($search, 2, 20)==false){
echo "В поле 'наименование' количество символов от 2 до 20"."<br>";
    }
    
    if (check_length($search1, 2, 20)==false){
        echo "В поле 'страну-экспортер' количество символов от 2 до 20"."<br>";
            }
           

    if (check_length($search, 2, 20) && check_length($search1, 2, 20) && check_length($search2, 10, 10) && check_length($search3, 1, 10000) && is_numeric($search3)==true){
    
        echo "Спасибо за сообщение"."<br>";
$search = clean($search); 
$search1 = clean($search1);
$search2 = clean($search2);
$search3 = clean($search3);
    }  
 }

else {
    echo "Заполните поля";
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
{
print $row->Name.'<br>';
print $row->Export_country.'<br>';
print $row->Delivery_time.'<br>';
print $row->Quantity_of_goods.'<br>';
}
}
// Освобождаем память
$result->free();
$mysqli->close();




$dbc=mysqli_connect('localhost','root','','z15');
//if(isset($_POST['unpack'])){
//$s=mysqli_real_escape_string($dbc, trim($_POST['s']));
//$s1=mysqli_real_escape_string($dbc, trim($_POST['s1']));
//$s2=mysqli_real_escape_string($dbc, trim($_POST['s2']));
//$s3=mysqli_real_escape_string($dbc, trim($_POST['s3']));
//if(!empty($s) && !empty($s1) && !empty($s2) && !empty($s3)){
$query="SELECT * FROM 'z151'";
print_r($query);
$data=mysqli_query($dbc,$query);
//if(mysqli_num_rows($data)==0){
$query="INSERT INTO 'z151'(`Name`, `Export_country`, `Quantity_of_goods`) VALUES ('123','234','9877')";
mysqli_query($dbc,$query);
print_r ($query);
mysqli_close($dbc);
exit();
//}
/*else{
echo 'логин уже существует';
}*/
//}
//}

?>