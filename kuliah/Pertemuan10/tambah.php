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

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='latihan3.php';
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
  <form action="" method="POST">
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
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>


  </form>


</body>

</html>