<?php
require '../php/functions.php';
$barang = cari($_GET['keyword']);
?>


<?php if (empty($barang)) : ?>
  <tr>
    <td colspan="4">
      <p style="color:red; font-style:italic;">Data Barang Tidak Ditemukan</p>
    </td>
  </tr>
<?php endif; ?>

<?php if (empty($barang)) : ?>
  <tr>
    <td colspan="4">
      <p style="color:red; font-style:italic;">Data Barang Tidak Ditemukan</p>
    </td>
  </tr>
<?php endif; ?>

<div class="row">
  <?php foreach ($barang as $brg) : ?>
    <div class="col m3 s12" style="height: 500px;">
      <div class="card sticky-action card-panel hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="../assets/img/offroad/<?= $brg["gambar"]; ?>">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">
            <span class="new badge light-blue accent-3" data-badge-caption="<?= $brg["kategori"]; ?>"></span> <br> <?= $brg["nama"]; ?><i class="material-icons right">more_vert</i>
          </span>
          <p><?= ubahRupiah($brg["harga"]) ?></p>
        </div>
        <div class="card-action">
          <p><a class="blue-text text-darken-2" href="detailoff.php?id=<?= $brg["id"] ?>">Detail</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><?= $brg["nama"]; ?> <br>
            <h6><?= $brg["tipe"]; ?></h6><i class="material-icons right">close</i>
          </span>
          <p><?= $brg["deskripsi"]; ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>