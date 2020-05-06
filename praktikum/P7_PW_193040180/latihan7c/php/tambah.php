<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                  alert('Data Berhasil ditambahkan!');
                  document.location.href = 'admin.php'
              </script>";
  } else {
    echo "<script>
                  alert('Data Gagal ditambahkan!');
                  document.location.href = 'admin.php'
                </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/tambah.css">
  <title>Form Tambah Data Apparel</title>
</head>

<body>
  <h3>Form Tambah Data Apparel</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="display">Display Produk :</label><br>
        <input type="text" name="display" id="display" required><br><br>
      </li>
      <li>
        <label for="jenis_apparel">Jenis Apparel :</label><br>
        <input type="text" name="jenis_apparel" id="jenis_apparel" required><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label><br>
        <input type="text" name="merk" id="merk" required><br><br>
      </li>
      <li>
        <label for="ukuran">Ukuran :</label><br>
        <input type="text" name="ukuran" id="ukuran" required><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <button type="submit" name="tambah" class="tambah">Tambah Data!</button>
      <button type="submit" class="submit">
        <a href="admin.php" style="text-decoration: none; color:white;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>