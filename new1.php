
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="p2.css"/>
  </head>
  <body>
      
<center>

  <!--
    Каждую кнопку мы помещаем в <div>…</div> с классом ‘btn-group’. Потом все эти кнопки мы помещаем в общий <div>…</div>
    опять же с классом  ‘btn-group’. Это все говорит о том, что наши кнопки будут сгруппированы в единое целое. Также у нас имеется
    
    class = “btn-group-justified”’ – просто расширяет наши кнопки на всю ширину веб-страницы.-->
        <div class="btn btn-group btn-group-justified">
        <div class="btn-group">
<!--‘btn’ означает, что мы будем использовать стиль CSS из Bootstrap предназначенный для кнопок.
‘btn-primary’ задает синий цвет нашей кнопки, помимо него существует еще ряд других цветов: ‘btn-danger’,’ btn-warning’,’ btn-success’,’ btn-info’,’ btn-default’
btn-lg размер кнопки

data-toggle="collapse" подключает класс из библиотеки JavaScript. Он позволяет открывать панели по нажатию на эту кнопку
Используется в связке с ‘data-target=”#...”’, в котором указывается id панели, которая будет открываться по нажатию на кнопку.
-->
        <button class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#panel1">Создание записи в таблице "aircraft"</button>
        </div>
       <div class="btn-group">
        <button class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#panel2">Создание записи в таблице "completed_work"</button>
        </div>
         
        <div class="btn-group">
      
        <button class="btn btn-success btn-lg" data-toggle="collapse" data-target="#panel3">Создание записи в таблице "scheduled_flights"
         
        </button>
       
        </div>

        <div class="btn-group">
        
        <button class="btn  btn-defaul btn-lg" data-toggle="collapse" data-target="#panel4">Регистрация сотрудников
          
        </button>
        
         </div> 
        </div>
        </center>
        
    <!-- Optional JavaScript -->
   
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <!--
  ’class=”collapse”’ –  этот класс делает нашу панель скрытой, пока кнопка не будет нажата.
’id = “panel2”’ – id панели
’class = “panel panel-success”’ - задает зеленый цвет нашей панели, помимо него существует еще ряд других цветов:
‘panel-danger’,’ panel -warning’,’ panel -success’,’ panel -info’,’ panel -default’
’class = “panel-heading”’- делает заголовок для нашей панели
’class = “panel-body”’- делает тело для нашей панели
-->
     <div class="collapse" id="panel1">
       
      <div class="panel panel-success">
      
      <div class="panel-heading" style="text-align: center; color:DarkOrange ">Создание записи в таблице "aircraft"</div>
       <div class="panel-body">
<!--
‘class = “table-responsive”’ – означает, что наша таблица будет адаптивна под разные размеры экранов.
‘class = ”table”’ – означает, что мы подключаем стили именно для таблиц.
‘table-bordered’ – означает, что у нашей таблицы будут границы.
‘ed’ – означает, что при наведении на ячейку таблицы, она будет выделяться.
‘class = ‘”active”’ – его можно написать в любом месте таблицы. Этот класс означает, что это место будет выделено цветом.
-->
      <div class="table-responsive">
      
      <table class="table table-bordered ">
      <tbody>
	  <center>
       <form  action="new1.php"  method="post">
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

	<label for="s1"> Введи модель </label> <input name="s1" type="text" placeholder="модель" value='<?=$s1?>'/> 

         <?php if (!empty($s1)) {
         if (check_length($s1, 2, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'модель' количество символов от 2 до 100</b> </div>
<?php }} ?>
<br> 

    <label for="s2"> Введи название </label> <input name="s2" type="text" placeholder="название" value='<?=$s2?>'/> 
        <?php if (!empty($s2)){
        if (check_length($s2, 2, 20)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'название' количество символов от 2 до 100</b> </div>
        <?php } } ?>
<br>

	<label for="s3"> Введи регистрационный номер</label> <input name="s3" type="text" placeholder="регистрационный номер" value='<?=$s3?>'/> 
<br>

	<label for="s4"> Введи год выпуска </label> <input name="s4" type="date" placeholder="год рождения" value='<?=$s4?>'/> 
<br>
  
	<label for="s5"> Введи страну производителя </label> <input name="s5" type="text" placeholder="страну производителя " value='<?=$s5?>'/>
<br>

	<label for="s6"> Введи  количество посадочных  мест </label> <input name="s6" type="number" placeholder=" количество посадочных  мест" value='<?=$s6?>'/>
<br>

	<label for="s7"> Введи количество экипажа </label> <input name="s7" type="number" placeholder=" количество экипажа " value='<?=$s7?>'/>

<br>
	<label for="s8"> Введи дальность полета   </label> <input name="s8" type="number" placeholder=" дальность полета  " value='<?=$s8?>'/>

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
	   check_length($s3, 1, 100) && 
	   check_length($s4, 1, 100)&& 
	   check_length($s5, 1, 100)&& 
	   check_length($s6, 1, 100)&& 
	   check_length($s7, 1, 100)&& 
	   check_length($s8, 1, 100)){
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

 $conn = mysqli_connect("localhost","root","","airline");

 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }

 $sql="INSERT INTO aircraft (id_samoleta,
                            model,
							name,
							nomer_samoleta,
							god_vypuska,
							strana_proizvoditelya,
							kolichestvo_posadochnykh_mest,
							kolichestvo_ekipazha,
							flight_range_in_km) VALUES ($id,'$s1','$s2','$s3','$s4','$s5',$s6,$s7,$s8)";
 mysqli_query($conn, $sql);
 
 // if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
 // } else {
     // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
 mysqli_close($conn);
?> 
      </tbody>
      </table>
	  </div> </div>   </div> </div>   
 
     
          
      <div class="collapse" id="panel2">
       
        <div class="panel panel-success">
        
        <div class="panel-heading" style="text-align: center; color:OrangeRed">Создание записи в таблице "completed_work"</div> 
        
        <div class="panel-body">
        
        <div class="table-responsive">
        
        <table class="table table-bordered">
        
        <thead>
        
<?php
        $id=  !empty ($_POST['id']) ? $_POST['id']:'';
        $s=  !empty ($_POST['s']) ? $_POST['s']:'';
		$s1= !empty ($_POST['s1']) ? $_POST['s1']:'';
		$s2= !empty ($_POST['s2']) ? $_POST['s2']:'';
		$s3= !empty ($_POST['s3']) ? $_POST['s3']:'';
		$s4=  !empty ($_POST['s4']) ? $_POST['s4']:'';
		$s5=  !empty ($_POST['s5']) ? $_POST['s5']:'';
		$s6=  !empty ($_POST['s6']) ? $_POST['s6']:'';
		$s7=  !empty ($_POST['s7']) ? $_POST['s7']:'';

?>
  <form  action="new1.php"  method="post">
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
         if (check_length($s, 1, 20)==false) { ?>
<div class="d bg-danger text-warning"> <b class='error'>В поле 'бортпроводника' количество символов от 1 до 10</b> </div>
<?php }} ?>
<br> 

    <label for="s1"> Введи id_самолета </label> <input name="s1" type="text" placeholder="самолета" value='<?=$s1?>'/> 
        <?php if (!empty($s1)){
        if (check_length($s1, 1, 10)==false){ ?>
       <div class="d bg-danger text-warning"> <b class='error'>В поле 'имя ' количество символов от 1 до 10</b> </div>
        <?php } } ?>
<br>
	<label for="s2"> Введи страну вылета(аэропорт), </label> <input name="s2" type="text" placeholder="аэропорт" value='<?=$s2?>'/> 
<br>

	<label for="s3"> Введи страну прилета(аэропорт), </label> <input name="s3" type="text" placeholder="аэропорт" value='<?=$s3?>'/> 
<br>

	<label for="s4"> Введи время вылета </label> <input name="s4" type="time" placeholder="время" value='<?=$s4?>'/> 
<br>
	<label for="s5"> Введи дата вылета  </label> <input name="s5" type="date" placeholder="дата" value='<?=$s5?>'/> 
<br>
  
	<label for="s6"> Введи время прилета </label> <input name="s6" type="time" placeholder="время" value='<?=$s6?>'/>
<br> 
     <label for="s7"> Введи дата прилета </label> <input name="s7" type="date" placeholder="дата" value='<?=$s7?>'/>
<br>
     <input  type="submit" name="unpack" value="Создать"/>
     
     </div>
     <!--end Создание БД-->
  </form>
<?php
// function clean($value) {
    // $value = trim($value);
    // $value = stripslashes($value);
    // $value = strip_tags($value);
    // $value = htmlspecialchars($value);
    // return $value;
// }
// function check_length($value, $min, $max) {
    // $result = (mb_strlen($value) >= $min and mb_strlen($value) <= $max);
    // return $result;
// }



if (!empty($s) && !empty($s1) && !empty($s2) && !empty($s3) && !empty($s4)&& !empty($s5)&& !empty($s6)&& !empty($s7)) {
     if(
	     //check_length($s, 2, 20) && 
	    // check_length($s1, 2, 20) &&
		 check_length($s2, 1, 100) && 
		 check_length($s3, 1, 100)
		// check_length($s4, 1, 10000) && 
		// check_length($s5, 1, 10000) && 
		// check_length($s6, 1, 10000) && 
		// check_length($s7, 1, 10000) 
		) {
     ?>  <center> <div class="bg-success text-white" style="display:inline-block;"> <b>Строка добавлена в таблицу </b> </div></center>   <?php
$id=clean($id);
$s = clean($s); 
$s1 = clean($s1);
$s2 = clean($s2);
$s3 = clean($s3);
$s4 = clean($s4);
$s5 = clean($s5);
$s6 = clean($s6);
$s7 = clean($s7);
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
							 strana_vyleta_aeroport,
							 strana_prileta_aeroport,
							 vremya_vyleta,
							 data_vyleta,
							 vremya_prileta,
							 data_prileta) VALUES ($id,$s,$s1,'$s2','$s3','$s4','$s5','$s6','$s7')";
 mysqli_query($conn, $sql);
 // if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
// } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
}
 mysqli_close($conn);
?>
        
        </tbody>
        
        </table>
        
        </div> </div> </div> </div> 

     
 
     
  
  </div>
 </div>
</div>
</div>  
</body>          
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
</center>
