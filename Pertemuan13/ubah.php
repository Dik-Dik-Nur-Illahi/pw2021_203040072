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

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mobil berdasarkan id
$m = query("SELECT * FROM mobil WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "data gagal diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=d, initial-scale=1.0">
  <title>ubah Data Mobil</title>
</head>

<body>
  <h3>Form ubah Data Mobil</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Brand :
          <input type="text" name="brand" autofocus required value="<?= $m['brand']; ?>">
        </label>
      </li>
      <li>
        <label>
          Tipe :
          <input type="text" name="tipe" required value="<?= $m['tipe']; ?>">
        </label>
      </li>
      <li>
        <label>
          Tahun :
          <input type="text" name="tahun" required value="<?= $m['tahun']; ?>">
        </label>
      </li>
      <li>
        <label>
          CC :
          <input type="text" name="cc" required value="<?= $m['cc']; ?>">
        </label>
      </li>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="ubah">ubah Data!</button>
      </li>
    </ul>


  </form>

  <script src="js/script.js"></script>
</body>

</html>