<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $apparel = query("SELECT * FROM apparel WHERE
            display LIKE '%$keyword%' OR
            jenis_apparel LIKE '%$keyword%' OR
            merk LIKE '%$keyword%' OR
            ukuran LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
        ");
} else {
    $apparel = query("SELECT * FROM apparel");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-color: #00bcd4;
        }

        .product {
            margin-top: 80px;
            font-family: 'Courier Prime', monospace;
        }
    </style>
    <title>HALAMAN DEPAN | APPAREL</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SUGIH APPAREL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <form action="" method=" get" class="form-inline my-2 my-lg-0">
                        <input type="text" name="keyword" size="25" class="form-control mr-sm-2" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off">
                        <button type="submit" name="cari" class="cari btn btn-outline-info mr-2">Cari</button>
                    </form>
                    <a href="php/login.php">
                        <button type="" class="admin btn btn-outline-info">Login Admin</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="product" id="product">
        <div class="container text-center text-white mt-3">
            <h1 class="">ALL PRODUCT SUGIH APPAREL</h1><br>
            <?php if (empty($apparel)) : ?>
                <h1 style="color: red; font-style: italic;" class="text-center">Data tidak ditemukan</h1>
            <?php else : ?>
                <div class="row text-center text-dark">
                    <?php foreach ($apparel as $apr) : ?>
                        <div class="col-sm-3 mb-3">
                            <div class="card mt-3 img-thumbnail">
                                <img class="card-img-top" src="assets/img/<?= $apr['display']; ?>" alt="card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <?= $apr['jenis_apparel']; ?>
                                        <hr><?= $apr['merk']; ?>
                                    </p>
                                    <a href="php/detail.php?id_apparel=<?= $apr['id_apparel']; ?>" class="btn btn-outline-info">Detail Product</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
        </div>
    </section>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>