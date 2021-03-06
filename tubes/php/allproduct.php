<?php
require 'functions.php';
$apparel = query("SELECT * FROM apparel");

if (isset($_POST['cari'])) {
  $apparel = cari($_POST['keyword']);
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
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Icon -->
  <link rel="icon" type="text/css" href="../assets/img/icon.png">
  <title>HOME | SUGIH APPAREL</title>
</head>

<body>
  <!-- Awal Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">SMG APPAREL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Best Item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutme">About Us</a>
          </li>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav ml-auto">
          <form action="" method="POST" class="form-inline my-2 my-lg-0">
            <input type="text" name="keyword" size="25" class="keyword form-control mr-sm-2" placeholder="Masukan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari" class="tombol-cari btn btn-outline-dark mr-2">Cari</button>
          </form>
          <a href="../php/login.php">
            <button type="" class="admin btn btn-outline-dark mt-2 mr-2 mb-2">Login</button>
            <a href="../php/registrasi.php">
              <button type="" class="btn btn-outline-dark mt-2 mb-2">Registrasi</button>
            </a>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid bg-cover">
    <div class="container">
      <h1 class="display-3 mb-1 nama-apparel">SUGIH APPAREL</h1>
      <p class="lead">Apparel <span>terpercaya</span> dengan <span>kualitas terbaik</span> dan <span>harga terjangkau</span></p>
    </div>
    <div class="button">
      <a class="btn btn-outline-light rounded-pill" href="#product" role="button">ALL PRODUCT</a>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Awal Product -->
  <section class="product" id="product">
    <div class="container-cari">
      <div class="container text-center text-dark mt-3">
        <h1 class="all-product"><span>ALL</span> PRODUCT</h1><br>
        <?php if (empty($apparel)) : ?>
          <h1 style="color: red; font-style: italic;" class="text-center">Data tidak ditemukan !</h1>
        <?php else : ?>
          <div class="row text-center text-white">
            <?php foreach ($apparel as $apr) : ?>
              <div class="col-md-3 mt-1 mb-3">
                <div class="card mt-2 img-thumbnail bg-dark">
                  <img class="card-img-top" src="../assets/img/product/<?= $apr['display']; ?>" width="300">
                  <div class="card-body">
                    <p class="card-text">
                      <?= $apr['jenis_apparel']; ?>
                      <hr><?= $apr['merk']; ?>
                    </p>
                    <a href="../php/detail_all_product.php?id_apparel=<?= $apr['id_apparel']; ?>" class="btn btn-outline-light btn-sm">Detail Product</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          </div>
      </div>
    </div>
  </section>
  <!-- Akhir Product -->

  <!-- Awal About -->
  <div id="aboutme"></div>
  <section id="about" class="about">
    <div class="container text-center mt-5">
      <div class="row justify-content-center about-us">
        <div class="col-md-7 text-center mt-5 mb-5">
          <div class="isi mt-5 mb-5">
            <h3>about <span>sugih apparel</span></h3>
            <p>
              Sugih Apparel Website Pembelian Apparel Secara Online, Berawal dari keinginan seorang
              pemuda yang ingin menghasilkan sesuatu produk yang berkualitas tinggi dimana dengan harga yang terjangkau.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->

  <!-- Awal Footer -->
  <section class="footer">
    <footer class="bg-dark text-white">
      <div class="container footer">
        <div class="row pt-3">
          <div class="col-md-4 footer-box">
            <p><b>INFO STORE</b></p>
            <p>Sugih Apparel</p>
            <p>Jalan Kidang Pananjung No. 123</p>
            <p>Pangandaran, West Java, Indonesia</p>
          </div>
          <div class="col-md-4 footer-box">
            <p><b>PAYMENT</b></p>
            <p><img src="../assets/img/icon_payment/bank_bri.png" class="icon"> BANK BRI</p>
            <p><img src="../assets/img/icon_payment/bank_bca.png" class="icon"> BANK BCA</p>
            <p><img src="../assets/img/icon_payment/bank_bjb.png" class="icon"> BANK BJB</p>
          </div>
          <div class="col-md-4 footer-box">
            <p><b>SOCIAL MEDIA</b></p>
            <p><img src="../assets/img/icon_sosmed/icon_instagram.png" class="icon"> @sugih_apparel</p>
            <p><img src="../assets/img/icon_sosmed/icon_facebook.png" class="icon"> Sugih Apparel Pnd</p>
            <p><img src="../assets/img/icon_sosmed/icon_twitter.png" class="icon"> @sapparel</p>
          </div>
          <div class="copyright col text-center">
            <hr>
            <p>Created by <a href="https://www.instagram.com/sempatpanick_/" target="_blank">@sempatpanick.</a> Copyright
              2020.</p>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!-- Akhir Footer -->

  <!-- Smooth Scroll -->
  <script src="../js/smooth-scroll.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

  <script src="../js/script.js"></script>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>