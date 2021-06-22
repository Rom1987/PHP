<?php
/*if (!isset($_COOKIE['path'])){
  $path="one.php ";
  setcookie("path", $path);
  echo "Были на страницах one.php";
}
?>
<html>
<body>
<?php 
if (isset($_COOKIE['path'])){
//$_COOKIE['path']=$path;
$_COOKIE['path'].=" one.php ";
echo "Были на страницах ".$_COOKIE['path'];
}*/

/*if (!isset($_COOKIE['path'])){
$_COOKIE['path']="one.php";
}else{
  //$_COOKIE['path'].="one.php";
  $path=$_COOKIE['path']."one.php";
  $_COOKIE['path']=$path;
}
echo "Были на страницах ".$_COOKIE['path'];
*/
if (!isset($_COOKIE['path'])){
  $path="one.php ";
  setcookie("path", $path);
}
$_COOKIE['path']=$path;
$path=$_COOKIE['path']." one.php ";
echo "Были на страницах ".$path; 
?> 
<html><body>
<br>
<a href="z21.php">Главная страница</a>
<br>
<a href="one.php">1</a>
<br>
<a href="two.php">2</a>
</html></body>