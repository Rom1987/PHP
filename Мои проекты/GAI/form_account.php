<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');
require ('mysql.php');

function Update($link) {

    if ( mysqli_query($link, "UPDATE users SET email='{$_POST['email']}', l_f_s='{$_POST['l_f_s']}',
    address='{$_POST['address']}', date_of_birth='{$_POST['date_of_birth']}', phone='{$_POST['phone']}'
    WHERE id_user = {$_POST['update']}") ) {

        $_SESSION['complete'] = "<script> alert ('Обновление прошло успешно.'); </script>";

    } else {
        
        mysqli_close($link);
        $_SESSION['error'] = "<script> alert ('Ошибка при обновлении.'); </script>";
        header("Location: account.php");
        exit;

    }
    
    // перезаписываем session
    $query = mysqli_query($link, "SELECT * FROM users WHERE email = '{$_POST['email']}'");
    $mass = mysqli_fetch_assoc($query);
    
    if ( $_SESSION['email'] == $_SESSION['email_admin'] ){
        
        require ('admin.php');

    }

    $_SESSION['query'] = $mass;
    $_SESSION['email'] = $_POST['email'];

}

function Delete($link) {
    
    $code = mysqli_query($link, "SELECT code_car FROM records WHERE code_user = {$_POST['remove']}");
    $arr_code = mysqli_fetch_all($code)[0][0];
    if (
    mysqli_query($link, "DELETE FROM records WHERE code_user = {$_POST['remove']}") and
    mysqli_query($link, "DELETE FROM cars WHERE id_car = '$arr_code'") and
    mysqli_query($link, "DELETE FROM users WHERE id_user = {$_POST['remove']}") ) {

        session_unset(); // удаление всех session
        $_SESSION['complete'] = "<script> alert ('Удаление прошло успешно.'); </script>";
        header("Location: index.php");
        exit;

    } else {

        mysqli_close($link);
        $_SESSION['error'] = "<script> alert ('Ошибка при удалении.'); </script>";
        header("Location: account.php");
        exit;

    }

}

if ( isset( $_POST['update'] ) ) {
    Update($link);
} else if ( isset( $_POST['remove'] ) ) {
    Delete($link);
}

mysqli_close($link);

header("Location: account.php");
?>