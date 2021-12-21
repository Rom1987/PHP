<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');
require ('mysql.php');

function Update($link) {

    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {

        if ( mysqli_query($link, "UPDATE users SET email='{$_POST['email'.$value]}', l_f_s='{$_POST['l_f_s'.$value]}',
        address='{$_POST['address'.$value]}', date_of_birth='{$_POST['date_of_birth'.$value]}', phone='{$_POST['phone'.$value]}'
        WHERE id_user='$value'") ) {

            $_SESSION['complete'] = "<script> alert ('Обновление прошло успешно.'); </script>";

        } else {
            
            $_SESSION['error'] = "<script> alert ('Ошибка при обновлении.'); </script>";
            mysqli_close($link);

            header("Location: tab_users.php");
            exit;

        }

        // перезаписываем session
        if ( $value == 1 ) {

            require('admin.php');
            $query = mysqli_query($link, "SELECT * FROM users WHERE id_user = $value");
            $mass = mysqli_fetch_assoc($query);
            $_SESSION['query'] = $mass;
            $_SESSION['email'] = $_SESSION['email_admin'];

        }

    }

}
function Delete($link) {
    
    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {
        
        $code = mysqli_query($link, "SELECT code_car FROM records WHERE code_user = '$value'");
        $arr_code = mysqli_fetch_all($code)[0][0]; // код автомобиля
        if (
        mysqli_query($link, "DELETE FROM records WHERE code_user = '$value'") and
        mysqli_query($link, "DELETE FROM cars WHERE id_car = '$arr_code'") and
        mysqli_query($link, "DELETE FROM users WHERE id_user = '$value'") ) {

            $_SESSION['complete'] = "<script> alert ('Удаление прошло успешно.'); </script>";

        } else {

            $_SESSION['error'] = "<script> alert ('Ошибка при удалении.'); </script>";
            mysqli_close($link);
            header("Location: tab_users.php");
            exit;

        }

    }

}

if ( isset( $_POST['update'] ) ) {
    Update($link);
} else if ( isset( $_POST['remove'] ) ) {
    Delete($link);
}

mysqli_close($link);

header("Location: tab_users.php");
?>