<?php 
require 'functions.php';

//cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])){
  if(tambah($_POST) > 0){
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>";
  }else{
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/tambah.css">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nama">Nama :</label><br>
        <label><input type="text" name="nama" autofocus required></label><br><br>
      </li>
      <li>
        <label for="nrp">Nrp :</label><br>
        <label><input type="text" name="nrp" autofocus required></label><br><br>
      </li>
      <li>
        <label for="email">Email :</label><br>
        <label><input type="text" name="email" autofocus required></label><br><br>
      </li>
      <li>
        <label for="jurusan">Jurusan :</label><br>
        <label><input type="text" name="jurusan" autofocus required></label><br><br>
      </li>
      <li>
        <label for="gambar">Gambar :</label><br>
        <label><input type="text" name="gambar" autofocus required></label><br><br>
      </li>
        <button type="submit" name="tambah" class="tambah">Tambah Data!</button>
        <button type="submit" class="submit">
          <a href="index.php" style="text-decoration: none; color:white;">Kembali</a>
        </button>
    </ul>
  </form>
</body>
</html>