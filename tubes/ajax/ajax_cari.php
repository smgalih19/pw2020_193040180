<?php

require '../php/functions.php';
$apparel = cari($_GET['keyword']);

?>
<div class="container text-center text-dark mt-3">
  <h1 class="all-product"><span>ALL</span> PRODUCT</h1><br>
  <?php if (empty($apparel)) : ?>
    <h1 style="color: red; font-style: italic;" class="text-center">Data tidak ditemukan</h1>
  <?php else : ?>
    <div class="row text-center text-white">
      <?php foreach ($apparel as $apr) : ?>
        <div class="col-md-3 mt-1">
          <div class="card mt-2 img-thumbnail bg-dark">
            <img class="card-img-top" src="../assets/img/product/<?= $apr['display']; ?>" alt="card image cap">
            <div class="card-body">
              <p class="card-text">
                <?= $apr['jenis_apparel']; ?>
                <hr><?= $apr['merk']; ?>
              </p>
              <a href="../php/detail.php?id_apparel=<?= $apr['id_apparel']; ?>" class="btn btn-outline-light btn-sm">Detail Product</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
    </div>
</div>