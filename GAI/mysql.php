<?php 
$link = mysqli_connect("localhost","root","","gai");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error()); // проверка на ошибки при подключении
}
?>