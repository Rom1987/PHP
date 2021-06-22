<?php

/*
Специально для Loftblog
Пример для работы с JSON-форматом
*/

// загрузили данные в строковую переменную
$buffer = file_get_contents("data.json");

// преобразовали строку в объект
$data = json_decode($buffer);

// определение ошибок при преобразовании
$jsonerror = 'Неизвестная ошибка';

switch (json_last_error())
{
    case JSON_ERROR_NONE:
        // Ошибок нет
        $jsonerror = '';
        break;
    case JSON_ERROR_DEPTH:
        $jsonerror = 'Достигнута максимальная глубина стека';
        break;
    case JSON_ERROR_STATE_MISMATCH:
        $jsonerror = 'Некорректные разряды или не совпадение режимов';
        break;
    case JSON_ERROR_CTRL_CHAR:
        $jsonerror = 'Некорректный управляющий символ';
        break;
    case JSON_ERROR_SYNTAX:
        $jsonerror = 'Синтаксическая ошибка, не корректный JSON';
        break;
    case JSON_ERROR_UTF8:
        $jsonerror = 'Некорректные символы UTF-8, возможно неверная кодировка';
        break;
    default:
        $jsonerror = 'Неизвестная ошибка';
        break;
}

if ($jsonerror != '')
{
    // ошибка есть
    echo $jsonerror;
}
else
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}