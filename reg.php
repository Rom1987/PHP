<?php
$login = filter_var(
    trim($_POST['login']),
    FILTER_SANITIZE_STRING
);
$pass = filter_var(
    trim($_POST['pass']),
    FILTER_SANITIZE_STRING
);
$fam = filter_var(
    trim($_POST['fam']),
    FILTER_SANITIZE_STRING
);
$im = filter_var(
    trim($_POST['im']),
    FILTER_SANITIZE_STRING
);
$ot = filter_var(
    trim($_POST['ot']),
    FILTER_SANITIZE_STRING
);
$adress = filter_var(
    trim($_POST['adress']),
    FILTER_SANITIZE_STRING
);
$date = filter_var(
    trim($_POST['date']),
    FILTER_SANITIZE_STRING
);
$number = filter_var(
    trim($_POST['number']),
    FILTER_SANITIZE_STRING
);





$pass = md5($pass . "sdadasadssв4353452351dsaasasd");




mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost', 'root', '', 'aircraft');





if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['form-registration'])) {
    $errors = array();

    if (empty($_POST['login'])) {
        $errors[] = 'Введите логин!';
    } else {
        $query = mysqli_query($link, "SELECT * FROM account WHERE Nickname='$login'");
        $mass = mysqli_fetch_assoc($query);
        if ($mass['Nickname'] == $_POST['login']) {
            $errors[] = 'Пользователь с таким логином существует!';
        }
    }
    if (empty($_POST['pass'])) {
        $errors[] = 'Введите пароль!';
    }

    if (empty($_POST['fam'])) {
        $errors[] = 'Введите фамилию!';
    }

    if (empty($_POST['im'])) {
        $errors[] = 'Введите имя!';
    }

    if (empty($_POST['ot'])) {
        $errors[] = 'Введите отчество!';
    }

    if (empty($_POST['adress'])) {
        $errors[] = 'Введите адрес проживания!';
    }

    if (empty($_POST['date'])) {
        $errors[] = 'Введите дату рождения!';
    }

    if (empty($_POST['number'])) {
        $errors[] = 'Введите номер телефона!';
    }
    if (empty($errors)) {

        $link->query("INSERT INTO `account` (`Nickname`, `Password`) VALUES ('$login', '$pass')");

        $query = mysqli_query($link, "SELECT ID FROM account ORDER BY ID DESC LIMIT 1");
        $count_BD = (int)mysqli_fetch_row($query)[0];


        $link->query("INSERT INTO `users` (`Name`, `Sername`, `Otcestvo`, `Date_of_Birth`, `Phone`, `User_Code`) VALUES ('$im', '$fam', '$ot', '$date', '$number', '$count_BD')");


        $link->close();
    } else {

?>

        <div class="error">
            <?php
            echo (array_shift($errors));
            ?>
        </div>
<?php
    }
}

?>