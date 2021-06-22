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
        ?>
<form  action=""  method="post">
	<label>Удалить строку содержащию:</label> <br>
    <label for="search">id</label> <input name="search" oncheck="color_();" type="int" placeholder="id" value='<?=$search?>'/> <br> 
    <label for="search1">Name</label> <input name="search1" oncheck="color_();" type="text" placeholder="наименование" value='<?=$search1?>'/> <br> 
    <label for="search2">Export_country</label> <input name="search2" oncheck="color_();" type="text" placeholder="страна-экспортер" value='<?=$search2?>'/> <br> 
    <label for="search3">Delivery_time</label> <input name="search3" oncheck="color_();" type="date" placeholder="срок поставки" value='<?=$search3?>'/> <br> 
    <label for="search4">Quantity_of_goods</label> <input name="search4" oncheck="color_();" type="text" placeholder="количество товара" value='<?=$search4?>'/> <br> 
     <input  type="submit" name="unpack" value="Удалить"/>
  </form>
<?php
$conn = mysqli_connect("localhost","root","","z15");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM z151 WHERE id='$search' or Name='$search1' or Export_country='$search2' or Delivery_time='$search3' or Quantity_of_goods='$search4'";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</center>