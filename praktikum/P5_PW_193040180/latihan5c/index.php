<?php
    require 'php/functions.php';

    $apparel = query("SELECT * FROM apparel")
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
        <h3>/~ KATEGORI <span>APPAREL ~\</span></h3> <?php foreach ($apparel as $apr) : ?> <p class="nama">
                <a href="php/detail.php?id_apparel=<?= $apr['id_apparel'] ?>">
                    <?= $apr["jenis_apparel"] ?>
                </a>
                </p>
            <?php endforeach; ?>
    </div>
</body>
</html>