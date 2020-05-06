<?php
require 'functions.php';

$id = $_GET['id_apparel'];
$apr = query("SELECT * FROM apparel WHERE id_apparel = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                  alert('Data Berhasil diubah!');
                  document.location.href = 'admin.php'
              </script>";
  } else {
    echo "<script>
                  alert('Data Gagal diubah!');
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
  <title>Form Ubah Data Apparel</title>
</head>

<body>
  <h3>Form Ubah Data Apparel</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $apr['id_apparel']; ?>">
    <ul>
      <li>
        <label for="display">Display Produk :</label><br>
        <input type="text" name="display" id="display" required value="<?= $apr['display']; ?>"><br><br>
      </li>
      <li>
        <label for="jenis_apparel">Jenis Apparel :</label><br>
        <input type="text" name="jenis_apparel" id="jenis_apparel" required value="<?= $apr['jenis_apparel']; ?>"><br><br>
      </li>
      <li>
        <label for="merk">Merk :</label><br>
        <input type="text" name="merk" id="merk" required value="<?= $apr['merk']; ?>"><br><br>
      </li>
      <li>
        <label for="ukuran">Ukuran :</label><br>
        <input type="text" name="ukuran" id="ukuran" required value="<?= $apr['ukuran']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $apr['harga']; ?>"><br><br>
      </li>
      <button type="submit" name="ubah" class="ubah">Ubah Data!</button>
      <button type="submit" class="submit">
        <a href="../index.php" style="text-decoration: none; color:white;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>