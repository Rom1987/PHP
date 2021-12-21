<?php
session_start();
if ( isset($_POST['exit']) ){
  session_unset(); // удаление всех session
  header("location: index.php");
}
?>