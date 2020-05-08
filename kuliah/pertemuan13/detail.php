<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="css/detail.css">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="detail">
    <tr>
      <h3>Detail Mahasiswa</h3>
      <img src="img/<?= $mhs['gambar']; ?>" width="200"><br>
      <td>NRP : <?= $mhs['nrp']; ?></td><br>
      <td>Nama : <?= $mhs['nama']; ?></td><br>
      <td>Email : <?= $mhs['email']; ?></td><br>
      <td>Jurusan : <?= $mhs['jurusan']; ?></td><br>
      <td><button><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a></button> | <button><a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></button></td><br>
      <td><button><a href="index.php">Kembali ke daftar mahasiswa</a></button></td>
    </tr>
  </div>
</body>

</html>