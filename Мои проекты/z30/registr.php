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
<div class='block text'> 

  <?
  $regist='<form  action=""  method="GET">
	<div class="text"><label for="name"> Введи имя</label> <input name="name" required oncheck="color_();" type="text" placeholder="имя"/></div>
    <div class="text"><label for="password"> Введи пароль</label> <input name="password" required type="password" placeholder="пароль"/></div>
<button  style="color: Purple;" type="submit" name="unpack" value="Зарегистрироваться">Зарегистрироваться</button> <br>
     <div class="s1 kvasov-link"> <a href="avtorizachia.php">Авторизация</a> </div>
  </form>';
  
/*Регистрация*/
$link = mysqli_connect("localhost","root","","polzovatel");
mysqli_query($link, "SET NAMES 'utf-8'");

if(!empty($_GET['name']) and !empty($_GET['password'])){
$name=$_GET['name'];
$password = password_hash($_GET['password'], PASSWORD_DEFAULT);

$conn = mysqli_connect("localhost","root","","polzovatel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 ="SELECT * FROM polzovatel WHERE name='$name'";
$query=mysqli_query($conn, $sql1);
$mass=mysqli_fetch_assoc($query);
if ($mass['name']==$name){ 
echo $regist;?>
    <div class="error_avtor bg-danger text-warning"> <b class='error'>Пользователь с таким именем существует</b> </div>
<?}
else{
    $sql ="INSERT INTO polzovatel (name, password) VALUES ('$name', '$password')";
    mysqli_query($conn, $sql);
   ?>

<?
$_SESSION['r']=1;
$_SESSION['name']=$name;
$_SESSION['password']=$password;
}
mysqli_close($conn);
}

else{
    if (!isset($_SESSION['r'])){
        echo $regist;// Пользователя с таким логином нет, выведем сообщение
       }
    }

    if (isset($_SESSION['r'])and $mass['name']!=$name) {?>
        <div class="complete bg-success" style="display:inline-block;"> <h3>Вы прошли регистрацию</h3> </div>
    
        <?}

 if(password_verify($_GET['password1'], $hashadmin) or password_verify($_GET['password1'], $hash) or 
 isset($_SESSION['n']) or isset($_SESSION['a']) or isset($_SESSION['r'])) {?>
<div class="s1 kvasov-link"> <a href="?exit">Выход</a> </div>
 <?}?>

</div>

<?if (isset($_SESSION['name']) and isset($_SESSION['password'])){?>
  <div class="header">
      <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
      <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
      <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
      <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
      </div>
<?} 

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
  <?}?>
</body>
</html>
</center>