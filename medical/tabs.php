<nav>
    <div class="container">
        <ul>
            <li>
                <a href="index.php">
                    Главная
                </a>
            </li>
            <li>
                <a href="services.php">
                    Услуги
                </a>
            </li>
            <li>
                <a href="appointment.php">
                    Записаться
                </a>
            </li>
            <li>
                <a href="contacts.php">
                    Контакты
                </a>
            </li>
            <li>
                <a href="register.php">
                    Регистрация
                </a>
            </li>
            <li>
                <a href="auth.php">
                    Войти
                </a>
            </li>
            <? if ( $_SESSION['Login']=='admin' and isset($_SESSION['Password']) ) {?>
                <li>
                    <a href="user.php">
                        Клиенты
                    </a>
                </li>

                <li>
                    <a href="record.php">
                        Запись
                    </a>
                </li>
            <? } ?>
        </ul>
    </div>
</nav>