<?php

$id=$_POST['id'];
$FIO=$_POST['FIO'];
$adress=$_POST['Adress'];
$gos=$_POST['GOS'];
$model=$_POST['Model'];
$god=$_POST['GOD'];
$vin=$_POST['VIN'];
$pic=$_POST['picture'];

$connection2=mysqli_connect("localhost","root","","zhukovbaza");
$connection2->query("SET NAMES utf8_general_ci");

$us=$connection2->query("select `id` from `frst` where id='$id' ");
$us=$us->fetch_array();

if(!$us['id']){
$connection=mysqli_connect("localhost","root","","zhukovbaza");
$connection->query("SET NAMES utf8_general_ci");

$connection->query("INSERT INTO `frst` VALUES ('$id','$FIO','$adress','$gos','$model','$god','$vin','$pic')");

header("Location:..\index2.php");}
else{
	echo"User already exist";
}
?>