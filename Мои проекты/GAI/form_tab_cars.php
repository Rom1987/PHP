<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require('mysql.php');
require('session.php');

function Update($link) {

    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {

        if ( mysqli_query($link, "UPDATE cars SET breeder = '{$_POST['breeder'.$value]}',
        model = '{$_POST['model'.$value]}', car_number = '{$_POST['car_number'.$value]}',
        category = '{$_POST['category'.$value]}'
        WHERE id_car = $value") ) {

            $_SESSION['complete'] = "<script> alert ('Обновление прошло успешно.'); </script>";

        } else {
            
            $_SESSION['error'] = "<script> alert ('Ошибка при обновлении.'); </script>";
            mysqli_close($link);
            if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

                header("Location: account.php");
            
            else:
            
                header("Location: tab_cars.php");
            
            endif;
            exit;

        }
        
    }

}

function Delete($link) {
    
    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {

        if ( mysqli_query($link, "DELETE FROM records WHERE code_car = $value") and
        mysqli_query($link, "DELETE FROM cars WHERE id_car = $value") ) {

            $_SESSION['complete'] = "<script> alert ('Удаление прошло успешно.'); </script>";

        } else {

            $_SESSION['error'] = "<script> alert ('Ошибка при удалении.'); </script>";
            mysqli_close($link);
            if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

                header("Location: account.php");
            
            else:
            
                header("Location: tab_cars.php");
            
            endif;
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

if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

    header("Location: account.php");

else:

    header("Location: tab_cars.php");

endif;
?>