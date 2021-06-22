<?php
session_start();
if (isset($_GET['exit'])){
  session_unset();
    }
?>
<center>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
<?php echo file_get_contents("ctill.css"); ?>
</style>
</head>
<body>
 <div class='block'> 
<?php
$link = mysqli_connect("localhost","root","","polzovatel");
mysqli_query($link, "SET NAMES 'utf-8'");
/*Авторизация*/
$form = '
<form  action=""  method="GET">
<div class="text"><label for="name1"> Введи имя</label>  <input name="name1" required oncheck="color_();" type="text" placeholder="имя"/> </div> 
<div class="text"><label for="password1"> Введи пароль</label> <input name="password1" required type="password" placeholder="пароль"/> </div>
<button type="submit" name="unpack" value="Авторизоваться">Авторизоваться</button> <br>
<div class="s1 kvasov-link"> <a href="registr.php">Регистрация</a> </div> 
  </form>
';
if(!empty($_GET['name1']) and !empty($_GET['password1'] and $_GET['name1']!='admin')) {
  //можно написать здесь условие для админа если admin то идёт проверка пароля и закидываем session в переменные потом-->>
 
 // 
$name1 = $_GET['name1'];
$query = "SELECT * FROM polzovatel WHERE name='$name1'"; 
$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);
	//Если пользователь с таким логином есть...
	if (!empty($user)) {
		$hash = $user['password']; // соленый пароль из БД
		// Проверяем соответствие хеша из базы введенному паролю
		if (password_verify($_GET['password1'], $hash)) {
     ?><div class="complete bg-success" style="display:inline-block;"> <h3>Вы прошли авторизацию</h3> </div><?
		$_SESSION['name']=$name1;
	  $_SESSION['password']=$hash;
		} else {
      echo $form;// Пароль не подошел, выведем сообщение
      ?> <div class="error_avtor bg-danger text-warning"> <b class='error'>Неверно введено имя или пароль</b> </div> 
      <br>
      <?
		}
    }
    else {
      echo $form;// Пользователя с таким логином нет, выведем сообщение
      ?> <div class="error_avtor bg-danger text-warning"> <b class='error'>Неверно введено имя или пароль</b> </div> 
      <br> <?
    }
  }
  else { 
    if (!isset($_SESSION['n']) and !isset($_SESSION['a']) and !isset($_SESSION['r']) and $_GET['name1']!='admin'){
    echo $form;// Пользователя с таким логином нет, выведем сообщение
    }
  }

  if ((isset($_SESSION['n']) or isset($_SESSION['a'])) and !isset($_SESSION['r'])) {?>

    <div class="complete bg-success" style="display:inline-block;"> <h3>Вы прошли авторизацию</h3> </div>

    <?}
if (isset($_SESSION['r'])){?>
  <div class="complete bg-success" style="display:inline-block;"> <h3>Вы уже прошли авторизацию</h3> </div>

<?}



    //admin
    $nameadmin = $_GET['name1'];
    $adminpassword = "SELECT * FROM polzovatel WHERE name='$nameadmin'";
    $adminresult = mysqli_query($link, $adminpassword);
    $admin = mysqli_fetch_assoc($adminresult);
     if (!empty($admin)){
      $hashadmin = $admin['password'];
     }



     if($_GET['name1']=='admin'){
        if(password_verify($_GET['password1'], $hashadmin)){?>
<div class="complete bg-success" style="display:inline-block;"> <h3>Вы прошли авторизацию</h3> </div> 
        <?}
    else{
      echo $form;?>
      <div class="error_avtor bg-danger text-warning"> <b class='error'>Неверно введено имя или пароль</b> </div> 
          <br>
    <?}
     }   
 if(password_verify($_GET['password1'], $hashadmin) or password_verify($_GET['password1'], $hash) or 
 isset($_SESSION['n']) or isset($_SESSION['a']) or isset($_SESSION['r'])) {?>
<div class="s1 kvasov-link"> <a href="?exit">Выход</a> </div>
 <?}?>
    </div>     <!--Конец div class=block-->


    <?
if($_GET['name1']=='admin'){
 /*  if ( mysqli_query($link, $adminpassword)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $adminpassword . "<br>" . mysqli_error($link);
}*/
   if(password_verify($_GET['password1'], $hashadmin)){?>
       <div class="header">  
         <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
         <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
         <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
         <div class="header-1 kvasov-link"><a href="save.php">Создание<a> </div>
         <div class="header-1 kvasov-link"> <a href="delete.php">Удаление<a> </div>
         <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
         <div class="header-1 kvasov-link"> <a href="polzovatel.php">Пользователи<a></div>
         <div class="header-1 kvasov-link"> <a href="coppol.php">Сортир. польз.<a></div>
         <div class="header-1 kvasov-link"> <a href="pdelete.php">Удаление польз.<a></div>
        </div>
   <?
 $_SESSION['name1']=$nameadmin;
 $_SESSION['password1']=$hashadmin; 
  
  }
}


if (isset($_SESSION['name1']) and isset($_SESSION['password1'])) {?>
    <div class="header">  
         <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
         <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
         <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
         <div class="header-1 kvasov-link"><a href="save.php">Создание<a> </div>
         <div class="header-1 kvasov-link"> <a href="delete.php">Удаление<a> </div>
         <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
         <div class="header-1 kvasov-link"> <a href="polzovatel.php">Пользователи<a></div>
         <div class="header-1 kvasov-link"> <a href="coppol.php">Сортир. польз.<a></div>
         <div class="header-1 kvasov-link"> <a href="pdelete.php">Удаление польз.<a></div>
        </div>
  <?}
//

//обычный пользователь
if (isset($_SESSION['name']) and isset($_SESSION['password'])) {?>
  <div class="header">
      <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
      <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
      <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
      <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
      </div>
  <?}
//

  ?>

</center>
</body>
</html>