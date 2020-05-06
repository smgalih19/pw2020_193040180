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
            background-color: #00bcd4;
        }

        .detail {
            font-family: 'Courier Prime', monospace;
            font-size: 20px;
        }
    </style>
    <title>HALAMAN | DETAIL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand container" href="#">DETAIL APPAREL</a></a>
    </nav>

    <section class="detail">
        <div class="gambar card-img">
            <div class="container text-center text-white mt-5">
                <img src="../assets/img/<?= $apparel["display"]; ?>" class="img-thumbnail">
                <p class="keterangan card-text">
                    <h1><span><?= $apparel["jenis_apparel"]; ?></span></h1>
                    <hr>
                    <p>Merk <?= $apparel["merk"]; ?></p>
                    <p>Ukuran <?= $apparel["ukuran"]; ?></p>
                    <p>Rp <?= $apparel["harga"]; ?></p>
                </p>
                <a href="../index.php" class="tombol-kembali btn btn-light">Kembali</a>
            </div>
        </div>
    </section>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>