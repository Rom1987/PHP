<?php

$file = file_get_contents('json.json');         // Открыть файл data.json

$taskList=json_decode($file,TRUE)[0];                  // Декодировать в массив

// Где переменная $current  представлена в виде значения, без ключа.
foreach ( $taskList  as $key => $value){        // Найти в массиве  
    if (in_array( $_POST['text'], $value)) {           // Переменную $current

        unset($taskList[$key]);             // после обнаружения удалить
    }
} 

file_put_contents('json.json',json_encode($taskList)); // Перекодировать в формат и записать в файл.

unset($taskList);                           // Очистить переменную $taskList 

// file_put_contents('json.json',json_encode($taskList)); // Перекодировать в формат и записать в файл.

// unset($taskList); 
