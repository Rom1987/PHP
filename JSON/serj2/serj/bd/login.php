<?php
session_start();

$login=$_POST['login1'];
$password=$_POST['passwd1'];
$password_hash=sha1($password);

if(($login!=='')and($password!=='')){
	$connection=mysqli_connect("localhost","root","","zhukovbaza");
	$connection->query("SET NAMES utf8_general_ci");
	
$us=$connection->query("select * from `users` where login='$login'");
$us=$us->fetch_array();

	if($us['passwd']==$password_hash){
	$_SESSION['id']=$us['id'];
	$_SESSION['login']=$login;
	header("Location:../index2.php");
	}
	else{
	echo "User not found";
	}
	}
?>