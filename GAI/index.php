<?php 
require ('session.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГАИ</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/auth.css">

    <script src="../Jquery/jquery-3.5.1.js"></script>
    <script>
        $(function(){
            $("header").load("header.php");
            $("#id02").load("form_record.php");
        });
    </script>
    
</head>
<body>
   <?php 
   if ( !empty($_SESSION['error']) ):
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    elseif ( !empty($_SESSION['complete']) ): 
        echo $_SESSION['complete'];
        unset($_SESSION['complete']);
    endif;
    ?>
    <header></header>

    <div class="content">
        <div class="inner-content">
            <div class="text">
                Государственная автомобильная инспекция
            </div>      
            <?php
            if ( !empty($_SESSION['email']) or !empty($_SESSION['password']) ):  
                
                ?> <button class="button" id="button" type="submit" onclick="document.getElementById('id02').style.display='block'"> Оставить заявку </button>

            <?php endif ?>

            <div id="id02" class="modal"></div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            button = location.hash; // Хеш страницы, начинается с #.
            $(button).trigger('click');
        });
    </script>
</body>
</html>