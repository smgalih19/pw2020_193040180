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
    <link rel="stylesheet" href="../css/detail.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $apparel["display"]; ?>" alt="">
        </div>
        <div class="keterangan">
                <p>/~ <span><?= $apparel["jenis_apparel"]; ?></span> ~\</p>
                <p><?= $apparel["merk"]; ?></p>
                <p><?= $apparel["ukuran"]; ?></p>
                <p><?= $apparel["harga"]; ?></p>
        </div>
            <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>