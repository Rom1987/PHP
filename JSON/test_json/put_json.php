<?php

$oldname = 'first';               // Имя переменной которую нужно обновить

$newname = 'new';                // Имя переменной которой обновим старое значение

$file = file_get_contents('json.json');     // Открыть файл data.json

$taskList=json_decode($file,TRUE)[0];              // Декодировать в массив 

    foreach ( $taskList as $key => $value){    // Найти в массиве  

       if ( $key="product1" ) {    // Совпадение значения переменной

          $taskList[$key]['productName']  = $_POST['text'];  // Присвоить новое значение
      }
   } 
$taskList = array($taskList);
file_put_contents('json.json',json_encode($taskList)); // Перекодировать в формат и записать в файл.

unset($taskList);  // Очистить переменную $taskList 