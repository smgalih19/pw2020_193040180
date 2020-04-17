<?php 
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes_193040180") or die("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas2</title>
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row["display"]; ?>"></td>
                <td><?= $row["jenis_apparel"]; ?></td>
                <td><?= $row["merk"]; ?></td>
                <td><?= $row["ukuran"]; ?></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>