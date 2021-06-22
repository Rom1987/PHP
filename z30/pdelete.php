<?
session_start();
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
 <?   
 //admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];

if (isset($nameadmin) and isset($hashadmin)){
$_SESSION['a']=1;    
$_SESSION['name1']=$nameadmin;
$_SESSION['password1']=$hashadmin;
//
?>
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

<div class="blocks4 text">
 <?php       
        $name= !empty ($_POST['name']) ? $_POST['name']:'';
        $search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
        ?>
<form  action=""  method="post">
	<label>Удалить строку содержащию:</label> <br>
    <label for="name">Имя таблицы</label> <input name="name" oncheck="color_();" type="int" placeholder="имя таблицы" value='<?=$name?>'/> <br> 
    <label for="search">id</label> <input name="search" oncheck="color_();" type="int" placeholder="id" value='<?=$search?>'/> <br> 
    <label for="search1">Name</label> <input name="search1" oncheck="color_();" type="text" placeholder="имя пользователя" value='<?=$search1?>'/> <br> 
     <button  type="submit" name="unpack" value="Удалить">Удалить</button>
  </form>
<?php
$conn = mysqli_connect("localhost","root","","polzovatel");
if (!$conn) {?>
    <div class="bg-danger text-white" style="display:inline-block;"> <b><?die("Connection failed: " . mysqli_connect_error());?></b> </div>
<?}
$sql="DELETE FROM $name WHERE id='$search' or name='$search1'";
if (mysqli_query($conn, $sql)==true){
if (mysqli_query($conn, $sql)){?>
    <br><div class="bg-success text" style="display:inline-block;"> <b>Удалено</b> </div>
  <? }
   else {?>
    <br><div class="bg-danger text-white" style="display:inline-block;"> <b><?echo "Error: " . $sql . "<br>" . mysqli_error($conn);?></b> </div>
    <?
}
}
mysqli_close($conn);
}
else{?>
<div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>
<?}?>
</div>
</body>
</html>
</center>