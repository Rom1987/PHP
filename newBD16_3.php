<center>
<head>
<style>
	body {
background: url(https://sun9-57.userapi.com/Q3YJYcVjcT6MS2wepzL3Od5rmajAeEb5MQjDXw/ptTfEFbl7FE.jpg);
background-attachment: fixed; /* Фон страницы фиксируется */
background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
-webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
}
</style>
</head> 
 <form  action="newBD16_3.php"  method="post">
<?php
	
        $id= !empty ($_POST['id']) ? $_POST['id']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
        $s2= !empty ($_POST['s2']) ? $_POST['s2']:'';

?>

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

	<label for="s1"> Введи дату выполнения </label> <input name="s1" type="date" placeholder="дату" value='<?=$s1?>'/> 

         <?php if (!empty($s1)) {
         if (check_length($s1, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'модель' количество символов от 2 до 100</b> </div>
<?php }} ?>
<br> 

    <label for="s2"> Введи выплнено </label> <input name="s2" type="text" placeholder="выплнено" value='<?=$s2?>'/> 
        <?php if (!empty($s2)){
        if (check_length($s2, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'название' количество символов от 2 до 100</b> </div>
        <?php } } ?>

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



if (!empty($s1) && !empty($s2) ) {
   if (
       check_length($s1, 2, 100) &&
	   check_length($s2, 2, 100)) {
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Строка добавлена в таблицу </b> </div></center>   <?php
$id = clean($id);
$s1 = clean($s1);
$s2 = clean($s2);

    }  
 }

 $conn = mysqli_connect("localhost","root","","airline");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }
if ( isset($_POST['unpack']) ) {
    $sql="INSERT INTO completed_work (id_reys,data_vypolneniya,vypolneniya) VALUES ($id,'$s1','$s2')";

 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
 mysqli_close($conn);
?>
</center>