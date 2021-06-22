<style>
<?php echo file_get_contents("css/style.css"); ?>
</style>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">
	<div class="container-fluid">
	<a href="#" class="navbar-brad"><img scr="img/logo.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
		<span class="navbar-toggler-icon">
		</span>
		</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item activ">
		<a class="nav-link" href="index.php">Главная</a>
		</li>
			<li class="nav-item activ">
			<a class="nav-link" href="kontakt.php">Контакты</a>
			</li>
				<li class="nav-item activ">
				<a class="nav-link" href="meny.php">Меню</a>
				</li>
					<li class="nav-item activ">
					<a class="nav-link" href="dostavka.php">Доставка на дом</a>
					</li>
	</div>


<?php
if($_COOKIE['user'] == ''):
?>
<a class="btn btn-outline-primary" href="/register.php">Войти</a>
<?php
else:
?>
<a class="btn btn-outline-primary" href="/register.php">Личный кабинет</a>
<?php endif; ?>
</nav>
</div>