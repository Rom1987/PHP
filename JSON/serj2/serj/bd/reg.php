<?php
		$passwd=$_POST['passwd'];
		$login=$_POST['login'];
		$password_hash=sha1($passwd);

if(($login!=='')and($password!=='')){
	$connection=mysqli_connect("localhost","root","","zhukovbaza");
	$connection->query("SET NAMES utf8_general_ci");
	
	$connection2=mysqli_connect("localhost","root","","zhukovbaza");
	$connection2->query("SET NAMES utf8_general_ci");
	
	$us=$connection2->query("SELECT id FROM users ORDER BY id DESC LIMIT 1");
	$us=$us->fetch_array();
	$id=$us['id']+1;
	
	function toBD ($a, $b, $c, $connection){
		$connection->query("insert into `users` 
			VALUES ('$a','$b','$c')");
			}
	}
	toBD($id,$login,$password_hash,$connection);
	header("Location:index.php");
?>