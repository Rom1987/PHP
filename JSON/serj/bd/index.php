<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <script src="script.js"></script>
    <meta charset="UTF-8">
    <title>Enter form</title>
</head>
<body>

<button class="open-button" onclick="openForm1()">Войти</button>
	
	<div class="form-popup" id="myForm1">
		<form action="login.php" class="form-container" method="post">
			
			<p>Вход в аккаунт</p></br>

			<label for="name"><b>Логин</b></label>
			<input type="text" placeholder="Ваш логин" name="login1" required>
			
			<label for="passwd"><b>Пароль</b></label>
			<input type="text" placeholder="Пароль" name="passwd1" required>

			<button type="submit" class="btn">Войти</button>
			<button type="button" class="btn cancel" onclick="closeForm1()">Закрыть</button>
			
		</form>
</div>
		
		
		
		<button class="open-button" onclick="openForm2()">Регистрация</button>

		<div class="form-popup" id="myForm2">
	<form action="reg.php" class="form-container" method="post">
			
			<p>Регистрация</p></br>
			
			<label for="name"><b>Логин</b></label>
			<input type="text" placeholder="Придумайте логин" name="login" required>
			
			<label for="passwd"><b>Пароль</b></label>
			<input type="text" placeholder="Пароль" name="passwd" required>

			<button type="submit" class="btn">Отправить</button>
			<button type="button" class="btn cancel" onclick="closeForm2()">Закрыть</button>
			
	</form>
</div>
    
</body>
</html>