<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
</head>
<body>
    <form action="put_json.php" method="post">
    <?php 
        mysqli_report(MYSQLI_REPORT_ERROR || MYSQLI_REPORT_STRICT);
        $file = file_get_contents('json.json');
        $data = json_decode($file, true)[0];
        // var_dump($data);
        foreach( $data as $item ){

            echo $item['productName']."<br>";

        }

    ?>
    
        <label for="text"> Текст </label>
        <input name='text' value="" type="text">

        <label for="number"> Число </label>
        <input name='number' value="" type="number"> 
        <button type="submit"> кнопка </button>
    </form>
        <?php
        $mysql = mysqli_connect("localhost","root","","json");
        
        $file = file_get_contents('json.json');
        $data = json_decode($file, true)[0];
        foreach( $data as $item ){

            mysqli_query($mysql, "INSERT INTO json (productName, productLink, productID, productPrice)
            VALUES ('{$item['productName']}', '{$item['productLink']}', {$item['productID']}, {$item['productPrice']})");

        }
        ?>
</body>
</html>