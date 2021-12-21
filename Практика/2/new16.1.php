<!DOCTYPE html>
<head>Загрузка  файлов на сервер
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>

.d { 
    display:inline-block;
}
.f{
    position:absolute;
    margin-top:-280px;
    margin-left:650px;
}
</style>
</head>
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
        $search3= !empty ($_POST['search3']) ? $_POST['search3']:'';
		$search4= !empty ($_POST['search4']) ? $_POST['search4']:'';
		$search5= !empty ($_POST['search5']) ? $_POST['search5']:'';
		$search6= !empty ($_POST['search6']) ? $_POST['search6']:'';
		

        $id=  !empty ($_POST['id']) ? $_POST['id']:'';
        $s=  !empty ($_POST['s']) ? $_POST['s']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
		$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
		$s4=  !empty ($_POST['s4']) ? $_POST['s4']:'';
		$s5= !empty ($_POST['s5']) ? $_POST['s5']:'';
		$s6= !empty ($_POST['s6']) ? $_POST['s6']:'';

?>
  <form  action="new16.1.php"  method="post">
	 <!--Поиск-->
	<label for="search"> Введи фамилию</label> <input name="search" type="text" placeholder="фамилию" value='<?=$search?>'/> 
<?php if (empty($search)) { ?>
<div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
         <?php if (!empty($search)) {
         if (check_length($search, 2, 25)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'фамилию' количество символов от 2 до 20</b> </div>
<?php }} ?>
<br> 

    <label for="search1">  Введи имя </label> <input name="search1" type="text" placeholder=" имя" value='<?=$search1?>'/> 
	<?php if (empty($search1)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
        <?php if (!empty($search1)){
        if (check_length($search1, 2, 25)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'имя' количество символов от 2 до 20</b> </div>
        <?php } } ?>
<br>
    <label for="search2">  Введи отчество</label> <input name="search2" type="text" placeholder="отчество" value='<?=$search2?>'/> 
	<?php if (empty($search2)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>
        <?php if (!empty($search2)){
        if (check_length($search2, 2, 25)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'отчество' количество символов от 2 до 20</b> </div>
        <?php } } ?>
<br>

	<label for="search3"> Введи год рождения </label> <input name="search3" type="date" placeholder="год рождения" value='<?=$search3?>'/> 
	<?php if (empty($search3)) { ?> 
        <div class="d bg-danger text-warning"><b class='error'>Поле пустое</b> </div> <?php } ?>
<br>

	<label for="search4"> Введи адрес </label> <input name="search4" type="text" placeholder="адрес" value='<?=$search4?>'/> 
    <?php if (empty($search4)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>

 <?php if (is_numeric($search4)==true && !empty($search4)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'адрес' нужно ввести адрес</b> </div>
<?php } ?> 

<br>
	<label for="search5"> Введи основное заболевание </label> <input name="search5" type="text" placeholder="основное заболевание" value='<?=$search5?>'/> 
    <?php if (empty($search5)) { ?>
        <div class="d bg-danger text-warning"> <b class='error'>Поле пустое</b> </div> <?php } ?>

 <?php if (is_numeric($search5)==true && !empty($search5)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'основное заболевание' нужно ввести заболевание</b> </div>
<?php } ?> 

<br>
	<label for="search6"> Введи дату последнего посещения лечащего врача </label> <input name="search6" type="date" placeholder="последнего посещения лечащего врача" value='<?=$search6?>'/> 
	<?php if (empty($search6)) { ?> 
        <div class="d bg-danger text-warning"><b class='error'>Поле пустое</b> </div> <?php } ?>
<br>

     <input  type="submit" name="unpack" value="Поиск"/>


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

if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3)&& !empty($search4) && !empty($search5)&& !empty($search6)) {
    if (check_length($search, 2, 25) && check_length($search1, 2, 25) && check_length($search2, 2, 25) && check_length($search3, 1, 10000)&& check_length($search4, 1, 10000)&& check_length($search5, 1, 10000)&& check_length($search6, 1, 10000)&& is_numeric($search6)==true){
     ?>   <div class="bg-success text-white" style="display:inline-block;"> <b>Спасибо за сообщение</b> </div>  
<?php
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
  ?>  <div class="d bg-danger text-warning" style="display:inline-block;"> <b>Заполните поля</b> </div>  <?php   
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

 $conn = mysqli_connect("localhost","root","","z15");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }

 $sql="INSERT INTO task15 (id, first_name, name, surname, date_born, adrres, underlying_disease, date_of_last_visit_a_doctor) VALUES ('$id','$s','$s1','$s2','$s3','$s4','$s5','$s6')";
 mysqli_query($conn, $sql);
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 mysqli_close($conn);
?>