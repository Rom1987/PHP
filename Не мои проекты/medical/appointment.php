<?php
session_start();
$link = mysqli_connect("localhost","root","","medical");
mysqli_query($link, "SET NAMES 'utf-8'");
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
    <title>Запись к врачу</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php"><span style="color:brown">&#10133;Мед-центер&#10133;</a> </style>
            <div>
                <span style="color:brown">
                    &#128657;Многопрофильный&#128657;<br>&#128657;медицинский центр &#128657;</span>
            </div>
            <div class="phone">
                <span style="color:brown">
                +7 (495) 522 53 40 &#128222;<br>
                +7 (968) 781 45 59 &#128222; </span>
            </div>
        </div>
    </div>
    <?
    include('tabs.php');
    ?>
</header>

<section>
    <div class="container">
        <span style="color:brown">
        <p class="title-maim">Запись к специалисту&#10004;<hr></p></span>
        <form class="appointment" action="" method="POST">
            <input placeholder="ФИО" type="text" name="LFS">
            <div class="wrap-input">
                <input placeholder="Телефон" type="number" name="Phone">
                <input placeholder="Email" type="email" name="Email">
            </div>
            <div class="wrap-input">
                <select name="Specialization" id="">
                    <option value="">Выберите специализацию</option>
                    <option value="Венерология"> Венерология</option>
                    <option value="Гастроэнтерология"> Гастроэнтерология</option>
                    <option value="Гематология"> Гематология</option>
                    <option value="Дерматология"> Дерматология</option>
                    <option value="Диетология"> Диетология</option>
                    <option value="Кардиология"> Кардиология</option>
                </select>
                <select name="Doctor" id="">
                    <option value="">Выберите врача</option>
                    <option value="АЙРАПЕТЯН Роберт"> АЙРАПЕТЯН Роберт</option>
                    <option value="АКИМОВА Светлана"> АКИМОВА Светлана</option>
                    <option value="АКСЕНОВ Кирилл"> АКСЕНОВ Кирилл</option>
                    <option value="АЛЕКСАНДРОВА Валентина"> АЛЕКСАНДРОВА Валентина</option>
                    <option value="АЛЕКСЕЕВА Инна"> АЛЕКСЕЕВА Инна</option>
                    <option value="АЛЕСКЕРОВА Перване"> АЛЕСКЕРОВА Перване</option>
                </select>
            </div>
            <div class="wrap-input">
                <input placeholder="Дата приема" type="date" name="Date">
                <input placeholder="Время приема" type="time" name="Time">
            </div>
            <textarea placeholder="Комментарий" name="Comment"></textarea>
            <button name="send">Отправить</button>
        </form>
    </div>
</section>

<?
/*Регистрация*/
$LFS = $_POST['LFS'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Specialization = $_POST['Specialization'];
$Doctor = $_POST['Doctor'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];
$Comment = $_POST['Comment'];

// проверка на наличие ошибок
if( isset($_POST['send']) ) {
  $errors = array();

  if( empty($_POST['LFS']) ) { 
    $errors[] = 'Введите ФИО!';
  }

  if( empty($_POST['Phone']) ) { 
    $errors[] = 'Введите телефон!';
  } else if ( strlen($_POST['Phone'])!=11 ) {
    $errors[] = 'Номер телефона должен состоять из 11 цифр';
  }
  
  if( empty($_POST['Email']) ) { 
    $errors[] = 'Введите email!';
  }

  if( empty($_POST['Specialization']) ) { 
    $errors[] = 'Выберите специализацию!';
  }

  if( empty($_POST['Doctor']) ) {
    $errors[] = 'Выберите врача!';
  }

  if( empty($_POST['Date']) ) { 
    $errors[] = 'Выберите дату приёма!';
  }

  if( empty($_POST['Time']) ) { 
    $errors[] = 'Выберите время приёма!';
  }

  // если нет ошибок то отправляем
  if ( empty($errors) ) {
    $sql ="INSERT INTO record (LFS, Phone, Email, Specialization, Doctor, Date, Time, Comment)
    VALUES ('$LFS', '$Phone', '$Email', '$Specialization', '$Doctor', '$Date', '$Time', '$Co')";
    mysqli_query($link, $sql);

    ?>
    <div style="display:inline-block; color:lime;">
    Вы записались к специалисту
    </div>
  <? 
  mysqli_close($link);
  }
  else { ?>
    <!-- array_shift() - извлекает первый элемент массива. -->
    <div style="color: red;"> <? echo (array_shift($errors)) ?> </div> <br>
  <? }
}
?>

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