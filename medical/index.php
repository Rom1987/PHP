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
        p:first-letter {
        font-family: "Times New Roman"; /* Гарнитура шрифта первой буквы */
        font-size: 130%; /* Размер шрифта первого символа */
        }
         p {
        font-family: Arial; /* Гарнитура шрифта основного текста */
        font-size: 130%; /* Размер шрифта */
    }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php">
                <span style="color:brown"><p><br>&#10133;Мед-центер&#10133;<br></p></a></span>
            <div>
                <span style="color:brown"><br><p>&#128657;Московский Медецинский Центр&#128657;</p></span>
            </div>
            <div class="phone">
                <span style="color:brown">
               <p> 8 (495) 522 53 40 &#128222;<br></p>
                <p>8 (968) 781 45 59 &#128222;</p> </span>
            </div>
        </div>
    </div>
    <?
    include ('tabs.php');
    ?>
</header>
<section>
    <div class="container">
        <img class="offer" src="img/header.jpg" alt="">

    </div>
</section>
<section class="section-serv">
    <div class="container">
        <span style="color:brown"><p>Услуги&#10004;</p></span>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-info">
                <p>Поликлиническое<br> отделение</p>
                <img src="img/1.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>
        <div class="card">
            <div class="card-info">
                <p>Отделение врачебной диагностики<br> отделение</p>
                <img src="img/2.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>
        <div class="card">
            <div class="card-info">
                <p>Стоматологическое отделение</p>
                <img src="img/3.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>
        <div class="card">
            <div class="card-info">
                <p>Офтальмологическое отделение лазерной микрохирургии</p>
                <img src="img/4.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>
        <div class="card">
            <div class="card-info">
                <p>Отделение врачебной и лазерной косметологии</p>
                <img src="img/5.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>
        <div class="card">
            <div class="card-info">
                <p>Салон красоты</p>
                <img src="img/6.svg" alt="">
            </div>
            <button>Перейти</button>
        </div>

    </div>
</section>
<section class="section-doctors">
    <div class="container">
        <span style="color:brown">
        <p>Наши доктора&#10004;</p></span>
        <div class="doctor">
            <div class="doctor__item">
                <span style="color:green">
                <img src="img/doctor-1.jpg" alt="">
                <h4>Евгений Либсон</h4>
                <p>ПРОФЕССОР ЛУЧЕВОЙ ДИАГНОСТИКИ</p></span>
            </div>
            <div class="doctor__item">
                <span style="color:green">
                <img src="img/doctor-2.jpg" alt="">
                <h4>Жан-Рене Милье</h4>
                <p>ОТОРИНОЛАРИНГОЛОГ-ХИРУРГ</p></span>
            </div>
            <div class="doctor__item">
                <span style="color:green">
                <img src="img/doctor-3.jpg" alt="">
                <h4>Нидаль Салим</h4>
                <p>КЛИНИЧЕСКИЙ ОНКОЛОГ,<br>РАДИАЦИОННЫЙ ОНКОЛОГ</p></span>
            </div>
            <div class="doctor__item">
                <span style="color:green">
                <img src="img/doctor-4.jpg" alt="">
                <h4>Жан-Мишель Дерлон</h4>
                <p>НЕЙРОХИРУРГ, ПРОФЕССОР</p></span>
            </div>
        </div>
    </div>
</section>
<footer>
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