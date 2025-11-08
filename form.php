<?php
$sarlavha = "2025-yilda IT sohasi";
$matn = "IT (axborot texnologiyalari) sohasi – bu kompyuterlar, dasturlar va vositalar yordamida ma'lumotlarni saqlash, qayta ishlash va boshqarish bilan shug'ullanadi. Bu hayotimizning barcha jabha sohalarida — ta'lim, sog' quvvat saqlash, bank, ishlab chiqarish va hatto kundalik aloqa jarayonlarida muhim o'rin tutadi. IT xodimlarii dasturiy ta'minot, tizimlarni boshqaradi va' larni himoya qiladi. Hozirgi kunda IT sohasiga bo'lgan talab juda yuqori";
?>

		<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST Forma</title>
  <style>
		* {
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: linear-gradient(135deg, #00c6ff, #0072ff);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  width: 400px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  transition: 0.3s;
}

input:focus,
textarea:focus {
  border-color: #0072ff;
  outline: none;
}

textarea {
  resize: none;
  height: 100px;
}

button {
  width: 100%;
  padding: 10px;
  background: #0072ff;
  border: none;
  color: #fff;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background: #005fcb;
}

	</style>
</head>
<body>
  <div class="form-container">
    <h2>POST Forma</h2>
    <form action="process.php" method="POST">
      <div class="form-group">
        <label for="name">Ism:</label>
        <input type="text" id="name" name="name" value="<?php echo $sarlavha ?>" placeholder="Ismingizni kiriting" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
      </div>

      <div class="form-group">
        <label for="message">Xabar:</label>
        <textarea id="message" name="message" placeholder="Xabaringizni yozing..." required>
					<?php echo $matn ?>
				</textarea>
      </div>

      <button type="submit">Yuborish</button>
    </form>
  </div>
</body>
</html>
