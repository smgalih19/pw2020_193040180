<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
//menghubungkan dengan file php lain
require 'functions.php';

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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/admin.css">
    <title>HALAMAN ADMIN</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SUGIH APPAREL | HALAMAN ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <form action="" method="get" class="form-inline my-2 my-lg-0">
                        <input type="text" name="keyword" size="25" class="keyword form-control mr-sm-2" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off">
                        <button type="submit" name="cari" class="tombol-cari-admin btn btn-outline-info mr-2">Cari</button>
                    </form>
                    <a href="tambah.php">
                        <button type="" class="tambah btn btn-outline-primary mr-2 mt-2 mb-2">Tambah Data</button>
                    </a>
                    <a href="logout.php">
                        <button type="" class="admin btn btn-outline-danger mt-2 mb-2">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <h2>Selamat Datang <span style="color: red"><?php echo $_SESSION['username']; ?></span></h2>
    <div class="container-cari-admin">
        <table border="1" cellpadding="15" cellspacing="0" align="center">
            <tr>
                <th>#</th>
                <th>opsi</th>
                <th>Display</th>
                <th>Jenis Apparel</th>
                <th>Merk</th>
                <th>Ukuran</th>
                <th>Harga</th>
            </tr>
            <?php if (empty($apparel)) : ?>
                <tr>
                    <td colspan="7">
                        <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($apparel as $apr) : ?>
                    <tr>
                        <td><b><?= $i; ?></b></td>
                        <td>
                            <a href="ubah.php?id_apparel=<?= $apr['id_apparel']; ?>" class="ubah"><button class="btn btn-primary btn-sm mr-2 mb-2">UBAH</button></a>
                            <a href="hapus.php?id_apparel=<?= $apr['id_apparel']; ?>" onclick="return confirm('Yakin mau dihapus?')" class="hapus"><button class="btn btn-danger btn-sm mb-2">HAPUS</button></a>
                        </td>
                        <td><img src="../assets/img/product/<?= $apr['display']; ?>" width="100"></td>
                        <td><?= $apr['jenis_apparel']; ?></td>
                        <td><?= $apr['merk']; ?></td>
                        <td><?= $apr['ukuran']; ?></td>
                        <td>Rp. <?= $apr['harga']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <script src="../js/scriptadmin.js"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>