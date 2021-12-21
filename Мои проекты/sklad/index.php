<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/header.js"></script>
    <style>
    <?php echo file_get_contents("css/style.css");
    echo file_get_contents("css/test_block_style.css");
    echo file_get_contents("css/header.css");
    ?>
    </style>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(73529005, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/73529005" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body>
    <?php 
    include('mysql.php');
?>
    <center>
        <?php

    /*Авторизация*/
    include('authorization.php');
    
    // Меню
    include('menu.php');

    // покупка
    include('buy.php');
    
    ?>
    </center>
    <!-- поиск -->
    <form action="index.php" method="GET">
        <div class="button_search">
            <input name='search' placeholder="Поиск" value="<?= $_GET['search'] ?>" type="search">
            <button name="button_search"> Поиск </button>
        </div>
    </form>
    <!-- end поиск -->
    <form action="index.php" method="GET">

        <div class="post-wrap post-wrap-test">

            <?
if ( isset($_GET['button_search']) or isset($_GET['buy']) or !empty($search) ) {
    $search = $_GET['search'];
    $_SESSION['search'] = $search;
    $search = $_SESSION['search'];
    $sql_products = "SELECT * FROM `napitki` WHERE `name` LIKE '%$search%'";
    $result_select = mysqli_query($link, $sql_products);
    include('blocks_products.php');
} else { ?>
            <center>
                <div>
                    <img class="img-1" src="image/91-скачать-картинку-кофе.jpg" alt="">
                    <img class="img-2" src="image/5000x3337_763216_[www.ArtFile.ru].jpg" alt="">
                    <img class="img-3" src="image/scale_1200.jpg" alt="">
                </div>
            </center>
            <?
}
mysqli_close($link);
?>
        </div>
    </form>
</body>

</html>