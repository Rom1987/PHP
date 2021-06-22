<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url(https://krot.info/uploads/posts/2020-02/1580728080_4-p-foni-dlya-meditsinskikh-prezentatsii-9.jpg);
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php"><span style="color:brown">&#10133;Мед-центер&#10133;</a></span>
            <div>
                <span style="color:brown">
                    &#128657;Многопрофильный&#128657;<br>&#128657;медицинский центр&#128657; </span>
            </div>
            <div class="phone">
                <span style="color:brown">
                +7 (495) 522 53 40 &#128222;<br>
                +7 (968) 781 45 59 &#128222; </span>
            </div>
        </div>
    </div>
    <?
    include ('tabs.php');
    ?>
</header>
<section>
    <div class="container">
        <span style="color:brown">
        <p class="title-maim">Контакты&#10004;<hr></p>></span>
        <div class="contacts">

            <p>
                123104, Москва, Спиридоньевский пер., д. 5/1
            </p>
            <p>
                Тел.: +7 (495) 933-66-55&#128222;
            </p>
            <p>
                Часы работы: &#128342;Круглосуточно&#128342;
            </p>
            <p>
                Парковка № 0303, с 8.00 до 21.00 - 380р./час&#128178;, с 21.00 до 8.00 - 200р./час&#128178;. Праздники-бесплатно&#169;. Парковка отеля «Марко Поло»-24/7, cо словом: «ЕМС»-350 р/ч&#128178;, оплата на ресепшн отеля.
            </p>


        </div>
    </div>
</section>
<footer class="bottom-fixed">
    <div class="footer-main">
        <div class="container">

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span style="color:brown">
            <p style="text-align: center">© 1998 - 2020 Многопрофильный медицинский центр</p></span>
        </div>
    </div>
</footer>
</body>
</html>