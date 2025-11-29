<?php
$name = "<h2>Sarvar</h2>";
echo $name. "<br>";
$newName = filter_var($name, FILTER_SANITIZE_STRING);
echo $newName. "<br>";

$email = "test@example.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Email to'g'ri";
} else {
	echo "Email noto'g'ri !";
}
echo "\n";
$son = 22 ; // "22"
if(filter_var($son, FILTER_VALIDATE_INT)){
	echo "Butun son";
} else {
	echo "Butun son emas !";
}

?>