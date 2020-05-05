<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="css/login.css">
  <title>Login | Data Mahasiswa</title>
</head>

<body>

  <form action="" method="post" id="form-login">
    <h3>Form Login</h3>
    <div class="input">
      <label for="username">Username :</label>
      <input type="text" name="username" autofocus autocomplete="off" required>
    </div>
    <div class="input">
      <label for="password">Password :</label>
      <input type="password" name="password" required>
    </div>
    <button type="submit" name="login" class="login">Login</button>
    <div class="user"><br>
      <p><a href="registrasi.php">Tambah User Baru</a></p>
    </div><br>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style: italic; text-align: center;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
  </form>

</body>

</html>