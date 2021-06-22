<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require ('session.php');
require ('mysql.php');

function Update($link) {

    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {

        if ( strtotime($_POST['datetime'.$value]) < time() ) {

            $_SESSION['error'] = "
            <script>
                alert ('Не корректный ввод даты и времени');
            </script>";
        
            if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

                header("Location: account.php");
            
            else:
            
                header("Location: tab_records.php");
            
            endif;
            exit;
        
        }
        
        if ( mysqli_query($link, "UPDATE records SET record_address =
        '{$_POST['record_address'.$value]}', datetime='{$_POST['datetime'.$value]}'
        WHERE id_record = $value") ) {

            $_SESSION['complete'] = "<script> alert ('Обновление прошло успешно.'); </script>";

        } else {
            
            $_SESSION['error'] = "<script> alert ('Ошибка при обновлении.'); </script>";
            mysqli_close($link);

            if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

                header("Location: account.php");

            else:

                header("Location: tab_records.php");

            endif;
            exit;

        }
        
    }

}

function Delete($link) {
    
    // $value это все значения id_users
    foreach ($_POST['box'] as $value) {
        
        $sql_query = mysqli_query ($link, "SELECT code_car FROM records WHERE id_record = $value");
        $sql_code_car = mysqli_fetch_all($sql_query)[0][0];

       if ( mysqli_query($link, "DELETE FROM records WHERE id_record = $value")
        and mysqli_query($link, "DELETE FROM cars WHERE id_car = $sql_code_car") ) {

            $_SESSION['complete'] = "<script> alert ('Удаление прошло успешно.'); </script>";

        } else {

            $_SESSION['error'] = "<script> alert ('Ошибка при удалении.'); </script>";
            mysqli_close($link);

            if ( $_SERVER['HTTP_REFERER']=='http://php/GAI/account.php' ):

                header("Location: account.php");

            else:

                header("Location: tab_records.php");

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

    header("Location: tab_records.php");

endif;
?>