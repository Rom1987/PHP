<!DOCTYPE html>
<head>Загрузка  файлов на сервер</head>
<?php
		$search= !empty ($_POST['search']) ? $_POST['search']:'';
		$search1= !empty ($_POST['search1']) ? $_POST['search1']:'';
		$search2= !empty ($_POST['search2']) ? $_POST['search2']:'';
		$search3= !empty ($_POST['search3']) ? $_POST['search3']:'';

?>
  <form  action="z14(1).php"  method="post">
	 <!--Поиск-->
	<label for="search"> Введи наименование</label> <input name="search" oncheck="color_();" type="text" placeholder="наименование" value='<?=$search?>'/> <br> 
    <label for="search1"> Введи страну-экспортер </label> <input name="search1" type="text" placeholder="страна-экспортер" value='<?=$search1?>'/> <br>
	<label for="search2"> Введи срок поставки </label> <input name="search2" type="date" placeholder="срок поставки" value='<?=$search2?>'/> <br>
	<label for="search3"> Введи количество товара </label> <input name="search3" type="text" placeholder="количество товара" value='<?=$search3?>'/> <br>
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
    echo "В поле 'количество товара' нужно ввести число"."<br>";
} 





if (!empty($search) && !empty($search1) && !empty($search2) && !empty($search3)) {


    if (check_length($search, 2, 20)==false){
echo "В поле 'наименование' количество символов от 2 до 20"."<br>";
    }
    
    if (check_length($search1, 2, 20)==false){
        echo "В поле 'страну-экспортер' количество символов от 2 до 20"."<br>";
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

/*
1. Реализация заполнения полей через форму(в соответствии с вариантом)
2. Реализовать проверку данных и их соответствие правилу ввода для
каждого из полей.
3. Реализовать проверку на корректность тремя функциями php.

Имеются сведения об экспортируемых товарах: наименование, страна-экспортер,
срок поставки и количество товара. Вывести страны, в которые должен быть
поставлен данный товар до 1 июля.
*/
?>