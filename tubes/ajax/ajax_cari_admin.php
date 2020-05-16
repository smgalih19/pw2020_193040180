<?php

require '../php/functions.php';
$apparel = cari($_GET['keyword']);

?>
<table border="1" cellpadding="15" cellspacing="0" align="center">
  <tr>
    <th>#</th>
    <th>opsi</th>
    <th>Display</th>
    <th>Jenis Apparel</th>
    <th>Merk</th>
    <th>Ukuran</th>
    <th>Harga</th>
  </tr>
  <?php if (empty($apparel)) : ?>
    <tr>
      <td colspan="7">
        <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
      </td>
    </tr>
  <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($apparel as $apr) : ?>
      <tr>
        <td><b><?= $i; ?></b></td>
        <td>
          <a href="ubah.php?id_apparel=<?= $apr['id_apparel']; ?>" class="ubah"><button class="btn btn-primary btn-sm mr-2 mb-2">UBAH</button></a>
          <a href="hapus.php?id_apparel=<?= $apr['id_apparel']; ?>" onclick="return confirm('Yakin mau dihapus?')" class="hapus"><button class="btn btn-danger btn-sm mb-2">HAPUS</button></a>
        </td>
        <td><img src="../assets/img/product/<?= $apr['display']; ?>" width="100"></td>
        <td><?= $apr['jenis_apparel']; ?></td>
        <td><?= $apr['merk']; ?></td>
        <td><?= $apr['ukuran']; ?></td>
        <td>Rp. <?= $apr['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</table>