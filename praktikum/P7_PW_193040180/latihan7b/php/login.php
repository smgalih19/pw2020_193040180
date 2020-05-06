<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  // mencocokan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
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
  <link rel="stylesheet" href="../css/login.css">
  <title>Halaman Login</title>
</head>

<body>
  <form action="" method="post" id="login">
    <h1>LOGIN</h1>
    <p>Masukan Username dan Password</p>
    <div class="input">
      <label for="username">Username</label>
      <input type="text" name="username">
    </div>
    <div class="input">
      <label for="password">Password</label>
      <input type="password" name="password">
    </div>
    <div class="remember">
      <input type="checkbox" name="remember">
      <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit" class="submit">Login</button>
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password salah</p><br>
    <?php endif; ?>
    <div class="registrasi">
      <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </form>
</body>

</html>