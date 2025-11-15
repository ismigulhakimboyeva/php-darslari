<?php
include ('header.php');
?>
<div class="form-container">
    <h2>POST Forma</h2>
    <form action="data.php" method="POST">
      <div class="form-group">
        <label for="name">Ism:</label>
        <input type="text" id="name" name="name"  placeholder="Ismingizni kiriting" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
      </div>

      <div class="form-group">
        <label for="message">Xabar:</label>
        <textarea id="message" name="message" placeholder="Xabaringizni yozing..." required>
				</textarea>
      </div>

      <button type="submit">Yuborish</button>
    </form>
<?php
include('footer.php');
?>