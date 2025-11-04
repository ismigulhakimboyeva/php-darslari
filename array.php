<?php
// // Massivlar
// //  1-usul
// $sonlar  = array( 1,2,3,4,5,6,7,8,9,"ismigul", "so'najon");
// echo $ism [1];
// echo "\n";
// //2-usul
// $sonlar1 = [1,2,3,4,5, "true",true];
// echo $sonlar [4];
// echo "\n";
// echo $sonlar[4];
// echo "\n";
// $sonlar[4] =70;
// echo "\n";
// echo $sonlar[4];
// print_r($sonlar);
// //massivga yangi element qo'shish oxiriga
// array_push($sonlar, 113,45);
// $sonlar[] = 444;
// print_r($sonlar);
// echo "\n";
// $car = ["model" => "Cobalt", "brand" => "Chevrolet", "year" => 2025];
// //  print_r($car)
// echo $car["model"];
// echo "\n";
// echo $car["model"] = "Onix";
// echo "\n";
// echo $car["model"];

//indexli massivlar
$cars = [
	0 => "cobalt",
	1 => "test",
];
// bo'sh massivlar
$nassiv =[];
$massiv [0] = "Ismigul";
$massiv [1] = "So'najon";
print_r($massiv);
$massiv1 = [];
$massiv1["ism"] = "Komila";
$massiv1["familiya"] = "Rustamova";
$massiv1[0] = "Test";
print_r($massiv1);
$sonlar = [5,4,82,15,46,74];
print_r($sonlar);
$juft =[];
//foreach 
$users = ["name" => "So'najon", "surname" =>"Hakimboyeva", "year" => 2011 ];
foreach ($users as $key => $value) {
echo $key. ": ". $value.", ";
}
foreach ($users as $value) {
	echo $value.", ";
}
$users += ["adress" =>"Xonqa", "age" => 14];
print_r($users);
//*** 
// array_splice($sonlar, 2, 2);
// unset($sonlar[2]);
print_r(array_diff($users, ["Hakimboyeva"]));
// sorting
$sonlar = [5,4,82,15,46,74];
sort($sonlar);
print_r($sonlar);
rsort($sonlar);
print_r($sonlar);



?>