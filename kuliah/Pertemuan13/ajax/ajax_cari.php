<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 13 - 14 mei 2021
Mempelajari Live Searching & Upload Gambar
*/
?>

<?php
require '../functions.php';
$mobil = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Brand</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mobil)) : ?>
    <tr>
      <td colspan="4">
        <p style="color:red; font-style:italic;">Data Mobil JDM Tidak Ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mobil as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>"></td>
      <td><?= $m['brand']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m["id"]; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>