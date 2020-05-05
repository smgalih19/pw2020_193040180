<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>Halaman | Data Mahasiswa</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-white" href="index.php">DAFTAR MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">
          <form action="" method="POST" class="form-inline my-2 my-lg-0">
            <input type="text" name="keyword" size="25" class="form-control mr-2" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari" class="cari btn btn-outline-info mr-2">Cari!</button>
          </form>
          <a href="logout.php">
            <button type="" class="admin btn btn-outline-info mr-2">Logout</button>
          </a>
          <a href="tambah.php">
            <button class="tambah btn btn-outline-info">Tambah Data</button>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <table border="1" cellpadding="10" cellspacing="0" align="center" width="50%">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">Data Mahasiswa Tidak Ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="100"></td>
        <td><?= $mhs['nama']; ?></td>
        <td class="detail">
          <a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>