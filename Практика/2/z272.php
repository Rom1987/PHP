<?php

   // Получите содержимое body.
$res=file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');
preg_match_all('#<body[^>]*>(.+?)</body>#su', $arr, $res);
echo "Получите содержимое body:"."<br>";
var_dump($res[1]);

//Получите кодировку документа (нового и старого типа).

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<meta\s+?(charset\s*?=[^>]*?|http-equiv\s*?=\s*?"Content-Type"\s*content="text/html;\s*?charset\s*?=[^>]*?\s*?"\s*?)>#su', $file, $charset);
echo "<br>"."Получите кодировку документа (нового и старого типа):"."<br>";
var_dump($charset[1][0]).'\n';
var_dump($charset[1][1]);

//Получите содержимое #content.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div[^>]+?id=(["\'])content\1[^>]*?>(.*?)</div>#su', $file, $str);
echo "<br>"."Получите содержимое #content:"."<br>";
var_dump($str[2][0]);

//Получите все ссылки из #content.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div[^>]+?id=(["\'])content\1[^>]*?>(.*?)</div>#su', $file, $arr);

preg_match_all('#<a\s+href\s*=\s*(["\'])[^>]+?\1[^>]*?>[^>]+?</a>#', $arr[2][0], $links);
echo "<br>"."Получите все ссылки из #content:"."<br>";
var_dump($links);



//Получите содержимое всех абзацев.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<p[^>]*>(.*?)</p>#su', $file, $arr);
echo "<br>"."Получите содержимое всех абзацев:"."<br>";
var_dump($arr[1]);

//Получите содержимое всех абзацев из #content.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div[^>]+?id\s*?=\s*?(["\'])content\1[^>]*?>(.*?)</div>#su',$file, $arr);

preg_match_all('#<p[^>]*>(.*?)</p>#su',$arr[2][0],$arr );
echo "<br>"."Получите содержимое всех абзацев из #content:"."<br>";
var_dump($arr[1]);

//Получите все абзацы с классом www.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<p\s+?class=[^>]*?(["\'])www[^>]*?\1>(.*?)</p#su',$file, $arr);
echo "<br>"."Получите все абзацы с классом www:"."<br>";
var_dump($arr[0]);


//Получите все ссылки с классом www (их href и анкоры).

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<a\s+class\s*=\s*(\\\\\'|")www(\\\\\'|")\s*href=[^>]+?>(.+?)</a>|<a\s*href=([^>]+?)\s*class\s*=\s*(\\\\\'|")www(\\\\\'|")[^>]*>(.*?)</a>#su',$file, $arr);
echo "<br>"."Получите все ссылки с классом www (их href и анкоры):"."<br>";
var_dump($arr[0]);
var_dump($arr[3][0]);
var_dump($arr[4][0]);
var_dump($arr[5]);
var_dump($arr[8]);

//Получите все ссылки с классом www из #content.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div[^>]*?id=(["\'])content\1[^>]*>(.+?)</div>#su',$file, $arr);

preg_match_all('#<a[^>]*?class\s*=\s*(["\'])www\1[^>]*>(.*?)</a>#su',$arr[2][0], $links);
echo "<br>"."Получите все ссылки с классом www из #content:"."<br>";
var_dump($links[0][0]);

//Получите все ссылки из пагинации .pag.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div\s+class=(["\'])pag\1\s+>(.+?)</div>#su',$file, $arr);

preg_match_all('#<a\s+href=(["\'])(.+?)\1>(.+?)</a>#',$arr[2][0], $links);
echo "<br>"."Получите все ссылки из пагинации .pag:"."<br>";
var_dump($links[0]);

//Получите активную ссылку из пагинации .pag.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<div\s+class=(["\'])pag\1\s+>(.+?)</div>#su',$file, $arr);

preg_match_all('#<li\s+class\s+=\s+(["\'])active\1\s+>(.+?)</li>#',$arr[2][0],$active);
echo "<br>"."Получите активную ссылку из пагинации .pag:"."<br>";
var_dump($active[2][0]);

//Получите содержимое абзаца с классом .eee из #footer.

$file = file_get_contents('https://1ps.ru/blog/dirs/seoglossary/sajt/');

preg_match_all('#<p\s+class\s+=\s+(["\'])eee\1>(.+?)</p>#su',$file, $arr);
echo "<br>"."Получите содержимое абзаца с классом .eee из #footer:"."<br>";
var_dump($arr[2][0]);
?>