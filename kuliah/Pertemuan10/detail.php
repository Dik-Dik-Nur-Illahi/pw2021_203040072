<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 10 - 30 April 2021
Mempelajari Mengenai Menghubungkan data base
*/
?>

<?php
require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mobil WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mobil</title>
</head>

<body>
  <h3>Detail Mobil <?= $m['brand']; ?></h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li>Brand : <?= $m['brand']; ?></li>
    <li>Tipe : <?= $m['tipe']; ?></li>
    <li>Tahun : <?= $m['tahun']; ?></li>
    <li>CC : <?= $m['cc']; ?></li>
    <li>
      <a href="">Ubah</a> | <a href="">Hapus</a>
    </li>
    <li><a href="latihan3.php">Kembali Ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>