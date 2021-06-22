<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "medical");
$query = "SELECT * FROM services";

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
    <title>Услуги</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php"><span style="color:brown">&#10133;Мед-центер&#10133;</a></style>
            <div>
            <span style="color:brown"> &#128657;Многопрофильный&#128657;<br>&#128657;медицинский центр&#128657; </style>
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
        <p>Услуги&#10004;<hr></p> </span>
        <div class="services">
           <ul>
               <?php
               if ($result = mysqli_query($link, $query)) { ?>

                   <?php while ($serv = mysqli_fetch_object($result)) {
                       if ($serv->type == 0) { ?>
                       <li>
                           <?php echo $serv->name;?>
                       </li>
                   <?php } } } ?>

           </ul>
            <ul>
                <?php
                if ($result = mysqli_query($link, $query)) { ?>

                    <?php while ($serv = mysqli_fetch_object($result)) {
                        if ($serv->type == 1) { ?>
                            <li>
                                <?php echo $serv->name;?>
                            </li>
                        <?php } } } ?>

            </ul>
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