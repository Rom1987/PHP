<!DOCTYPE html>
<head>Загрузка  файлов на сервер
<link rel="stylesheet" href="new1.css">
</head>
<html>
<body background=https://i.pinimg.com/originals/b3/cf/82/b3cf8221bf35baf3d4faa68473811fc9.jpg> 
<div class="block1">
<?php
        $id=  !empty ($_POST['id']) ? $_POST['id']:'';
        $s=  !empty ($_POST['s']) ? $_POST['s']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
		$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
		$s4=  !empty ($_POST['s4']) ? $_POST['s4']:'';
		$s5= !empty ($_POST['s5']) ? $_POST['s5']:'';
		$s6= !empty ($_POST['s6']) ? $_POST['s6']:'';

?>
  <form  action="new30.2.1.php"  method="post">
	 <!--Поиск-->


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

	<label for="s"> Введи фамилию</label> <input name="s" type="text" placeholder="фамилию" value='<?=$s?>'/> 

         <?php if (!empty($s)) {
         if (check_length($s, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'фамилию' количество символов от 2 до 25</b> </div>
<?php }} ?>
<br> 

    <label for="s1"> Введи имя </label> <input name="s1" type="text" placeholder="имя" value='<?=$s1?>'/> 
        <?php if (!empty($s1)){
        if (check_length($s1, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'имя ' количество символов от 2 до 25</b> </div>
        <?php } } ?>
<br>

	<label for="s2"> Введи отчество</label> <input name="s2" type="text" placeholder="отчество" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи год рождения  </label> <input name="s3" type="date" placeholder="год рождения" value='<?=$s3?>'/> 
<br>
  
	<label for="s4"> Введи адрес </label> <input name="s4" type="text" placeholder="адрес" value='<?=$s4?>'/>
<br>

	<label for="s5"> Введи  основное заболевание </label> <input name="s5" type="text" placeholder=" основное заболевание" value='<?=$s5?>'/>
<br>

	<label for="s6"> Введи дату последнего посещения лечащего врача </label> <input name="s6" type="date" placeholder="дату последнего посещения лечащего врача" value='<?=$s6?>'/>

<br>
     <input  type="submit" name="unpack" value="Создать"/>
     
     </div>
     <!--end Создание БД-->
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



if (!empty($s) && !empty($s1) && !empty($s2) && !empty($s3) && !empty($s4) && !empty($s5) && !empty($s6)) {
    if (check_length($s, 2, 20) && check_length($s1, 2, 20) && check_length($s2, 2, 25) && check_length($s3, 1, 10000) && check_length($s4, 1, 10000)&& check_length($s5, 1, 10000)&& check_length($s6, 1, 10000)){
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div></center>   <?php
$id=clean($id);
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);
$s5 = clean($s5);

    }  
 }

 $conn = mysqli_connect("localhost","root","","task15");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }

 $sql="INSERT INTO hospital (id, first_name, name, surname, date_born, adrres, underlying_disease, date_of_last_visit_a_doctor) VALUES ('$id','$s','$s1','$s2','$s3','$s4','$s5','$s6')";
 mysqli_query($conn, $sql);
 // if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
// } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
 mysqli_close($conn);
?>
<a href="new30.2.php">Выход к работе БД</a><BR>
<a href="new30.php">Выход на главную страничку </a>
</div>
</body>
</html>
</center>