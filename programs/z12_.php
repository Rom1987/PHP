<html>
	<head>Загрузка  файлов на сервер</head>
	<body>
  <form  enctype="multipart/form-data" action="z12_.php"  method="post">
  <input  type="hidden" name="MAX_FILE_SIZE" value="300000"  />
  <input  type="file" name="uploadFile"/>
	  <input  type="submit" name="upload" value="Загрузить"/>
  </form>
<?php
  print_r($_FILES); 
  if(isset($_POST['upload'])){
  $folder = 'files/';
  $uploadedFile = $folder.basename($_FILES['uploadFile']['name']);
  if(is_uploaded_file($_FILES['uploadFile']['tmp_name'])){
  if(move_uploaded_file($_FILES['uploadFile']['tmp_name'], $uploadedFile))
	  {
     echo 'good';
	
  }
  else
  {
     echo 'Во  время загрузки файла произошла ошибка';
  }
  }
  else
	  {
	   echo 'Файл не  загружен';
	  }	
	  }
	
?>
<img src="uploadFile" alt="">
</body>
</html>
<? 
$dir="files";//Определение пути к категории 
$opendir=opendir($dir);//открытие директории для чтения файлов 
//цикл чтения файлов из директории 
$i=0; 
while ($files=readdir($opendir)) 
{ 
if($files!="." and $files!="..") 
echo"<img src=$dir/$files width=200  vspace=20 hspace=20>"; 
} 
?> 

