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
// Koneksi ke data base dan pilih data base
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040072');


// query isi tabel  mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mobil");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result) // array numerik
// $row = mysqli_fetch_assoc($result) // array associative
// $row = mysqli_fetch_array($result) // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tambah ke variabel mahasiswa
$mobil = $rows;
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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Brand</th>
      <th>Tipe</th>
      <th>Tahun</th>
      <th>CC</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mobil as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>"></td>
        <td><?= $m['brand']; ?></td>
        <td><?= $m['tipe']; ?></td>
        <td><?= $m['tahun']; ?></td>
        <td><?= $m['cc']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>


  </table>


</body>

</html>