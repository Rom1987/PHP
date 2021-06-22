<?php
$query_admin = mysqli_query($link, "SELECT email FROM users WHERE id_user = 1 ");
$_SESSION['email_admin'] = mysqli_fetch_row($query_admin)[0];
?>