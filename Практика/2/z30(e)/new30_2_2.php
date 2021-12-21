 <center>
 <!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php 
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
        $search3= !empty ($_POST['search3']) ? $_POST['search3']:'';
		$search4= !empty ($_POST['search4']) ? $_POST['search4']:'';
		$search5= !empty ($_POST['search5']) ? $_POST['search5']:'';
		$search6= !empty ($_POST['search6']) ? $_POST['search6']:'';
		$search7= !empty ($_POST['search7']) ? $_POST['search7']:'';
        ?>
<form  action=""  method="post">
	<label>Удалить строку содержащию:</label> <br>
    <label for="search">id</label> <input name="search" oncheck="color_();" type="int" placeholder="id" value='<?=$search?>'/> <br> 
    <label for="search1">first_name</label> <input name="search1" oncheck="color_();" type="text" placeholder="Фамилия" value='<?=$search1?>'/> <br> 
    <label for="search2"></label>name <input name="search2" oncheck="color_();" type="text" placeholder="имя" value='<?=$search2?>'/> <br> 
	<label for="search3"></label>surname<input name="search3" oncheck="color_();" type="text" placeholder="отчество" value='<?=$search3?>'/> <br> 
    <label for="search4"></label>date_born<input name="search4" oncheck="color_();" type="date" placeholder="год рождения" value='<?=$search4?>'/> <br> 
    <label for="search5">adrres</label> <input name="search5" oncheck="color_();" type="text" placeholder="адрес" value='<?=$search5?>'/> <br> 
	<label for="search6"></label>nunderlying_disease <input name="search6" oncheck="color_();" type="text" placeholder="основное заболевание" value='<?=$search6?>'/> <br> 
	 <label for="search7"></label>date_of_last_visit_a_doctor<input name="search7" oncheck="color_();" type="date" placeholder="дату последнего посещения лечащего врача" value='<?=$search7?>'/> <br> 
     <input  type="submit" name="unpack" value="Удалить"/>
  </form>
<?php
$conn = mysqli_connect("localhost","root","","task15");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM hospital WHERE id='$search' or first_name='$search1' or name='$search2' or surname='$search3' or date_born='$search4'
or adrres='$search5' or underlying_disease='$search6'or date_of_last_visit_a_doctor='$search7'";
if (mysqli_query($conn, $sql)) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<a href="new30.2.php">Выход к работе БД</a><BR>
<a href="new30.php">Выход на главную страничку </a>
</center>