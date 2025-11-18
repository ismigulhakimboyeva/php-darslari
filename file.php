<?php
	// Fayldagi ma'lumotlarni o'qish.
	if(file_exists("test.txt")){
	$file = fopen("test.txt.", "r");
	$content = fread($file, filesize('file.txt'));
	fclose($file);
	echo $content;
	} else {
		echo "Fayl mavjud emas! <br>";
	}
	// Faylga yozish
	$file = fopen('files.txt', "w");
	fwrite($file,"lorem ipsum dolor sit amet!");
	fclose($file);
	//Faylga ma'lumotni qo'shib yozish
	$file = fopen('files.txt', "a");
	fwrite( $file, " \nYangi ma'lumot qo'shish");
	fclose($file);
// unlink("test.txt);
	//Fayl mavjudligini tekshirish
	if(file_exists("file.txt")){
		echo "Fayl mavjud emas!";
	}
else{
	echo "Fayl mavjud";
}
// O'qish
$content = file_get_contents('file.txt');
//yozish
file_put_contents('file.php','hello!' );
// qo'shib yozish
file_put_contents('file.php','hello!', FILE_APPEND );


?>