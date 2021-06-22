<?php
  $link = mysqli_connect("localhost", "root", "", "computer_shop");
  mysqli_query($link, "SET NAMES 'utf-8'");
?>
<form action="" method="post">
    <input type="text" name="password">
    <button type="submit">кнопка</button>
</form>
<?php
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = "UPDATE `accounts` SET password='$pass' WHERE ID=1";
mysqli_query($link, $sql);
mysqli_close($link);