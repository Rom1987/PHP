<?php

    $connect = mysqli_connect('localhost', 'root', 'qwer2000', 'turizm');
   

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>