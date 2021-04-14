<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>


<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset ($_GET["id"])) {
    header("Location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET["id"];

//melakukan query dengan parameter id yang diambil dari url
$barang = query("SELECT * FROM data_tubes_pw WHERE id = $id")[0];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Detail</title>
  </head>
  <body>

  <div class="container">
  <div class="clearfix">
  <img src="../assets/img/<?= $barang["img"]; ?>" class="col-md-6 float-md-start " alt="...">


  <div class="card">
  <div class="card-header">
  <h3 class="card-title"><?= $barang["nama"]; ?></h3>
  <h6 class="card-subtitle mb-2 text-muted"><?= $barang["type"]; ?></h6>
  <h5 class="card-title"><?= ubahRupiah($barang["harga"]) ?></h5>
  </div>
  <div class="card-body">
  <span class="badge rounded-pill bg-primary"><?= $barang["kategori"]; ?></span>
  <br>
  <br>
    <p class="card-text"><?= $barang["deskripsi"]; ?></p>
    <a href="../index.php" class="card-link">Kembali</a>
    <a href="#" class="btn btn-primary buy">Buy Now</a>
  </div>
</div>

</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>