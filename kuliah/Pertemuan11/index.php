<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 11 - 7 mei 2021
Mempelajari Mengenai Hapus, Tambah, Searching
*/
?>

<?php
require 'functions.php';
$mobil = query("SELECT * FROM mobil");

//ketika tombil cari di klik
if (isset($_POST['cari'])) {
  $mobil = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil JDM</title>
</head>

<body>
  <h3>Daftar Mobil JDM</h3>

  <a href="tambah.php">Tambah Daftar Mobil</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>

  <br>

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
</body>

</html>