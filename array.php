<?php
// Massivlar
//  1-usul
$sonlar  = array( 1,2,3,4,5,6,7,8,9,"ismigul", "so'najon");
echo $ism [1];
echo "\n";
//2-usul
$sonlar1 = [1,2,3,4,5, "true",true];
echo $sonlar [4];
echo "\n";
echo $sonlar[4];
echo "\n";
$sonlar[4] =70;
echo "\n";
echo $sonlar[4];
print_r($sonlar);
//massivga yangi element qo'shish oxiriga
array_push($sonlar, 113,45);
$sonlar[] = 444;
print_r($sonlar);
echo "\n";
$car = ["model" => "Cobalt", "brand" => "Chevrolet", "year" => 2025];
//  print_r($car)
echo $car["model"];
echo "\n";
echo $car["model"] = "Onix";
echo "\n";
echo $car["model"];


?>