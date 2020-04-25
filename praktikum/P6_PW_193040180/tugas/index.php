<?php
    require 'php/functions.php';

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
    <link rel="stylesheet" href="css/style.css">
    <title>Sugih Apparel</title>
</head>
<body>
    <a href="php/admin.php">
        <button type="" class="admin">
            Masuk Ke Halaman Admin
        </button>
    </a><br><br>
    <div class="container">
    <form action="" method="get">
        <input type="text" name="keyword" size="25" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari" class="cari">Cari!</button>
    </form>

        <?php if(empty($apparel)) : ?>
            <h1>Data tidak ditemukan</h1>
        <?php else : ?>
        <h3>/~ KATEGORI APPAREL ~\</h3> <?php foreach ($apparel as $apr) : ?> <p class="nama">
                <a href="php/detail.php?id_apparel=<?= $apr['id_apparel'] ?>">
                    <?= $apr["jenis_apparel"] ?>
                </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</body>
</html>