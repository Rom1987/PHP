<center>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="new4.css">
</head>
<html>
<body background=https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg> 
<div class="block1">
<?php
$search= !empty ($_POST['search']) ? $_POST['search']:'';
$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
$search3= !empty ($_POST['search3']) ? $_POST['search3']:'';

$search4= !empty ($_POST['search4']) ? $_POST['search4']:'';
$search5= !empty ($_POST['search5']) ? $_POST['search5']:'';
$search6= !empty ($_POST['search6']) ? $_POST['search6']:'';

?>
<form action="new30.1.3.php" method="post">
<!--Поиск-->
<label for="search"> Введи фамилию</label> <input name="search" oncheck="color_();" type="text" placeholder="фамилие" value='<?=$search?>'/> <br>
<label for="search1"> Введи имя</label> <input name="search1" type="text" placeholder="имя" value='<?=$search1?>'/> <br>
<label for="search2"> Введи отчество</label> <input name="search2" type="text" placeholder="отчество" value='<?=$search2?>'/> <br>
<label for="search3"> Введи год рождения</label> <input name="search3" type="date" placeholder="год рождения" value='<?=$search3?>'/> <br>

<label for="search4"> Введи адрес</label> <input name="search4" type="text" placeholder="адрес" value='<?=$search4?>'/> <br>
<label for="search5"> Введи основное заболевание</label> <input name="search5" type="text" placeholder="основное заболевание" value='<?=$search5?>'/> <br>
<label for="search6"> Введи дату последнего посещения лечащего врача</label> <input name="search6" type="date" placeholder="дата последнего посещения лечащего врача" value='<?=$search6?>'/> <br>
<input type="submit" name="unpack" value="Поиск"/>
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
echo "В поле 'год рождения' нужно ввести число"."<br>";
}
if ($search3>2020){
echo "Поздравляю вы из будущего. Исправьте поле 'год рождения'"."<br>";
}




if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3) && !empty($search4) && !empty($search5) && !empty($search6)) {


if (check_length($search, 2, 20)==false){
echo "В поле 'фамилию' количество символов от 2 до 20"."<br>";
}

if (check_length($search1, 2, 20)==false){
echo "В поле 'имя' количество символов от 2 до 20"."<br>";
}
if (check_length($search2, 2, 20)==false){
echo "В поле 'отчество' количество символов от 2 до 20"."<br>";
}
if (check_length($search4, 2, 20)==false){
echo "В поле 'адрес' количество символов от 2 до 20"."<br>";
}
if (check_length($search5, 2, 20)==false){
echo "В поле 'основное заболевание' количество символов от 2 до 20"."<br>";
}


if (check_length($search, 2, 20) && check_length($search1, 2, 20) && check_length($search2, 2, 20) && check_length($search3, 1, 10000) && is_numeric($search3)==true
&& check_length($search4, 2, 20) && check_length($search5, 2, 20) && check_length($search6, 10, 10)){

echo "Спасибо за сообщение"."<br>";
$search = clean($search);
$search1 = clean($search1);
$search2 = clean($search2);
$search3 = clean($search3);
$search4 = clean($search4);
$search5 = clean($search5);
$search6 = clean($search6);
}
}

else {
echo "Заполните поля";
}
?>
<br>
<a href="new30.1.php">Выход в меню информации из БД</a><BR>
<a href="new30.php">Выход на главную страничку </a>
</div>

</body>
</html>
</center>