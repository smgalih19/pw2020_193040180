<?php 

//menghubungkan dengan file php lain
require 'functions.php';

//melakukan query
$apparel = query("SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>
    <h2>Selamat Datang Admin</h2>
<table border="1" cellpadding="13" cellspacing="0" align="center">
    <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Display</th>
        <th>Jenis Apparel</th>
        <th>Merk</th>
        <th>Ukuran</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($apparel as $apr) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="" class="ubah"><button>Ubah</button></a>
                <a href="" class="hapus"><button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $apr['display']; ?>" width="80"></td>
            <td><?= $apr['jenis_apparel']; ?></td>
            <td><?= $apr['merk']; ?></td>
            <td><?= $apr['ukuran']; ?></td>
            <td>Rp <?= $apr['harga']; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>