<?php
$file = file_get_contents('json.json');  // Открыть файл json.json
          
$taskList = json_decode($file,TRUE)[0];        // Декодировать в массив 
                        
unset($file);                               // Очистить переменную $file
           
$taskList['name'] = array ('re'=>$_POST['text']);        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'

$taskList = array($taskList);

file_put_contents('json.json',json_encode($taskList));  // Перекодировать в формат и записать в файл.
          
unset($taskList);     