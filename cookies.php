<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ism = $_POST['ism'];
    setcookie('ism', $ism, time() + 60 );
    echo "Cookie saqlandi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_COOKIE['ism'])) {
		echo "<h2>Salom, " . $_COOKIE['ism'] . "</h2>";
	} else {
	?>
		<form action="" method="POST">
			<label for="">Ismingizni kiriting</label> <br>
			<input type="text" name="ism" id="">
			<input type="submit" value="Yuborish">
		</form>
	<?php
	}
	?>
</body>
</html>