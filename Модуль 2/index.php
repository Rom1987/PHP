<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul2</title>
</head>
<body>
    <form action="" method="POST">
        <input name="first_name" type="text" placeholder="first_name">
        <input name="last_name" type="text" placeholder="last_name">
        <input name="phone" type="text" placeholder="phone">
        <input name="document_number" type="text" placeholder="document_number">
        <input name="password" type="text" placeholder="password">
        <button name="btn" type="submit"> Отправить </button>
    </form>
    <?php
        $link = mysqli_connect("localhost", "root", "", "modul2");
        $result = mysqli_query($link, "SELECT * FROM users WHERE phone={$_POST['phone']}");
        $count = mysqli_num_rows($result);
    
        $res = file_get_contents('mymodul2.json');
        $json = json_decode($res, true);


        if ( isset($_POST['btn']) ):
            
            if ( empty($_POST['first_name']) ):

                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['first_name'][0];
            
            elseif ( empty($_POST['last_name']) ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['last_name'][0];
            
            elseif ( empty($_POST['phone']) ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['phone'][0];

            elseif ( $count!=0 ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['phone'][1];

            elseif ( empty( $_POST['document_number'] ) ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['document_number'][0];
            
            elseif ( count( $_POST['document_number'] )!=10 ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['document_number'][1];

            elseif ( !ctype_digit( $_POST['document_number'] ) ):
                
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['document_number'][2];

            elseif ( empty( $_POST['password'] ) ):
            
                echo "Status: ".$json['error']['code'];
                echo "Message: ".$json['error']['message'];
                echo $json['error']['errors']['password'][0];

            else:

                echo 

            endif;
        
        endif;     
    ?>

    <form action="" method="POST">
        <input name="phone" type="text" placeholder="phone">
        <input name="password" type="text" placeholder="password">
        <button name="btn" type="submit"> Отправить </button>
    </form>
</body>
</html>