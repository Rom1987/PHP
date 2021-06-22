<?php
/*if (isset($_GET['exit'])){
  setcookie("path", "");
}
if (!isset($_COOKIE['path'])){
  $path="z21.php ";
  setcookie("path", $path);
  echo "ewsadz21.php";
}
if(isset($_COOKIE['path'])){
  $_COOKIE['path'].="z21.php";
  echo  " ".$_COOKIE['path']." ";
}
//else{$_COOKIE['path'] .="z21.php ";}
*/
if (!isset($_COOKIE['path'])){
$_COOKIE['path']="z21.php";
}else{$_COOKIE['path'].="z21.php";}


if (isset($_GET['exit'])){
  setcookie("path", "");
  echo "";
}
?>
<html><body>
<?php 
echo $_COOKIE['path'];
?>
<br>
<a href="one.php">1</a>
<br>
<a href="two.php">2</a>
<br>
<a href="?exit">Выход</a>
</body>
</html>