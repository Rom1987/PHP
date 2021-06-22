
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
<?php echo file_get_contents("panel3.css"); ?>
	body {
background: url(https://sun9-23.userapi.com/kBjubbGtLA6ViiIR0fnhxrneJr4kRRJxPG3ftg/zVlnmeVgfOY.jpg);
background-attachment: fixed;
background-repeat: repeat-x;
-webkit-background-size: 100%;
}
</style>
</head> 
 <form  action="games.php"  method="post">
<?php
	
        $id= !empty ($_POST['id']) ? $_POST['id']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
        $s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
		$s4= !empty ($_POST['s4']) ? $_POST['s4']:'';
		$s5= !empty ($_POST['s5']) ? $_POST['s5']:'';
		$s6= !empty ($_POST['s6']) ? $_POST['s6']:'';
		$s7= !empty ($_POST['s7']) ? $_POST['s7']:'';
		$s8= !empty ($_POST['s8']) ? $_POST['s8']:'';

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

	<label for="s1"> Введи название </label> <input name="s1" type="text" placeholder="название" value='<?=$s1?>'/> 

         <?php if (!empty($s1)) {
         if (check_length($s1, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'название' количество символов от 2 до 100</b> </div>
<?php }} ?>
<br> 

    <label for="s2"> Введи жанр </label> <input name="s2" type="text" placeholder="жанр" value='<?=$s2?>'/> 
        <?php if (!empty($s2)){
        if (check_length($s2, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'жанр' количество символов от 3 до 100</b> </div>
        <?php } } ?>
<br>

	<label for="s3"> Введи стоимость </label> <input name="s3" type="number" placeholder="стоимость" value='<?=$s3?>'/> 
<br>

	<label for="s4"> Введи издателя </label> <input name="s4" type="text" placeholder="издатель" value='<?=$s4?>'/> 
<br>
  
	<label for="s5"> Введи описание </label> <input name="s5" type="text" placeholder="описание" value='<?=$s5?>'/>
<br>

	<label for="s6"> Введи  издание </label> <input name="s6" type="text" placeholder="издание" value='<?=$s6?>'/>
<br>

	<label for="s7"> Введи платформу </label> <input name="s7" type="text" placeholder=" платформа " value='<?=$s7?>'/>

<br>
	<label for="s8"> Введи ссылку на картинку</label> <input name="s8" type="text" placeholder=" картинка  " value='<?=$s8?>'/>

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



if (!empty($s1) && !empty($s2) && !empty($s3) && !empty($s4) && !empty($s5) && !empty($s6)&& !empty($s7)&& !empty($s8) ) {
   if (
       check_length($s1, 2, 100) && 
	   check_length($s2, 2,100) && 
	   check_length($s3, 1, 10000) && 
	   check_length($s4, 1, 10000)&& 
	   check_length($s5, 1, 10000)&& 
	   check_length($s6, 1, 10000)&& 
	   check_length($s7, 1, 10000)&& 
	   check_length($s8, 1, 10000)){
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Строка добавлена в таблицу </b> </div></center>   <?php
$id=clean($id);
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);
$s5 = clean($s5);
$s6 = clean($s6);
$s7 = clean($s7);
$s8 = clean($s8);
    }  
 }

 $conn = mysqli_connect("localhost","root","","game_store");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }

 $sql="INSERT INTO games (ID,
                            name,
							genre,
							price,
							publisher,
							description,
							editions,
							platform,
							IMG) VALUES ($id,'$s1','$s2',$s3,'$s4','$s5','$s6','$s7','$s8')";
 mysqli_query($conn, $sql);
 
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 mysqli_close($conn);
?>