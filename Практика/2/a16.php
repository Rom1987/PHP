<?php
$s7= !empty ($_POST['s7']) ? $_POST['s7']:'';
$s= !empty ($_POST['s']) ? $_POST['s']:'';
$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
$s4= !empty ($_POST['s4']) ? $_POST['s4']:'';
$s5= !empty ($_POST['s5']) ? $_POST['s5']:'';
$s6= !empty ($_POST['s6']) ? $_POST['s6']:'';
?>
<form action="a16.php" method="post">
<!--Создание-->
<label for="s7"> Введи id</label> <input name="s7" type="int" placeholder="id" value='<?=$s7?>'/> <br>
<label for="s"> Введи Фамилию</label> <input name="s" oncheck="color_();" type="text" placeholder="Фамилию" value='<?=$s?>'/> <br>
<label for="s1"> Введи Имя</label> <input name="s1" oncheck="color_();" type="text" placeholder="Имя" value='<?=$s1?>'/> <br>
<label for="s2"> Введи Отчество</label> <input name="s2" oncheck="color_();" type="text" placeholder="Отчество" value='<?=$s2?>'/> <br>
<label for="s3"> Введи должность</label> <input name="s3" type="text" placeholder="должность" value='<?=$s3?>'/> <br>
<label for="s4"> Введи год рождения </label> <input name="s4" type="date" placeholder="год рождения" value='<?=$s4?>'/> <br>
<label for="s5"> Введи стаж</label> <input name="s5" type="text" placeholder="стаж" value='<?=$s5?>'/> <br>
<label for="s6"> Введи образование</label> <input name="s6" type="text" placeholder="образование" value='<?=$s6?>'/> <br>
<input type="submit" name="unpack" value="Отправить"/>
</form>
<?php
function clean($value)
{
$value = trim($value);
$value = stripslashes($value);
$value = strip_tags($value);
$value = htmlspecialchars($value);
return $value;
}
function check_length($value, $min, $max)
{
$result = (mb_strlen($value) >= $min and mb_strlen($value) <= $max);
return $result;
}
if (is_numeric($s5)==false && !empty($s5))
{
echo "В поле 'стаж' нужно ввести число"."<br>";
}
if (!empty($s) && !empty($s1) && !empty($s4) && !empty($s3) && !empty($se4))
{
if (check_length($s, 2, 50)==false)
{
echo "В поле 'ФИО' количество символов от 2 до 50"."<br>";
}
if (check_length($s3, 2, 50)==false)
{
echo "В поле 'должность' количество символов от 2 до 50"."<br>";
}
if (check_length($s4, 2, 50)==false)
{
echo "В поле 'образование' количество символов от 2 до 50"."<br>";
}
if (check_length($s, 2, 50) && check_length($s1, 2, 50) && check_length($s4, 10, 10)
&& check_length($s5, 1, 5) && check_length($s6, 2, 50) && is_numeric($s5)==true){
echo "Спасибо за данные"."<br>";

$s7 = clean($s7);
$s = clean($s);
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);
$s5 = clean($s);
$s6 = clean($s);
}
}
else {
echo "Заполните поля.<br>";
}



$conn = mysqli_connect("localhost","root","","sotrudniki");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO sotrudniki (id, name, surname, Middle_name, year_of_birth, position, experience, education) VALUES ('$s7','$s','$s1','$s2','$s3','$s4','$s5','$s6')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>