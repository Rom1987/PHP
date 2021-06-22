<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');

// проверка корректного ввода даты и времени
if (  strtotime($_POST['datetime']) < time() ) {
    $_SESSION['error'] = "
    <script>
        alert ('Не корректный ввод даты и времени');
    </script>";

    header("Location: index.php");
    exit;

}

require ("mysql.php"); // импорт файла с подключением БД

// добавление автомобиля в БД
$upper = mb_strtoupper( $_POST['car_number'], 'utf-8' ); // перевод верхний регистр
$sql_cars ="INSERT INTO cars ( breeder, model, car_number, category )
VALUES ( '{$_POST['breeder']}', '{$_POST['model']}', '$upper', '{$_POST['category']}' )";

$sql_cars = mysqli_query($link, $sql_cars); // запрос в БД добавление cars

// добавление записи в БД
$query = mysqli_query($link, "SELECT id_user FROM users WHERE email = '{$_SESSION['query']['email']}'");
$code_user = mysqli_fetch_all($query)[0][0]; // код клиента
$query = mysqli_query($link, "SELECT id_car FROM cars ORDER BY id_car DESC LIMIT 1");
$code_car = mysqli_fetch_all($query)[0][0]; // код автомобиля

$sql_records ="INSERT INTO records ( record_address, datetime, code_user, code_car )
VALUES ( '{$_POST['record_address']}', '{$_POST['datetime']}', $code_user, $code_car)";

if ( mysqli_query($link, $sql_records) and $sql_cars ) { // запрос в БД добавление records

    $_SESSION['complete'] = "
    <script>
        alert ('Запись успешно проведена.');
    </script>";

} else {

    $_SESSION['error'] = "
    <script>
        alert ('Ошибка при записи.');
    </script>";

}

mysqli_close($link);

header("Location: index.php");
?>