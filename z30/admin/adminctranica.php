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
    <link rel="stylesheet" href="ctill.css">
<style>
.dostyp{
margin-top: 20%;
}
</style>
</head>
<body>
<?
if (isset($nameadmin) and isset($hashadmin)){?>
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


<div class="bloc">
<?php
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
<?}?> </div>
<?
for ($i = 1; $i <=$str_pag; $i++){?>
    <div class='kvasov-link' style="display: inline;"> 
<?	echo "<a href=?page=".$i.">".$i."</a>";?>
    </div>
    <?}	
mysqli_close($connection);
}
else{?><div class="dostyp error_avtor bg-danger text-warning"> <b class='error'>Доступ закрыт</b> </div>  <?}?>
</div>
</body>
</html>
</center>