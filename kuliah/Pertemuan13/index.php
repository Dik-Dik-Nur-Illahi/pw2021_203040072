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
  <a href="logout.php">Logout</a>
  <h3>Daftar Mobil JDM</h3>

  <a href="tambah.php">Tambah Daftar Mobil</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari</button>
  </form>

  <br>

  <div class="container">

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
          <td><img src="img/<?= $m['gambar']; ?>" width="150"></td>
          <td><?= $m['brand']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m["id"]; ?>">Lihat Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <script>
    const tombolCari = document.querySelector('.tombol-cari');
    const keyword = document.querySelector('.keyword');
    const container = document.querySelector('.container');

    // hilangkan tombil cari
    tombolCari.style.display = 'none';

    keyword.addEventListener('keyup', function() {
      // ajax

      // xmlhttprequest (cara lama)
      // const xhr = new XMLHttpRequest();

      // xhr.onreadystatechange = function() {
      //   if(xhr.readyState == 4 && xhr.status == 200) {
      //     container.innerHTML = xhr.responseText;
      //   }
      // };

      // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
      // xhr.send();

      // fetch() (metode baru)
      fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));


    });
  </script>
</body>

</html>