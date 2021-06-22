<!DOCTYPE html>
<head>Сведения об автомобиле:</head>
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
		$search3= !empty ($_POST['search3']) ? $_POST['search3']:'';

?>
  <form  action="vlad14.php"  method="post">
	 
	<label for="search"> Введи марку автомобиля</label> <input name="search" oncheck="color_();" type="text" placeholder="марка" value='<?=$search?>'/> <br> 
    <label for="search1"> Введи номер автомобиля</label> <input name="search1" type="text" placeholder="номер" value='<?=$search1?>'/> <br>
	<label for="search2"> Введи Ф.И.О. владельца автомобиля</label> <input name="search2" type="date" placeholder="Ф.И.О." value='<?=$search2?>'/> <br>
	<label for="search3"> Введи отметку о прохождении техосмотра</label> <input name="search3" type="text" placeholder="отметка" value='<?=$search3?>'/> <br>
     <input  type="submit" name="unpack" value="Поиск"/>
  </form>
<?php
function clean($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value, $min, $max) {
    $result = (mb_strlen($value) >= $min and mb_strlen($value) <= $max);
    return $result;
}


if (is_numeric($search3)==false && !empty($search3)){
    echo "В поле 'отметка' нужно ввести число"."<br>";
} 





if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3)) {


    if (check_length($search, 2, 20)==false){
echo "В поле 'марка' количество символов от 2 до 20"."<br>";
    }
    
    if (check_length($search1, 2, 20)==false){
        echo "В поле 'номер' количество символов от 2 до 20"."<br>";
            }
           

    if (check_length($search, 2, 20) && check_length($search1, 2, 20) && check_length($search2, 10, 10) && check_length($search3, 1, 10000) && is_numeric($search3)==true){
    
        echo "Спасибо за сообщение"."<br>";
$search = clean($search); 
$search1 = clean($search1);
$search2 = clean($search2);
$search3 = clean($search3);
    }  
 }

else {
    echo "Заполните поля";
}

?>