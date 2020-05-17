<?php
if (!isset($_GET['id_apparel'])) {
  header("location: ../index.php");
  exit;
}
require 'functions.php';

$id = $_GET['id_apparel'];

$apparel = query("SELECT * FROM apparel WHERE id_apparel = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
      background-color: whitesmoke;
    }

    .navbar {
      background-color: white;
      box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.4);
    }

    .navbar-brand {
      font-size: 30px;
    }

    .detail {
      font-family: 'Courier Prime', monospace;
      font-size: 20px;
      margin-top: 100px;
    }

    .detail {
      margin-bottom: 50px;
    }
  </style>
  <title>HALAMAN | DETAIL</title>
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">SMG APPAREL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Best Item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">About Us</a>
          </li>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">
          <a href="login.php">
            <button type="" class="admin btn btn-outline-dark mr-2">Login</button>
          </a>
          <a href="registrasi.php">
            <button type="" class="btn btn-outline-dark">Registrasi</button>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Detail Product -->
  <section id="detail" class="detail">
    <div class="container">
      <div class="row mb-5">
        <div class="col text-center text-dark">
          <h2>Detail Product</h2>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center text-dark">
        <div class="col-md-5 text-center mb-3">
          <img src="../assets/img/product/<?= $apparel["display"]; ?>" class="img-thumbnail shadow-lg p-3 mb-5 bg-white rounded" width="300">
        </div>
        <div class="col-md-5 text-left">
          <h1><span><?= $apparel["jenis_apparel"]; ?></span></h1>
          <hr>
          <p>Merk <?= $apparel["merk"]; ?></p>
          <p>Ukuran <?= $apparel["ukuran"]; ?></p>
          <p>Rp.<?= $apparel["harga"]; ?></p>
          <a href="allproduct.php" class="tombol-kembali btn btn-dark">Kembali</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Detail Product -->

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>