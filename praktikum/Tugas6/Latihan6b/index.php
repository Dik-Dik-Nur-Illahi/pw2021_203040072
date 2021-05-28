<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

//Melakukan query dari database
$barang = query("SELECT * FROM data_tubes_pw");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $barang = query("SELECT * FROM data_tubes_pw WHERE
            nama LIKE '%$keyword%' OR
            type LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ");
} else {
  $barang = query("SELECT * FROM data_tubes_pw");
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Daftar barang</title>
</head>

<body>
  <div class="container">
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="php/login.php">
        <button type="button" class="btn btn-primary">Admin</button>
      </a>
    </div>
    <table class="table caption-top">

      <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
      </form>
      <caption>Daftar Barang</caption>
      <thead>

      </thead>
      <tbody>
        <tr>
          <?php if (empty($barang)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <div class="row">
          <?php foreach ($barang as $brg) : ?>
            <div class="col-md-3">
              <div class="card css">
                <img src="assets/img/<?= $brg["img"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <span class="badge rounded-pill bg-primary"><?= $brg["kategori"]; ?></span>
                  <h5 class="card-title"><?= $brg["nama"]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $brg["type"]; ?></h6>
                  <p class="card-text"><?= ubahRupiah($brg["harga"]) ?></p>
                  <a href="php/detail.php?id=<?= $brg["id"] ?>" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </tr>
      </tbody>
    </table>

  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>