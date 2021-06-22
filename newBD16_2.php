<center>
<!DOCTYPE html>
<head>
<style>
<?php echo file_get_contents("new4.css"); ?>
</style>
</head>
<html>

<div class="block1">
<?php
        $id=  !empty ($_POST['id']) ? $_POST['id']:'';
        $s=  !empty ($_POST['s']) ? $_POST['s']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
		$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
		$s4=  !empty ($_POST['s4']) ? $_POST['s4']:'';

?>
  <form  action="newBD16_2.php"  method="post">
	 <!--Поиск-->


      <!--Создание БД-->
      
      <div class="f">
     <label for="id"> Введи id</label> <input name="id" type="text" placeholder="рейс" value='<?=$id?>'/> 

      <?php if (is_numeric($id)==false && !empty($id)){?>
 <div class="d bg-danger text-warning"> <b class='error'>В поле 'id' нужно ввести число</b> </div>
<?php } ?> 
<?php if (!empty($id)){
        if (check_length($id, 1, 10)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'id' количество символов от 1 до 10</b> </div>
        <?php } } ?>
<br> 

	<label for="s"> Введи id_бортпроводника</label> <input name="s" type="text" placeholder="бортпроводника" value='<?=$s?>'/> 

         <?php if (!empty($s)) {
         if (check_length($s, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'бортпроводника' количество символов от 2 до 25</b> </div>
<?php }} ?>
<br> 

    <label for="s1"> Введи id_самолета </label> <input name="s1" type="text" placeholder="самолета" value='<?=$s1?>'/> 
        <?php if (!empty($s1)){
        if (check_length($s1, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'имя ' количество символов от 2 до 25</b> </div>
        <?php } } ?>
<br>

	<label for="s2"> Введи страну прилета(аэропорт), </label> <input name="s2" type="text" placeholder="аэропорт" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи время и дата прилета  </label> <input name="s3" type="datetime" placeholder="время и дата" value='<?=$s3?>'/> 
<br>
  
	<label for="s4"> Введи время и дата прилета </label> <input name="s4" type="datetime" placeholder="время и дата" value='<?=$s4?>'/>
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



if (!empty($s) && !empty($s1) && !empty($s2) && !empty($s3) && !empty($s4) ) {
    if (check_length($s, 2, 20) && 
	    check_length($s1, 2, 20) &&
		check_length($s2, 2, 25) && 
		check_length($s3, 1, 10000) 
		 ){
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Строка добавлена в таблицу </b> </div></center>   <?php
$id=clean($id);
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);

    }  
 }

 $conn = mysqli_connect("localhost","root","","airline");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }
if ( isset($_POST['unpack']) ) {
 $sql="INSERT INTO scheduled_flights (
                             id_reys,
                             id_bortprovodnika,
							 id_samoleta,
							 strana_prileta_aeroport,
							 time_and_date_of_departure,
							 time_and_date_of_arrival) VALUES ($id,$s,$s1,'$s2','$s3','$s4')";
 mysqli_query($conn, $sql);
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
 mysqli_close($conn);
?>