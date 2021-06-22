<style>
body {
margin: 2; /* Убираем отступы */
}
.parent {
margin: 5%; /* Отступы вокруг элемента */
background: #FFFFE0; /* Цвет фона */
padding: 10px; /* Поля вокруг текста */
}
.child {
border: 3px solid #FFFF00; /* Параметры рамки */
padding: 10px; /* Поля вокруг текста */
margin: 10px; /* Отступы вокруг */
}
</style>
<div class="parent">
<div class="child">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal">«В гостях у Детрова»</h5>
<nav class="my-2 my-md-0 mr-md-3">
<a class="p-2 text-dark" href="#">Главная</a>
<a class="p-2 text-dark" href="#">Контакты</a>
<a class="p-2 text-dark" href="#">Адрес</a>
<a class="p-2 text-dark" href="#">Цены</a>
</nav>
<?php
if($_COOKIE['user'] == 'Да') {
?>
<a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
<?} else { ?>
<a class="btn btn-outline-primary" href="/auth.php">Войти</a>
<? } ?>
</div>
</div>
</div>