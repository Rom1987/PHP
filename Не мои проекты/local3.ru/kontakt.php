<!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="vieweport" content="width=devise-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-opera">
       <style>
<?php echo file_get_contents("css/style.css"); ?>
</style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Домашние Пишечки/kontakt</title>
    </head>

    <body>

        <?php require "elem/head.php" ?>
        

        <div class="container mt-5">

            <h2 class="p-4 font-weight-normal text-primary ">Обратная связь</h2>

           <form action="" method="post">
		   
           <input type= "email" name="email" placeholder="Введите email" class="form-control"> <br>
		   
		   <textarea name="message" class="form-control" placeholder="Введите ваше сообщение" ></textarea> <br>
		   
		   <button type="submit" name="send" class="btn btn-success">Отправить</button>
		   </form>
        </div>
        <?php 
        
        include('svyaz/checks.php');

        require "elem/under.php" ?>
            
    </body>

    </html>