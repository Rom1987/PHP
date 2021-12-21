<?
  if ( isset( $_GET['buy'] ) ) {

    if ( empty($_SESSION['user_nickname']) and empty($_SESSION['user_password']) ) { ?>
      <div class="error_password"> Авторизуйтесь! </div>
    <? } else {
            // выполнение заказа
            $user_nickname = $_SESSION['user_nickname'];
            $user_password = $_SESSION['user_password'];
            
            $user_sql = "SELECT * FROM `byuer` WHERE nickname='$user_nickname' and password='$user_password'";
            $user_result = mysqli_query($link, $user_sql);
            $name_Byuer = mysqli_fetch_assoc($user_result)['name'];

            $user_result_id = mysqli_query($link, $user_sql);
            $code_Byuer = mysqli_fetch_assoc($user_result_id)['ID'];

            $user_result_email = mysqli_query($link, $user_sql);
            $user_email = mysqli_fetch_assoc($user_result_email)['email'];

            $code_Napitki = $_GET['buy'];
            $name_Napitki_sql = "SELECT * FROM `napitki` WHERE ID='$code_Napitki'";
            $name_Napitki_result = mysqli_query($link, $name_Napitki_sql);
            $name_Napitki = mysqli_fetch_assoc($name_Napitki_result)['name'];

            $name_Napitki_result = mysqli_query($link, $name_Napitki_sql);
            $price_Napitki = mysqli_fetch_assoc($name_Napitki_result)['price'];

            $Purchase_date = date("Y-m-d");

            $sql ="INSERT INTO orders (name_Byuer, code_Byuer, name_Napitki, code_Napitki, Purchase_date) 
            VALUES ('$name_Byuer', $code_Byuer, '$name_Napitki', $code_Napitki, '$Purchase_date')";
            
            // уменьшаем количество товара
            $quantity_sql = "SELECT * FROM `Napitki` WHERE ID='$code_Napitki'";
            $quantity_result = mysqli_query($link, $quantity_sql);
            $quantity = mysqli_fetch_assoc($quantity_result)['quantity']-1;
            $buy = "UPDATE `Napitki` SET quantity = $quantity WHERE ID = '$code_Napitki'";

            if ( mysqli_query($link, $sql) and mysqli_query($link, $buy)) {

              $message = "Куплен товар: $name_Napitki\r\nНа сумму: $price_Napitki\r\nСпасибо за покупку!";
              $to = $user_email;
              $from = "test@gmail.com";
              $subject = "Совершена покупка на сайте Don Simon";
              $subject = "=?utf-8?B?".base64_encode($subject)."?=";
              $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
              mail($to, $subject, $message, $headers);
              ?> <center><div class="complete_buy"> Спасибо за покупку </div></center> <?

            } else { ?>
              <div style='color: red;'> <?= 'Error: '.mysqli_error($link)?> </div> <?
            }
          }
  }
?>