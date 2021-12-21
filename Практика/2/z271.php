<?php
$arr = file_get_contents('https://ru.wikipedia.org/wiki/Сайт');

//Содержимое title.
preg_match_all('#<title.*>(.+?)</title>#su', $arr, $res);
echo "Содержимое title:"."<br>";
var_dump($res[1][0]);
echo '<hr>';

//Cодержимое head.
preg_match_all('#<head.*>(.+?)</head>#su', $arr, $res);
echo "<br>"."Cодержимое head:"."<br>";
var_dump($res[0][0]);
echo '<hr>';

//Cодержимое body.
preg_match_all('#<body.*>(.+?)</body>#su', $arr, $res);
echo "<br>"."Cодержимое body:"."<br>";
var_dump($res[0][0]);
echo '<hr>';

//Mассив href всех ссылок.
preg_match_all('#href\s*=[^>]*?(["\'])(.+?)\1#', $arr, $href);
echo "<br>"."Mассив href всех ссылок:"."<br>";
var_dump($href[2]);
echo '<hr>';

//Mассив текстов всех ссылок.
preg_match_all('#<a(.+?)?href\s*=\s*(\\\\\'|")(.+?)(\\\\\'|")(.+?)?>(.+?)</a>#', $arr, $text);
echo "<br>"."Mассив текстов всех ссылок:"."<br>";
var_dump($text[6]);
?>