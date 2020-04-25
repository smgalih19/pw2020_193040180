<?php 
//menghubungkan dengan file php lain
require 'functions.php';

if(isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $apparel = query("SELECT * FROM apparel WHERE
        display LIKE '%$keyword%' OR
        jenis_apparel LIKE '%$keyword%' OR
        merk LIKE '%$keyword%' OR
        ukuran LIKE '%$keyword%' OR
        harga LIKE '%$keyword%'
    ");
}else{
    $apparel = query("SELECT * FROM apparel");
}
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
    <div class="add">
        <a href="tambah.php" class="tambah"><button>Tambah Data</button></a>
    </div><br>
    <form action="" method="get">
        <input type="text" name="keyword" autocomplete="off" autofocus>
        <button type="submit" name="cari" class="cari" >Cari!</button>
    </form><br>
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
    <?php if(empty($apparel)) : ?>
        <tr>
            <td colspan="7">
                <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
            </td>
        </tr>
    <?php else : ?>
    <?php $i = 1; ?>
        <?php foreach ($apparel as $apr) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id_apparel=<?= $apr['id_apparel']; ?>" class="ubah"><button>Ubah</button></a>
                    <a href="hapus.php?id_apparel=<?= $apr['id_apparel']; ?>" onclick="return confirm('Yakin mau dihapus?')" class="hapus"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $apr['display']; ?>" width="80"></td>
                <td><?= $apr['jenis_apparel']; ?></td>
                <td><?= $apr['merk']; ?></td>
                <td><?= $apr['ukuran']; ?></td>
                <td>Rp <?= $apr['harga']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</body>
</body>
</html>