<?php

require 'functions.php';

$apr = $_GET['id_apparel'];

if (hapus($apr) > 0) {
  $conn = koneksi();
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'admin.php';
        </script>";
}
