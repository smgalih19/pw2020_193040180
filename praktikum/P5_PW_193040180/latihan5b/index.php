<?php 
    require 'php/functions.php';

    $apparel = query("SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>/~ APPAREL ~\</h3>
        <table align="center" border="5" cellpadding="5" cellspacing="0">
            <tr class="atas">
                <th>ID</th>
                <th>DISPLAY</th>
                <th>KATEGORI</th>
                <th>MERK</th>
                <th>SIZE</th>
                <th>HARGA</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($apparel as $apr) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $apr["display"]; ?>"></td>
                <td><?= $apr["jenis_apparel"]; ?></td>
                <td><?= $apr["merk"]; ?></td>
                <td><?= $apr["ukuran"]; ?></td>
                <td><?= $apr["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>