<?php 
require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])){
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])){
  if(ubah($_POST) > 0){
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
          </script>";
  }else{
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ubah.css">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <ul>
      <li>
          <label for="nama">Nama :</label><br>
          <label><input type="text" name="nama" id="nama" autofocus required value="<?= $mhs['nama']; ?>"></label><br><br>
      </li>
      <li>
          <label for="nrp">Nrp :</label><br>
          <label></label><input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp']; ?>"></label><br><br>
      </li>
      <li>
          <label for="email">Email :</label><br>
          <label></label><input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>"></label><br><br>
      </li>
      <li>
          <label for="jurusan">Jurusan :</label><br>
          <label></label><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>"></label><br><br>
      </li>
      <li>
          <label for="gambar">Gambar :</label><br>
          <label></label><input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar']; ?>"></label><br><br>
      </li>
        <button type="submit" name="ubah" class="ubah">Ubah Data!</button>
        <button type="submit" class="submit">
          <a href="index.php" style="text-decoration: none; color:white;">Kembali</a>
        </button>
    </ul>
  </form>
</body>
</html>