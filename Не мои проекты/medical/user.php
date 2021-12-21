<?php
session_start();
$link = mysqli_connect("localhost","root","","medical");
?>
<form action="" method="POST">
<? 
    // удаление
    if ( isset($_POST['delete']) ){
        // $value это все значения id
        foreach ($_POST['box'] as $value) {
            mysqli_query($link, "DELETE FROM user WHERE id='$value'");
        }
    }

    // изменение
    if ( isset($_POST['change']) ) {
        foreach ($_POST['box'] as $value) {
    
          $LFS_value = 'LFS'.$value;
          $LFS = $_POST[$LFS_value];
    
          $Email_value = 'Email'.$value;
          $Email = $_POST[$Email_value];
    
          $Login_value = 'Login'.$value;
          $Login = $_POST[$Login_value];
    
          $update ="UPDATE `user` SET LFS='$LFS', Email='$Email', Login='$Login' WHERE id='$value'";
          mysqli_query($link, $update);
        }
      }
    
    //admin
    if ( $_SESSION['Login']=='admin' and  isset($_SESSION['Password']) ){
        $query = mysqli_query($link, "SELECT * FROM `user`");
?>
<!doctype html>
<html lang="ru">
<head>

    <style>
        
        body {
            background-image: url(https://krot.info/uploads/posts/2020-02/1580728080_4-p-foni-dlya-meditsinskikh-prezentatsii-9.jpg);
        }
        p:first-letter {
        font-family: "Times New Roman"; /* Гарнитура шрифта первой буквы */
        font-size: 130%; /* Размер шрифта первого символа */
        }
         p {
        font-family: Arial; /* Гарнитура шрифта основного текста */
        font-size: 130%; /* Размер шрифта */
    }
    .container_col{
    width: 1100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
    .blocks{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .block{
    width: 250px;
    margin-bottom: 60px;
    }
    <?php
        echo file_get_contents("css/style.css");
    ?>
        </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    
</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <a class="logo" href="index.php">
                <span style="color:brown"><p><br>&#10133;Мед-центер&#10133;<br></p></a></span>
            <div>
                <span style="color:brown"><br><p>&#128657;Московский Медецинский Центр&#128657;</p></span>
            </div>
            <div class="phone">
                <span style="color:brown">
               <p> 8 (495) 522 53 40 &#128222;<br></p>
                <p>8 (968) 781 45 59 &#128222;</p> </span>
            </div>
        </div>
    </div>
    <?
    include('tabs.php');
    ?>
</header>

<center>
<section class="section-serv">
    <div class="container_col">
        <span style="color:brown"><p>Данные пользователей&#10004;</p></span>
    </div> <br>

<div class="container_col">
    <div class="blocks"> <?

        while( $article = mysqli_fetch_assoc($query) ) {
    
    ?> <div class="block">
            <div class="block_title"><?=$arcticle['id']?></div>
            <div class="block_text"><input type="text" name="LFS<?=$article['id']?>" value="<?=$article['LFS']?>"></div>
            <div class="block_text"><input type="email" name="Email<?=$article['id']?>" value="<?=$article['Email']?>"></div>
            <div class="block_text"><input type="text" name="Login<?=$article['id']?>" value="<?=$article['Login']?>"></div>
            <div class="block_text"><input type="checkbox" name="box[]" value="<?=$article['id']?>"/></div>
        </div> <?
        }?> 
    </div>
</div>

</section>

    <button name='delete' value='delete'>Удалить</button> <br>
    <button name='change' value='change'>Изменить</button>
</center>

</form>


<footer>
    <div class="footer-main">
        <div class="container">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span style="color:brown">
            <p style="text-align: center">© 1998 - 2020 Многопрофильный медицинский центр</p></span>
        </div>
    </div>
</footer>
</body>
</html>
<?} else {
    echo "Вы не админ!!!:(";
}?>