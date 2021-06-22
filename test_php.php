<center>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootst.." integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<form action="infabout.php" method="post">

<!--Создание БД-->

<div class="f">
<label for="id"> Введи id</label> <input name="id" type="text" placeholder="id" value='<?=$id?>'/>

<?php if (is_numeric($id)==false && !empty($id)){?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'id' нужно ввести число</b> </div>
<?php } ?>
<?php if (!empty($id)){
if (check_length($id, 1, 10)==false){ ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'id' количество символов от 1 до 10</b> </div>
<?php } } ?>
<br>

<label for="s1"> Введи id_pol </label> <input name="s1" type="text" placeholder="id_pol" value='<?=$s1?>'/>

<?php if (!empty($s1)) {
if (check_length($s1, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'id_pol' количество символов от 2 до 100</b> </div>
<?php }} ?>
<br>

<label for="s2"> Введи ФИО </label> <input name="s2" type="text" placeholder="ФИО" value='<?=$s2?>'/>
<?php if (!empty($s2)){
if (check_length($s2, 2, 20)==false){ ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'ФИО' количество символов от 2 до 100</b> </div>
<?php } } ?>
<br>

<label for="s3"> Введи адрес проживания</label> <input name="s3" type="text" placeholder="адрес проживания" value='<?=$s3?>'/>
<br>

<label for="s4"> Введи дату рождения </label> <input name="s4" type="date" placeholder="год рождения" value='<?=$s4?>'/>
<br>

<label for="s5"> Введи дату регистрации </label> <input name="s5" type="date" placeholder="страну производителя " value='<?=$s5?>'/>
<br>

<label for="s6"> Введи номер телефона </label> <input name="s6" type="text" placeholder="номер телефон" value='<?=$s6?>'/>
<br>
<input type="submit" name="unpack" value="Создать"/>

</div>
<!--end Создание БД-->
</form>
<?php
$id= !empty ($_POST['id']) ? $_POST['id']:'';
$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
$s4= !empty ($_POST['s4']) ? $_POST['s4']:'';
$s5= !empty ($_POST['s5']) ? $_POST['s5']:'';
$s6= !empty ($_POST['s6']) ? $_POST['s6']:'';

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



if (!empty($s1) && !empty($s2) && !empty($s3) && !empty($s4) && !empty($s5) && !empty($s6)) {
if (
check_length($s1, 2, 100) &&
check_length($s2, 2,100) &&
check_length($s3, 1, 10000) &&
check_length($s4, 1, 10000)&&
check_length($s5, 1, 10000)&&
check_length($s6, 1, 10000)){
?> <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Строка добавлена в таблицу </b> </div></center> <?php
$id=clean($id);
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);
$s5 = clean($s5);
$s6 = clean($s6);
}
}

$conn = mysqli_connect("localhost","root","root","register-piz");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO users_info (id_users,
id_pol ,
fio,
adres,
data_rozhdeniy,
date_of_regist,
nomber_of_telephont,) VALUES ($id,$s1,'$s2','$s3','$s4','$s5','$s6')";
mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<a href="newBD.php">Меню информации из
 
БД</a>
<br>
</center>