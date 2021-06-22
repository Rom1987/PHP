<?php 
require ('session.php');
?>

<div class="img">
    <a href="index.php">
        <img src="image/logo.png" alt="">
    </a>
</div>

<div class="tabs">
    <a href="instruction.php"> Инструкция </a> <?php
    if ( $_SESSION['email'] == $_SESSION['email_admin'] and !empty($_SESSION['password']) ): ?>
        <a href="tab_users.php"> Клиенты </a>
        <a href="tab_cars.php"> Машины </a>
        <a href="tab_records.php"> Записи </a> <?php
    endif;
    if ( !empty($_SESSION['email']) and !empty($_SESSION['password']) ): ?>
        <a href="account.php"> Аккаунт </a> <?php
    endif; ?>


<!-- авторизация -->
    <?php if ( empty($_SESSION['email']) and empty($_SESSION['password']) ): ?>

        <button class="to_come_in" onclick="document.getElementById('id01').style.display='block'">Войти</button>
    
    <?php 

    else: 
    
    ?> <form action="" method="POST" style="all: unset; color: black;">
            <button class="exit" name='exit'> Выйти </button>
        </form> <?php
    
    endif ?>
</div>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

    <form class="modal-content" action="auth.php" method="POST">

        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Введите email" name="email" required>
        
            <label for="password"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="password" required>
                
            <button type="submit">Войти</button>
            <button type="button" onclick="document.getElementById('id03').style.display='block'">Регистрация</button>
                    
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Отмена</button>
        </div>

        </div>
        
    </form>
</div>

<!-- регистрация -->
<div id="id03" class="modal">

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>

    <form class="modal-content" action="reg.php" method="POST">

        <div class="container">
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
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Отмена</button>
        </div>
    </form>

</div>