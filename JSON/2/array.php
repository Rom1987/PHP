<?php

/*
Специально для Loftblog
Пример для работы с JSON-форматом
*/

$array = Array(
        "fam" => "Петров",
        "name" => "Илья",
        "contacts" => Array(
                "phone" => "78523697412",
                "email" => "petrov@comp.ru",
                "skype" => "petrov_skype",
                "address" => "Санкт-Петербург, ул. Воронежская, д.92, кв.13"
            ),
    );

// $json = json_encode($array);
// echo $json;

$seri = serialize($array);
echo $seri;