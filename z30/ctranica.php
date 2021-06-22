<?php
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
<?php echo file_get_contents("ctill.css");
echo file_get_contents("tab.css"); ?>
</style>
</head>
<body>
<?php

$name1=$_SESSION['name'];
$hash=$_SESSION['password'];

//admin
$nameadmin=$_SESSION['name1'];
$hashadmin=$_SESSION['password1'];
if (isset($nameadmin) and isset($hashadmin)){
    $_SESSION['a']=1;    
    $_SESSION['name1']=$nameadmin;
    $_SESSION['password1']=$hashadmin;
        include 'admin/adminctranica.php';   
    }
    //
    if (isset($name1) and isset($hash)){ 
$_SESSION['n']=1;    
if (isset($_SESSION['name']) and isset($_SESSION['password'])){?>
  <div class="header kvasov-link">
      <div class="header-1 kvasov-link"> <a href="avtorizachia.php">Аутентификация<a> </div>
      <div class="header-1 kvasov-link"> <a href="ctranica.php">Вся БД<a></div>
      <div class="header-1 kvasov-link"><a href="poisk2.php">Поиск<a></div>
      <div class="header-1 kvasov-link"> <a href="coptipovka.php">Сортировка<a></div>
      </div>
    <?} 
$connection = mysqli_connect("localhost","root","","z15");

if (isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 1;
}
$limit = 10; //количество строк на одной странице
$number = ($page * $limit) - $limit;
$sel="SELECT COUNT(*) FROM `z151`";
$res_count = mysqli_query($connection, $sel);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($connection, "SELECT * FROM `z151` ORDER BY id, Name, Export_country, Delivery_time, Quantity_of_goods LIMIT $number, $limit");

?>
<div class="marg">
<?
while($article = mysqli_fetch_assoc($query)){?>
    <table class="table-hover table-dark" border="0" width="99%"> 
    <tbody> 
     <tr bgcolor="lime" align="CENTER"> 
      <td><?echo $article['id']?></td> 
      <td><?echo $article['Name']?></td> 
      <td><?echo $article['Export_country']?></td> 
      <td><?echo $article['Delivery_time']?></td> 
      <td><?echo $article['Quantity_of_goods']?></td> 
     </tr> 
 </tbody>
 </table>   
<?}?> 
</div>
<?
for ($i = 1; $i <=$str_pag; $i++){?>
    <div class='kvasov-link' style="display: inline;"> 
<?	echo "<a href=?page=".$i.">".$i."</a>";?>

    </div><?}	
mysqli_close($connection);
    }
?>
</body>
</html>
</center>