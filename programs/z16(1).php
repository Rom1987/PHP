<?php
$conn = mysqli_connect("localhost","root","","z15");

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$date=date("Y-m-d", mktime(0, 0, 0, 12, 32, 1997));
$sql="INSERT INTO z151 (Name, Export_country, Delivery_time, Quantity_of_goods) VALUES ('gger','gfgej', '$date' , '525')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>