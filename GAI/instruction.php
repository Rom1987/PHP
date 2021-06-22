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

    <div class="wrapper">
        <div class="inner-wrapper">
            <h3> Постановка ТС на учет в ГИБДД </h3>
            <p> Всем нам известно то радостное чувство - приобретение автомобиля или мотоцикла. Сколько положительных эмоций и грандиозных планов открывает такое приобретение. И лишь одна обязательная процедура не даёт нам спать спокойно - это постановка ТС в МРЭО ГИБДД. До того, как выдадут свидетельство о регистрации транспортного средства (СТС) с указанием наших личных данных, до того, как в базе МРЭО ГИБДД появится заветная запись о владельце автомобиля (мотоцикла), нас не покидает лёгкое чувство тревоги. </p>
            <p> Произвести регистрацию автомобиля в ГАИ ГИБДД необходимо в течение 10 дней со дня покупки. Штраф за несоблюдения этого правила - 1500р. для физических лиц и 5000р. для юридических лиц </p>
            <p> Документы, необходимые для постановки ТС на учёт в ГИБДД: </p>
            <p> 1) Паспорт собственника или доверенного лица. </p>
            <p> 2) ПТС (паспорт транспортного средства) это основной документ ТС. Представляет собой голубой лист бумаги формата А4, защищённый водяными знаками. В нём содержится информация о ТС и собственниках.</p>
            <p> 2.1) Копия ПТС. Лучше, сделать. </p>
            <p> 3) СТС (свидетельство о регистрации ТС). Розовая пластиковая карточка, содержит идентификационную  информацию о ТС и настоящем собственнике. Этого документа может не быть, если ТС не стоит на учёте. </p>
            <p> 4) Договор Купли - Продажи, или иной документ подтверждающий право собственности (Завещание, Договор Дарения...). </p>
            <p> 5) Промежуточный(е) договор(а). При необходимости. </p>
            <p> 6) Полис ОСАГО. Важно, что в полисе в графе "Собственник" был прописан именно собственник ТС. Просто, быть вписанным в число лиц, допущенных к управлению не достаточно! </p>
            <p> 7) Квитанция, подтверждающая оплату гос. пошлины за регистрационные действия. </p>
            <p> <b> !!!С 01.01.2020 Введены новые правила по регистрации автомобилей в ГИБДД. </b> Основные моменты, касающиеся пакета документов и общих правил остались неизменны. Выделим два главных изменения, которые затронут многих: </p>
            <p> <b> -ГИБДД уходит от выпуска государственных регистрационных знаков. </b> По новым правилам, при постановке на учёт автомобиля регистрационный знак Вам присвоят, но не выдадут. А Вы будите обязаны сами изготовить ГРЗ в любой компании. Но на данный момент на складах ГИБДД очень много изготовленных ГРЗ. И пока они не закончатся, ГИБДД продолжит их выдачу. В том случае, если регистрация собственника соответствует региону, в котором происходит регистрация транспортного средства. </p>
            <p> <b> -Регион снова наделяют смыслом. </b> Провести регистрационное действие можно в любом отделение МРЭО ГИБДД ГАИ, не зависимо от прописки. Но государственный регистрационный знак Вашему авто будет присвоен согласно прописки собственника. </p>
            <p> С региональной привязкой действительно всё серьёзно. К примеру, если Вы прописаны в Московской области, на Вашем автомобиле номера с регионом Москва (77, 99, 197, 777, 799...). Вас, конечно, никто сейчас не заставит поменять эти номера. Но, Вы их не сможете перевесить на другой свой автомобиль. И даже, если Вы потеряете СТС, при восстановление Вам будут присвоены другие номера своего региона. </p>
            <p> Самый простой способ <b> поставить автомобиль на учёт в ГИБДД </b> - это обратиться в нашу компанию. Наши специалисты проведут эту операцию за Вас в любое удобное время. Мы зарегистрируем автомобиль быстро без лишних очередей. Все вопросы сотрудников ГИБДД мы возьмём на себя. Займём для Вас очередь, заплатим госпошлину, напечатаем заявление и проведём все необходимые действия. Вы оплатите нашу работу после того, как автомобиль будет зарегистрирован, и Вы получите на руки ПТС с внесёнными изменениями, новый СТС с Вашими данными и гос. номер (при необходимости)  </p>
            <p> Не всегда сделка купли-продажи между продавцом и покупателем оформляется правильно с точки зрения закона РФ. Этим грешат даже крупные автосалоны: cтавят отметки в ПТС там, где их ставить нельзя или забывают поставить отметки там, где это необходимо, не предоставляют промежуточные договора, допускают ошибки в договоре купли продажи авто. <b> Постановка автомобиля на учёт в ГИБДД Москвы </b> наша прямая специализация и мы готовы помочь Вам с этим в любое время! </p>
            <p> <b> Приобретаемый автомобиль необходимо поставить на учёт в десятидневный срок. </b> Не соблюдение этого правила влечёт за собой штраф 1500р., но это не всё. Вам придётся пройти в другое окно и потратить своё время на вынесение постановления о наложение штрафа и только после этого продолжить регистрацию транспортного средства, <b> но если Вы обратитесь к нам, мы избавим Вас от этих хлопот. </b> </p>
            <p> <b> Частые ошибки при оформление сделки купли-продажи транспортного средства (автомобиля, мотоцикла, прицепа...): </b> </p>
            <p> Для оформления сделки нужно правильно составить договор купли - продажи и заполнить ПТС, разберём несколько типичных ошибок из - за которых сотрудники МРЭО ГИБДД откажут Вам в регистрации ТС (автомобиля, мотоцикла) </p>
            <p> 1) Договор купли - продажи ТС: </p>
            <ul>
                <li> заполняется без исправлений, если неправильно написана какая-нибудь буква или цифра, перепишите весь договор заново. </li>
                <li> обязательно укажите город и дату составления договора. </li>
                <li> в графе "документ удостоверяющий личность" должен быть указан паспорт или иной документ, имеющий такую силу по закону РФ. К примеру: Вид на жительство не является "документом удостоверяющим личность". Если одна из сторон договора купли - продажи автомобиля является иностранным гражданином, обязательно укажите его иностранный паспорт. Часто, в таких ситуациях люди указывают вид на жительство и получают законный отказ в регистрации автомобиля в ГИБДД.
Вы можете воспользоваться нашим конструктором ДКП , после заполнения распечатайте его в трёх экземплярах. </li>
            </ul>
            <p> 2) ПТС тут всё просто в свободном поле (по середине) обязательно нужно поставить две подписи "подпись прежнего собственника" и "подпись нынешнего собственника" - этого достаточно для того, чтобы постановка на учёт авто прошла успешно. На полях ПТС ничего писать нельзя, они существуют для особых отметок. </p>
            <p> Мы знаем все эти и многие другие ошибки, знаем как их устранить, как ответить на любой каверзный вопрос придирчивого инспектора ГИБДД. Можете быть уверены - если Вы обратились к нам, то Ваше ТС (автомобиль, мотоцикл) поставят на учёт в самые кротчайшие сроки. </p>
            <p> <b> Чтобы записаться на постановку ТС на учет в ГИБДД позвоните нам по телефонам ниже: </b> </p>
            <ul>
                <li> 8 (937) 899-08-56 </li>
                <li> 8 (495) 244-91-89 </li>
            </ul>
            <p> Или напишите свой запрос нам через <a href="index.php?#button"> специальную форму на сайте. </a> </p>
            <p> <b> Схема регистрации (постановки на учёт) автомобиля, мотоцикла и прочих ТС: </b> </p>
            <p> Не важно, ставите на учёт в ГИБДД Вы новый автомобиль, или приобретённый с рук сама процедура в ГИБДД будет выглядеть одинаково. </p>
            <ul> 
                <li> собирается пакет необходимых документов (описан выше) </li>
                <li> печатается заявление с указанием необходимых действий </li>
                <li> оплачиваются гос.пошлины </li>
                <li> проводится осмотр сотрудниками ГАИ ГИБДД на площадке осмотра </li>
                <li> присваивается регистрационный номер ТС, изготавливается СТС, вносятся изменения в ПТС </li>
            </ul>
            <p> <b> Осмотр ТС сотрудниками ГАИ ГИБДД на площадке осмотра: </b> </p>
            <p> Как правило, автомобиль осматривают два сотрудника. Инспектор сверяет номера на кузове, раме, двигателе и других агрегатах. Инспектор - криминалист более детально рассматривает номера и номерные таблички. Его задача выяснить, не подвергались ли эти номера изменениям.
И оба они смотрят соответствует ли транспортное средство требованиям закона РФ. Если в конструкцию ТС вносились какие - нибудь изменения, на это нужно будет предоставить документы. Тонировку с фар, передних ветровых стёкол придётся снять.  </p>
            <p> <b> Государственные пошлины за регистрацию ТС в органах ГАИ ГИБДД: </b> </p>
            <div class="instruction-tab">
                <div> Услуга </div>
                <div> Стоимость </div>
                <div> Выдача СТС </div>
                <div> 500р. </div>
                <div> Внесение изменений в ПТС </div>
                <div> 350р. </div>
                <div> Выдача гос. номера </div>
                <div> 2000р. </div>
            </div>
            <p> *В зависимости от способа оплаты, может взиматься комиссия. В автоматах рядом с отделениями ГИБДД комиссия, обычно, составляет 150 - 250р. </p>
                <p> *За внесение изменений в электронный ПТС плата не взимается, все действия на 350р. дешевле. </p>
                <p> *Выдача гос. рег. знаков в отделение ГАИ, МРЭО ГИБДД осуществляется только при условии постановки на учёт автомобиля в своём регионе. (Зарегистрированы в Москве и ставите автомобиль на учёт в Москве (Московском ГИБДД)). </p>
                <p> Чтобы ориентироваться в размере пошлин на регистрацию авто в ГИБДД, нужно запомнить: при каждом обращение за регистрационными действиями с транспортным средством в ГИБДД вносятся изменения в ПТС(кроме электронных) 350р. и выдаётся новый СТС 500р., иными словами - 850р. Вы платите в любом случае, а 2000р. за изготовления номера оплачиваете тогда, когда получаете новый государственный регистрационный знак. </p>
                <p> В этой статье мы разобрали основные моменты, связанные с постановкой на учёт автомобиля в МРЭО ГИБДД, ГАИ. Чтобы не забивать свою голову лишней информацией и экономить своё время, обращайтесь к нам. АгентГаи решит любой вопрос в органах ГАИ, МРЭО ГИБДД. </p>
                <p> Самостоятельно заниматься сбором документов и узнавать все этапы по прохождению регистрации, сидеть в длинных очередях — утомительное занятие для каждого автолюбителя. Зачем тратить драгоценное время, если можно воспользоваться нашими услугами, наши специалисты все сделают за Вас в короткие сроки.  </p>
                <p> Главное преимущество обращения к нам для постановки транспортного средства на учет в ГИБДД - экономия личного времени и сил. Наши специалисты проведут грамотную работу по сбору документов и проконтролируют все этапы регистрационной деятельности. А опытные юристы ответят на все интересующие вопросы, которые могут возникнуть у Вас в процессе оформления документов. </p>
        </div>
    </div>
</body>
</html>