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
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=d, initial-scale=1.0">
  <title>Tambah Data Mobil</title>
</head>

<body>
  <h3>Form Tambah Data Mobil</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Brand :
          <input type="text" name="brand" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Tipe :
          <input type="text" name="tipe" required>
        </label>
      </li>
      <li>
        <label>
          Tahun :
          <input type="text" name="tahun" required>
        </label>
      </li>
      <li>
        <label>
          CC :
          <input type="text" name="cc" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nofoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>


  </form>

  <script src="js/script.js"></script>

</body>

</html>