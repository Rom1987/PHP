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
        <!-- регистрация -->
            <form class="modal-content" action="reg.php" method="POST">

                <div class="container" >
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Введите email" name="email" required>
                
                    <label for="password"><b>Пароль</b></label>
                    <input type="password" placeholder="Введите пароль" name="password" required>
                        
                    <label for="l_f_s"><b>ФИО</b></label>
                    <input type="text" placeholder="Введите ФИО" name="l_f_s" required>
                
                    <label for="address"><b>Адрес проживания</b></label>
                    <input type="text" placeholder="Введите адрес проживания" name="address" required>
                    
                    <label for="date_of_birth"><b>Дата рождения</b></label>
                    <input type="date" placeholder="Введите дату рождения" name="date_of_birth" required>
                
                    <label for="phone"><b>Номер телефона</b></label>
                    <input type="tel" placeholder="Введите номер телефона" name="phone" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" maxlength="11" required>

                    <button type="submit">Отправить</button>
                </div>

            </form>
    </div>
</body>
</html>