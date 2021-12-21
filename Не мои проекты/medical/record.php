<?php
session_start();
$link = mysqli_connect("localhost","root","","medical");

    //admin
    if ( $_SESSION['Login']=='admin' and  isset($_SESSION['Password']) ){ ?>
        <form action="" method="POST">
        <?
            // удаление
            if ( isset($_POST['delete']) ){
                // $value это все значения id
                foreach ($_POST['box'] as $value) {
                    mysqli_query($link, "DELETE FROM record WHERE id='$value'");
                }
            }
        
            // изменение
            if ( isset($_POST['change']) ) {
                foreach ($_POST['box'] as $value) {
            
                  $LFS_value = 'LFS'.$value;
                  $LFS = $_POST[$LFS_value];
            
                  $Phone_value = 'Phone'.$value;
                  $Phone = $_POST[$Phone_value];
        
                  $Email_value = 'Email'.$value;
                  $Email = $_POST[$Email_value];
            
                  $Specialization_value = 'Specialization'.$value;
                  $Specialization = $_POST[$Specialization_value];
                  if ( $Specialization=='' ) {
                        $sql_Specialization = "SELECT Specialization FROM `record` WHERE id='$value'";
                        $Specialization_result = mysqli_query($link, $sql_Specialization);
                        $Specialization = mysqli_fetch_assoc($Specialization_result)['Specialization'];
                    }
        
        
                  $Doctor_value = 'Doctor'.$value;
                  $Doctor = $_POST[$Doctor_value];
                  
                  if ( $Doctor=='' ) {
                    $sql_Doctor = "SELECT Doctor FROM `record` WHERE id='$value'";
                    $Doctor_result = mysqli_query($link, $sql_Doctor);
                    $Doctor = mysqli_fetch_assoc($Doctor_result)['Doctor'];
                  }
        
                  $Date_value = 'Date'.$value;
                  $Date = $_POST[$Date_value];
        
                  $Time_value = 'Time'.$value;
                  $Time = $_POST[$Time_value];
            
                  $update ="UPDATE `record` SET LFS='$LFS', Phone='$Phone', Email='$Email', Specialization='$Specialization', 
                  Doctor='$Doctor', Date='$Date', Time='$Time' WHERE id='$value'";
                  mysqli_query($link, $update);
                }
              }
        $query = mysqli_query($link, "SELECT * FROM record");
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
        <span style="color:brown"><p>Данные записей&#10004;</p></span>
    </div> <br>

<div class="container_col">
    <div class="blocks"> <?

        while( $article = mysqli_fetch_assoc($query) ) {
    
    ?> <div class="block">
            <div class="block_title"><?=$arcticle['id']?></div>
            <div class="block_text"><input type="text" name="LFS<?=$article['id']?>" value="<?=$article['LFS']?>"></div>
            <div class="block_text"><input type="number" name="Phone<?=$article['id']?>" value="<?=$article['Phone']?>"></div>
            <div class="block_text"><input type="email" name="Email<?=$article['id']?>" value="<?=$article['Email']?>"></div>

            <div class="block_text">
                <select name="Specialization<?=$arcticle['id']?>">
                    <option value="<?=$article['Specialization']?>" disabled selected> <?=$article['Specialization']?> </option>
                    <option value="Венерология"> Венерология</option>
                    <option value="Гастроэнтерология"> Гастроэнтерология</option>
                    <option value="Гематология"> Гематология</option>
                    <option value="Дерматология"> Дерматология</option>
                    <option value="Диетология"> Диетология</option>
                    <option value="Кардиология"> Кардиология</option>
                </select>
                <select name="Doctor<?=$arcticle['id']?>">
                    <option value="<?=$article['Doctor']?>" disabled selected> <?=$article['Doctor']?> </option>
                    <option value="АЙРАПЕТЯН Роберт"> АЙРАПЕТЯН Роберт</option>
                    <option value="АКИМОВА Светлана"> АКИМОВА Светлана</option>
                    <option value="АКСЕНОВ Кирилл"> АКСЕНОВ Кирилл</option>
                    <option value="АЛЕКСАНДРОВА Валентина"> АЛЕКСАНДРОВА Валентина</option>
                    <option value="АЛЕКСЕЕВА Инна"> АЛЕКСЕЕВА Инна</option>
                    <option value="АЛЕСКЕРОВА Перване"> АЛЕСКЕРОВА Перване</option>
                </select>
            </div>

            <div class="block_text"><input type="date" name="Date<?=$article['id']?>" value="<?=$article['Date']?>"></div>
            <div class="block_text"><input type="time" name="Time<?=$article['id']?>" value="<?=$article['Time']?>"></div>
            <div class="block_text" style="word-break:break-all;"><?=$article['Comment']?></div>
            <div class="block_text"><input type="checkbox" name="box[]" value="<?=$article['id']?>"/></div>
        </div> <?

        }?> 
    </div>
</div>

</section>

    <button type="submit" name='delete' value='delete'>Удалить</button> <br>
    <button type="submit" name='change' value='change'>Изменить</button>
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
<?php } else {
    echo "Вы не админ!!!:(";
} ?>