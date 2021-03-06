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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Form Tambah Data Apparel</title>
  <style>
    body {
      background-color: #00bcd4;
    }

    hr {
      background-color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row pt-5 mb-4">
      <div class="col text-center text-white">
        <h3>FORM TAMBAH DATA APPAREL</h3>
        <hr>
      </div>
    </div>

    <div class="row justify-content-center text-white">
      <div class="col-lg-6">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="display">Display Produk :</label>
            <input type="file" name="display" class="display form-control-file" id="display" onchange="previewImage()"><br>
            <img src="../assets/img/product/noimage.jpg" width="120" class="img-preview">
          </div>
          <div class="form-group">
            <label for="jenis_apparel">Jenis Apparel :</label>
            <input type="text" name="jenis_apparel" class="form-control" id="jenis_apparel" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="merk">Merk Apparel :</label>
            <input type="text" name="merk" class="form-control" id="merk" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="ukuran">Ukuran Apparel :</label>
            <input type="text" name="ukuran" class="form-control" id="ukuran" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="harga">Harga Apparel :</label>
            <input type="text" name="harga" class="form-control" id="harga" required autocomplete="off">
          </div>
          <div class="form-group">
            <button type="submit button" name="tambah" class="tambah btn btn-primary">Tambah Data!</button>
            <button type="submit button" class="submit btn btn-success">
              <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="../js/script.js"></script>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>