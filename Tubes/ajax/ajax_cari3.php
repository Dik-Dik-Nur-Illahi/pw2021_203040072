<?php
require '../php/functions.php';
$offroad = cari($_GET['keyword']);
$onroad = cari2($_GET['keyword']);
?>



<div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s6"><a class="active" href="#offroad">Off Road</a></li>
      <li class="tab col s6"><a href="#onroad">On Road</a></li>
    </ul>
  </div>
  <div id="offroad" class="col s12">
    <div class="container">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Nama Barang</th>
            <th>Tipe</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
          </tr>
        </thead>

        <tbody>
          <?php if (empty($offroad)) : ?>
            <tr>
              <td colspan="4">
                <p style="color:red; font-style:italic;">Data Barang Off Road Tidak Ditemukan</p>
              </td>
            </tr>
          <?php endif; ?>

          <?php $i = 1;
          foreach ($offroad as $off) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td>
                <a href="detailadminoff.php?id=<?= $off["id"] ?>">Lihat Detail</a>
              </td>
              <td><?= $off["nama"]; ?></td>
              <td><?= $off["tipe"]; ?></td>
              <td><?= $off["deskripsi"]; ?></td>
              <td><?= $off["kategori"]; ?></td>
              <td><?= $off["harga"]; ?></td>
              <td><img src="../assets/img/offroad/<?= $off["gambar"]; ?>" alt="" style="width: 200;"></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="onroad" class="col s12">
    <div class="container">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Nama Barang</th>
            <th>Tipe</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
          </tr>
        </thead>

        <tbody>
          <?php if (empty($onroad)) : ?>
            <tr>
              <td colspan="4">
                <p style="color:red; font-style:italic;">Data Barang On Road Tidak Ditemukan</p>
              </td>
            </tr>
          <?php endif; ?>

          <?php $i = 1;
          foreach ($onroad as $on) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td>
                <a href="detailadminon.php?id=<?= $on["id"] ?>">Lihat Detail</a>
              </td>
              <td><?= $on["nama"]; ?></td>
              <td><?= $on["tipe"]; ?></td>
              <td><?= $on["deskripsi"]; ?></td>
              <td><?= $on["kategori"]; ?></td>
              <td><?= $on["harga"]; ?></td>
              <td><img src="../assets/img/onroad/<?= $on["gambar"]; ?>" alt="" style="width: 200px;"></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>