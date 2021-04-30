<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 7 - 30 April 2021
Mempelajari Mengenai Menghubungkan data base
*/
?>

<?php
require 'functions.php';
$mobil = query("SELECT * FROM mobil");
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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Brand</th>
      <th>Aksi</th>
    </tr>
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