<?php 
//COOKIE
   if (isset($_GET['exit'])){
    setcookie("name", '');
    setcookie("password", '');
      }
        /*Авторизация*/
        $form = '
        <form  action=""  method="post">
        <label for="name1"> Введи имя</label> <input name="name1" required oncheck="color_();" type="text" placeholder="имя"/>  <br> 
        <label for="password1"> Введи пароль</label> <input name="password1" required type="password" placeholder="пароль"/> <br>
        <input  type="submit" name="unpack" value="Авторизоваться"/>
          </form>
        ';
//$link = mysqli_connect("localhost","root","","polzovatel");
if(!empty($_POST['name1']) and !empty($_POST['password1'])) {
    $name1 = $_POST['name1'];
    $hash = $_POST['password1'];//<------------------------!!!!ПРИ РАСКРЫТИИ КОММЕНТАРИЕВ С БД УДАЛИТЬ ИЛИ ЗАКОММЕНТИРОВАТЬ!!!!!
  /*  $query = "SELECT * FROM polzovatel WHERE name='$name1'"; 
    $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);
        //Если пользователь с таким логином есть...
        if (!empty($user)) {
            $hash = $user['password']; // соленый пароль из БД
            // Проверяем соответствие хеша из базы введенному паролю
            if (password_verify($_POST['password1'], $hash)) { */
                
                //COOKIE
                setcookie("name", $name1);
                setcookie("password", $hash);
                echo "Вы прошли авторизацию"."<br>";
            } 
            else {
                echo $form;
            }
            if(empty($_POST['name1']) and empty($_POST['password1'])) {    //<------------------------!!!!ПРИ РАСКРЫТИИ КОММЕНТАРИЕВ С БД УДАЛИТЬ ИЛИ ЗАКОММЕНТИРОВАТЬ!!!!!
                echo $from;
            }

       // }
      /*  else {
          echo $form."Неверно введено имя или пароль"."<br>";// Пользователя с таким логином нет, выведем сообщение
        }
      //}
        else {
            echo $form;// Пользователя с таким логином нет, выведем сообщение
        }
        */
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<html>
<body>
<?php
//COOKIE
  if(isset($_COOKIE['name'])){
	echo   "Имя: ".$_COOKIE['name']." ";
    echo    "Пароль: ".$_COOKIE['password']."<br>";
    ?>
    <a href="?exit">Выход</a>
    <br>
    <?
	}
	
/*Создать сайт из четырех страниц. На первой странице создать
форму авторизации на сайте с двумя обязательных полями:
login, password. Если данные введены верно, то записать в
cookies, при наличии которого пользователю доступна кнопка
 &quot;Выход&quot;. В момент выхода происходит удаление созданной
ранее cookies. (Задание выполняется без БД)*/
?>
<a href="1cookie.php">1</a>
<a href="2cookie.php">2</a>
<a href="3cookie.php">3</a>
<a href="4cookie.php">4</a>
<br>

</body>
</html>