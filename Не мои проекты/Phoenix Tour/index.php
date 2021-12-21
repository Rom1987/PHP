<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix Tour</title>
    <link rel="icon" href="images/Лого.png" type="images/png">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <?echo $_SESSION['user1'];?>
        <div id="favicon">
            <span><img src="images/Лого.png" width="50px" height="50px"></span>
        </div>

        <div id="logo" onclick="slowScroll('#top')">
            <span>Phoenix Tour</span>
        </div>

        <div id="about">
            <? if ( isset($_SESSION['user1']) and $_SESSION['user1']=='admin' and isset($_SESSION['password'] ) ) { ?>
            <a href="#" title="Возможности" onclick="slowScroll('#main')">Возможности</a> <?
                }?>
            <a href="#" title="Возможности" onclick="slowScroll('#main')">Возможности</a>
            <a href="#" title="Преимущества" onclick="slowScroll('#overview')">Преимущества</a>
            <a href="#" title="Контакты" onclick="slowScroll('#contacts')">Контакты</a>
            <a href="#" title="Ответы на вопросы" onclick="slowScroll('#faq')">FAQ</a>
            <a href="register.php" title="Регистрация" onclick="slowScroll('#reg')">Регистрация</a>
            <a href="auth.php" class="btn1" title="Вход" onclick="slowScroll('#hod')">Вход</a>
        </div>
    </header>

    <div id="top">
        <h1>Лучшие Туры</h1>
        <h3>Только у нас!</h3>
    </div>
        <div id="main">
          <div class="intro">
              <h2>Phoenix Tour</h2>
              <h3>Большой выбор путевок</h3>
          </div>
          <div class="text">
            <span>
                Компания Phoenix Tour осуществляет мечты людей об идеальном отдыхе с 1995 года – уже 25 лет! Туроператор предлагает путешествия в 39 стран мира с вылетами из более 40 городов России. Вниманию туристов Phoenix Tour представлены лучшие курорты и отели Турции, России, Туниса, Таиланда, Вьетнама, Греции, Испании, и других стран.
                Более 14 000 туристических агентств по всей России осуществляют продажу туров от Phoenix Tour. Мы также обладаем самой большой франчайзинговой сетью в стране, которая насчитывает более 900 фирменных офисов. Помимо этого, для наших туристов открыта единственная в России премиальная сеть агентств Phoenix Tour Elite Service, которая на данный момент насчитывает более 40 офисов продаж.
                В 2017 году Phoenix Tour, первым среди крупных туроператоров, представил специальный отдел Элитного отдыха Phoenix Tour Elite, осуществляющий обслуживание VIP-заявок.
                На протяжении всего существования Phoenix Tour пользуется большим успехом у семей с детьми. Специально для этой категории туристов уже 10 лет работает фирменная концепция идеального семейного отдыха Sun Family Club. Изюминка концепции – опытные российские педагоги, предлагающие детям всех возрастных групп не только отдых и развлечения, но и интересные развивающие занятия. 
            </span>
        </div>
       </div>



<div id="overview">
        <h2>Приемущества</h2>
        <h4>С нами все проще!</h4>

      <div class="img">
          <img src="images/2.jpg" alt=""  width="500" height="300">
          <span>Лучшие экскурсии</span>
      </div>
      <div class="img">
       <img src="images/3.jpg" alt="" width="500" height="300">
       <span>Поездки по всему миру!</span>
      </div>

    <div class="img">
       <img src="images/4.jpg" alt="" width="500" height="300">
       <span>Отдых для всех</span>
   </div>

    <div class="img">
       <img src="images/5.jpg" alt="" width="500" height="300">
       <span>Надежно и выгодно</span>
   </div>
</div>

   


<div id="contacts">
    <center><h5>Обратная связь</h5></center>
    <form id="form_input">
        <label for="name">Имя <span>*</span></label><br>
        <input type="text" placeholder="Введите имя" name="name" id="name"><br>
        <label for="email">Ваша почта <span>*</span></label><br>
        <input type="email" placeholder="Введите email" name="email" id="email"><br>
        <label for="message">Сообщение <span>*</span></label><br>
        <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
        <div id="mess_send" class="btn">Отправить</div>
   </form>
</div>


<div id="faq">
    <div>
        <span class="title">Оплата</span><br>
        <span class="heading">Как будет проходить оплата?</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Как будет проходить оплата?</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Как будет проходить оплата?</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
    </div>
    <div>
        <span class="title">Информация</span><br>
        <span class="heading">Услуги</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Услуги</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Услуги</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>

    </div>
    <div>
        <span class="title">Гарантии</span><br>
        <span class="heading">Какие гарантии есть</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Какие гарантии есть</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
        <span class="heading">Какие гарантии есть</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Minus illum perferendis officia officiis non, ex nihil eos doloribus consequatur delectus vel exercitationem reiciendis incidunt ea vitae ipsa maxime aliquid ipsam?
        </p>
    </div>
</div>

    









        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function slowScroll(id) {
              $('html,body').animate ({
                    scrollTop: $(id).offset().top
                }, 500);
            }

            $(document).on("scroll", function () {1
                if($(window).scrollTop() === 0)
                  $("header").removeClass("fixed");
               else 
                  $("header").attr("class","fixed");
            });

        </script>

</body>
</html>