<?php

//Получите массив ссылок из меню.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div\s+id=(["\'])menu\1>(.+?)</div>#su',$file, $arr);

preg_match_all('#<a[^>]+?>(.+?)</a>#',$arr[2][0], $links);
echo "Получите массив ссылок из меню:"."<br>";
var_dump($links[0]);

//Получите массив всех картинок.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<img[^>]+?>#su',$file, $arr);
echo "<br>"."Получите массив всех картинок:"."<br>";
var_dump($arr);

//Получите содержимое контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);
echo "<br>"."Получите содержимое контента:"."<br>";
var_dump($arr[0][0]);

//Получите картинки контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);
preg_match_all('#<img[^>]*?src\s*=[^>]*?(["\'])[^>]+?\1[^>]*>#su',$arr[0][0], $images);
echo "<br>"."Получите картинки контента:"."<br>";
var_dump($images[0]);

//Удалите скрипты из полученного контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$noScript = preg_replace('#<script[^>]+?></script>#su','',$arr[0][0]);
echo "<br>"."Удалите скрипты из полученного контента:"."<br>";
var_dump($noScript);

//Удалите картинки из полученного контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$noImage = preg_replace('#<img[^>]+?src\s*=[^>]*(["\'])[^>]+?\1[^>]*>#su','',$arr[0][0]);
echo "<br>"."Удалите картинки из полученного контента:"."<br>";
var_dump($noImage);

//Удалите абзацы с классом "more" из полученного контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$noMore = preg_replace('#<p[^>]+?class=[^>]*(["\'])[^>]+?\1[^>]*>.+?</p>#su','',$arr[0][0]);
echo "<br>"."Удалите абзацы с классом 'more' из полученного контента:"."<br>";
var_dump($noMore);

//Теги h2 из контента сделайте просто текстом, а не ссылками.

$file = file_get_contents('https://yandex.ru/company/');


preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$contentTextTask = preg_replace('#(?<=<h2>)\s*<a[^>]*>(.+?)</a>\s*(?=</h2>)#su', '$1', $contentText);

$noLink = preg_replace('#(?<=<h2>)\s*<a[^>]*?>(.+?)</a>\s*(?=</h2>)#su','$1', $arr[0][0]);
echo "<br>"."Теги h2 из контента сделайте просто текстом, а не ссылками:"."<br>";
var_dump($noLink);

//Удалите все атрибуты абзацев из полученного контента.
$file = file_get_contents('https://yandex.ru/company/');


preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$noAttribute = preg_replace('#(?<=<p)[^>]*(?=</p>)#su','', $arr[0][0]);
echo "<br>"."Удалите все атрибуты абзацев из полученного контента:"."<br>";
var_dump($noAttribute);

//Удалите все теги span из полученного контента.

$file = file_get_contents('https://yandex.ru/company/');

preg_match_all('#<div.+?id="content"\s+>(.+?)<div\s+id="footer"\s+>#su',$file, $arr);

$noSpan = preg_replace('#<span[^>]*>|</span>#su','', $arr[0][0]);
echo "<br>"."Удалите все теги span из полученного контента:"."<br>";
var_dump($noSpan);
?>