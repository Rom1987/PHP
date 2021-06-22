<?php 
error_reporting(0);
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zhukovclub</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/hide.css">
    <link rel="stylesheet" href="style/predl.css">
    
</head>
<body>

   	<section class="hero">
		<header>
			<div class="wrapper">
			
				<a href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
                       
						<li><a href="https://onlinegibdd.ru/servisy/proverit_shtrafy/">Оплата штрафа</a></li>

						<li><a href="buy.html">Новости/Статьи</a></li>
						
						<?php echo "<li><a>Приветствуем, ".$_SESSION['login']."! </a></li>";?>
					</ul>
					<a href="index.html" class="login_btn">Выйти</a>
				</nav>
			</div>
		</header><!--  end Хедер section  -->
       
    </section>
        
     
       
 

    <content>
      
      <section class="icons">
      
     <div class="frstmedia">     
          <div class="icpicture">
              <img class="media-object" src="pictures/garant-icon.png">
          </div>

               <div class="textic">
                   <h4> Личный кабинет</h4>
                     
                   <?php 
			$id=$_SESSION['id'];
			$mySQLi=mysqli_connect("localhost","root","","zhukovbaza");
			
			if($id==0){
				
			$sql="SELECT * FROM `frst`";
			$result=mysqli_query($mySQLi,$sql);
				echo 
			"<table class='ldantab'>".
			"<caption>Список всех данных</caption>".
				"<tr>"."<td>"."ID"."</td>".
					   "<td>"."ФИО"."</td>".
					   "<td>"."Адресс"."</td>".
					   "<td>"."Гос. номер"."</td>".
					   "<td>"."Модель Авто"."</td>".
					   "<td>"."Год регистрации"."</td>".
					   "<td>"."VIN Номер"."</td>".
			"</tr>";
			
			while($row=mysqli_fetch_row($result)){
			printf("<tr>".
				   "<td>".$row[0]."</td>".
				   "<td>".$row[1]."</td>".
				   "<td>".$row[2]."</td>".
				   "<td>".$row[3]."</td>".
				   "<td>".$row[4]."</td>".
				   "<td>".$row[5]."</td>".
				   "<td>".$row[6]."</td>".
				   "</tr>");}
			
			echo"</table>"."</br>";
				
				
			}
			else{
			$sql="SELECT * FROM `frst` where id='$id'";
			$result=mysqli_query($mySQLi,$sql);
			
			echo "<div class='ltext'>";
			
			while($row=mysqli_fetch_row($result)){
			printf("<p>ID: ".$row[0]."</p></br>".
				   "<p>ФИО: ".$row[1]."</p></br>".
				   "<p>Адрес: ".$row[2]."</p></br>".
				   "<p>Гос. номер: ".$row[3]."</p></br>".
				   "<p>Модель авто: ".$row[4]."</p></br>".
				   "<p>Год Регистрации: ".$row[5]."</p></br>".
				   "<p>VIN Номер: ".$row[6]."</p></br>");}
				   
			echo "</div>";}
			?>
                   
               </div>
        </div>     
          
      </section>
           
                   
    </content>
          
           
    <footer>
        
    </footer>
            
            
</body>
</html>