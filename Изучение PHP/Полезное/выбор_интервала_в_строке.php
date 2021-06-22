<?php
 $input = "Процессор{ modid=2 }Оперативная память 56] "; 
 preg_match('/\Процессор{ (.*) }Оперативная/', $input, $output);
 echo   var_dump($output);
 echo $output[1];
?>