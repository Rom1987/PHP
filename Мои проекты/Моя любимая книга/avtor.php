<?php 
require ('session.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КРАСНАЯ ТАБЛЕТКА</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/auth.css">
    <link rel="stylesheet" type="text/css" href="css/avtor.css">

    <script src="../Jquery/jquery-3.5.1.js"></script>
    <script>
        $(function(){
            $("header").load("header.php");
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
            <div class="head-text"> Курпатов, Андрей Владимирович </div>
            <div class="start"> 
                Андре́й Влади́мирович Курпа́тов (род. 11 сентября 1974, Ленинград, СССР) — российский телеведущий и продюсер, психотерапевт, автор книг.
            </div>
            <div class="img">
                <img src="https://ya-zhenschina.com/uploads/posts/2019-08/thumbs/156542762224196164157549368.jpg" alt="">
            </div>
            <div class="biogr-head"> <h3> Биография </h3> </div>
            <div class="biogr"> 
                <p> Родился 11 сентября 1974 г. в Ленинграде. Отец — психотерапевт В. И. Курпатов, дед по материнской линии — хирург А. Б. Занданов. </p>
                <p> В 1999 году на базе ВМедА и СПбМАПО получил специализацию по психиатрии и психотерапии и начал работать в Санкт-Петербургской психиатрической больнице № 7: вначале как психотерапевт, затем — как заведующий психотерапевтическим центром при больнице. </p>
                <p> С мая по декабрь 2005 года дважды в день на телеканале «Домашний» выходило его психотерапевтическое ток-шоу «Всё решим с доктором Курпатовым». В 2006-м телепроект перешёл на «Первый канал», сменив название на «Доктор Курпатов». Самый рейтинговый выпуск шоу вышел 6 августа 2006 года — по данным «TNS Россия (англ.)», его посмотрели 2,8 миллионов человек. Однако весной 2007-го шоу закрылось. </p>
                <p> В 2007 году стал генеральным директором телекомпании «Красный квадрат». 9 декабря 2009 награждён Почетной грамотой Президента РФ за «активное участие в подготовке и проведении» Евровидения-2009. С 2010 года — член Академии российского телевидения. </p>
                <p> Курпатов — автор более 30 книг, изданных тиражом более 5 млн экземпляров и переведенных на 8 языков. </p>
            </div>
            <div class="critic-head"> <h3> Критики </h3> </div>
            <div class="critic"> 
                <p> В 2006 году Рамиль Гарифуллин, директор Казанского центра психологической консультации и реабилитации, раскритиковал программу «Доктор Курпатов», указав, что вместо психотерапевтического процесса Курпатов занимается нравоучениями. </p>
                <p> Биохимик Кристина Шарло совместно с Алексеем Стукальским раскритиковали книги Курпатова, указав, что его материалы содержат достаточно большое количество ошибок в таких научных областях как генетика, сексология и нейрофизиология. Также они сообщили, что не нашли ни одной научной работы Курпатова на крупных международных научных платформах Pubmed, Scopus и Web of Science. Курпатов ответил, что его научные работы были опубликованы в сборниках тезисов к неким научным конференциям, и указал в качестве примера две монографии: «Психотерапия. Системный поведенческий подход» и «Психосоматика. Психотерапевтический подход». </p>
            </div>
        </div>
    </div>
</body>
</html>