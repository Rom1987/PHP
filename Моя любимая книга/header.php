<?php 
require ('session.php');
?>
<div class="tabs">
        <a href="index.php"> Главная </a>
    <?php if ( !empty($_SESSION['email']) and !empty($_SESSION['password']) ): ?>
        <a href="book.php"> О книге </a>
        <a href="avtor.php"> Об авторе книги </a>
    <?php endif; ?>
</div>

<!-- авторизация -->
    <?php
    if ( empty($_SESSION['email']) and empty($_SESSION['password']) and $_SERVER['SCRIPT_NAME']!='/Моя любимая книга/form_reg.php' ): ?>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Вход</button>
    
    <?php
    else: 
    
    ?> <form action="" method="POST" style="all: unset;">
            <button name='exit'> Выйти </button>
        </form> <?php
    
    endif ?>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

    <form class="modal-content" action="auth.php" method="POST">

        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Введите email" name="email" required>
        
            <label for="password"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="password" required>
                
            <button type="submit">Войти</button>
            <button type="button" onclick="window.location.href = 'form_reg.php'">Регистрация</button>
                    
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Отмена</button>
        </div>

        </div>
        
    </form>
    </div>

</div>