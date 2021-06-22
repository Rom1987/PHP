<?php
// read json file
echo '<pre>';
$res = file_get_contents('json.json');

// print_r($res);
// var_dump($res);
$data = json_decode($res, true);
// var_dump($data);

for ($i = 0; $i < count($data); $i++){

    $data['commands'][$i]['title'] = $data['commands'][$i]['title'].'10';

}
print_r($data);

// write json

$jsonData = json_encode($data); 
file_put_contents('jsonPUT.json', $jsonData);

echo 'menu'.$data->{'menu'};