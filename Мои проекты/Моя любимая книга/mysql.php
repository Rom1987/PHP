<?php 
$link = mysqli_connect("localhost","root","","gai");
mysqli_query($link, "SET NAMES 'utf-8'");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error()); // проверка на ошибки при подключении
}
?>