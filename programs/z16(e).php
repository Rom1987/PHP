<form action="" method="post">
<!--Поиск-->
<label for="s"> Введи срок поставки </label> <input name="s" type="date" placeholder="срок поставки" value='<?=$s?>'/> <br>
<label for="s1"> Введи срок поставки </label> <input name="s1" type="date" placeholder="срок поставки" value='<?=$s1?>'/> <br>
<input type="submit" name="unpack" value="Поиск"/>
</form>
<?php

$conn = mysqli_connect("localhost","root","","z15");/*task15*/
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO `hospital` (`id`, `first_name`, `name`, `surname`, `born`, `adrres`, `underlying_disease`) VALUES ('1', 'hgjh', 'pjhjh', 'iuyyt', '$s', 'jlhikgfh', ';ojhlgfv');";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>