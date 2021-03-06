<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan dengan file php lainnya
require 'functions.php';
//Melakukan query dari database
$barang = query("SELECT * FROM data_tubes_pw");

if(isset($_GET['cari'])) {
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
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
  </head>
  <body>
<div class="container">

<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <a href="tambah.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
</div>

<form action="" method="get">
  <input type="text" name="keyword" autofocus>
  <button type="submit" name="cari">Cari!</button>
</form>


<table class="table table-striped table-hover caption-top">
<caption>Daftar Barang</caption>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Opsi</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Type</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
  <?php if(empty($barang)) : ?>
  <tr>
    <td colspan="7">
      <h1>Data Tidak Ditemukan</h1>
    </td>
  </tr>
  <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach( $barang as $brg) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="ubah.php?id=<?= $brg['id'] ?>">
              <button type="button" class="btn btn-primary">Ubah</button>
            </a>
            <a href="hapus.php?id=<?= $brg['id'] ?>" onclick="return confirm('Hapus Data?')">
              <button type="button" class="btn btn-primary"> Hapus </button>
            </a>
            </div>
          </td>
          <td><?= $brg["nama"]; ?></td>
          <td><?= $brg["type"]; ?></td>
          <td><?= $brg["deskripsi"]; ?></td>
          <td><span class="badge rounded-pill bg-primary"><?= $brg["kategori"]; ?></span></td>
          <td><?= ubahRupiah($brg["harga"]) ?></td>
          <td>
          <figure class="figure">
            <img width="128" height="128" src="../assets/img/<?= $brg["img"]; ?>" class="figure-img img-fluid rounded" alt="...">
          </figure>
          </td>
        </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif ; ?>
  </tbody>
</table>

<div class="btn-group logout" role="group" aria-label="Basic mixed styles example">
  <a href="logout.php">
    <button type="button" class="btn btn-danger">Logout</button>
  </a>
</div>

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