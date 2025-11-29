<?php
$data = [
	"name" => "Abdulla",
	"age" => 25,
	"city" =>"Urganch"
];
$json = json_encode($data);
echo $json;
echo "\n";
$json = '{"name": "Sarvar", "age": "28"}';
$array = json_decode($json, true);
print_r($array)
?>