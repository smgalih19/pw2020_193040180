<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('user baru berhasil ditambahkan, silahkan login!');
        document.location.href = 'login.php';
      </script>";
  } else {
    echo 'user gagal ditambahkan!';
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
  <link rel="stylesheet" href="css/registrasi.css">
  <title>Halaman | Registrasi</title>
</head>

<body>
  <form action="" method="POST" id="form-registrasi">
    <h3>Form Registrasi</h3>
    <div class="input">
      <label>
        Username :
        <input type="text" name="username" autofocus autocomplete="off" required>
      </label>
    </div>
    <div class="input">
      <label>
        Password :
        <input type="password" name="password1" required>
      </label>
    </div>
    <div class="input">
      <label>
        Konfirmasi Password :
        <input type="password" name="password2" required>
      </label>
    </div>
    <button type="submit" name="registrasi" class="registrasi">Registrasi</button>
  </form>
</body>

</html>