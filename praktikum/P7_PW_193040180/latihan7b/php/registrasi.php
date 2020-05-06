<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('Registrasi Berhasil');
        document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
        alert('Registrasi Gagal');
    </script>";
  }
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
  <link rel="stylesheet" href="../css/registrasi.css">
  <title>Halaman Registrasi</title>
</head>

<body>
  <form action="" method="post" id="registrasi">
    <h1>REGISTRASI</h1>
    <div class="input">
      <td><label for="username">Username</label></td>
      <td><input type="text" name="username" required></td>
    </div>
    <div class="input">
      <td><label for="password">Password</label></td>
      <td><input type="password" name="password" required></td>
    </div>
    <button type="submit" name="register" class="register">REGISTER</button>
  </form>
</body>

</html>