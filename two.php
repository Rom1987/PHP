<?php
if (!isset($_COOKIE['path'])){
  $path="two.php ";
  setcookie("path", $path);
}
?>
<html>
<body>
<?php 
$_COOKIE['path']=$path;
$path=$_COOKIE['path']." two.php ";

echo "Были на страницах ".$path; 
?> 
</body>
</html>
<br>
<a href="z21.php">Главная страница</a>
<br>
<a href="one.php">1</a>
<br>
<a href="two.php">2</a>
</html></body>