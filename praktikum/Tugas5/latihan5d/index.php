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
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">

<table class="table caption-top">
<caption>Daftar Barang</caption>
  <thead>

  </thead>
  <tbody>
  <tr>
    <?php foreach( $barang as $brg) : ?>
    <td>
      <div class="card css" style="width: 18rem;">
        <img src="assets/img/<?= $brg["img"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <span class="badge rounded-pill bg-primary"><?= $brg["kategori"]; ?></span>
          <h5 class="card-title"><?= $brg["nama"]; ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $brg["type"]; ?></h6>
          <p class="card-text"><?= ubahRupiah($brg["harga"]) ?></p>
          <a href="php/detail.php?id=<?= $brg["id"] ?>" class="btn btn-primary">Detail</a>
        </div>
      </div>
    </td>
    <?php endforeach; ?>
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