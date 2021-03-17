<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
$barang = [

  [
    "nama" => "Airoh Red Gloss TECH ",
    "foto" => "1.jpg",
    "harga" => 3750000,
    "kategori" => "Helmet",
    "deskripsi" => "Helm Twist 2.0 dengan Grapic<br>terbaru",
    "type" => "Twist 2.0"
  ],
  [
    "nama" => "RCB Ring 17",
    "foto" => "2.jpg",
    "harga" => 1750000,
    "kategori" => "Velg",
    "deskripsi" => "Velg RCB for Kawasaki Ninja 150RR<br>Tersedia tiga Varian Warna <br> yaitu gold,hitam,dan putih",
    "type" => "SP 552"
  ],
  [
    "nama" => "OHLINS CRF 150L",
    "foto" => "3.jpg",
    "harga" => 5000000,
    "kategori" => "Shockbreaker",
    "deskripsi" => "SHOCK Belakang OHLINS PnP CRF 150L",
    "type" => "HO 820"
  ],
  [
    "nama" => "Renthal",
    "foto" => "4.jpg",
    "harga" => 1950000,
    "kategori" => "Stang",
    "deskripsi" => "Stang Renthal universal",
    "type" => "Twinwall 997"
  ],
  [
    "nama" => "Norifumi",
    "foto" => "5.jpg",
    "harga" => 3250000,
    "kategori" => "Knalpot",
    "deskripsi" => "Kenalpot Norifumi for CRF<br>150l",
    "type" => "Rocket 4 Titanium"
  ],
  [
    "nama" => "Accossato",
    "foto" => "6.jpg",
    "harga" => 1150000,
    "kategori" => "Standar Samping",
    "deskripsi" => "Standar samping For<br>KTM,YZ,HUSQVARNA,CRF,KLX",
    "type" => "Stan"
  ],
  [
    "nama" => "ALPINESTAR",
    "foto" => "7.jpg",
    "harga" => 10900000,
    "kategori" => "Sepatu Trail",
    "deskripsi" => "Sepatu TECH 10 New Desain 2021",
    "type" => "TECH 10"
  ],
  [
    "nama" => "Troy Lee Designs",
    "foto" => "8.jpg",
    "harga" => 4000000,
    "kategori" => "Jersey Set",
    "deskripsi" => "Jersey Set Troy Lee Designs<br>SE ULTRA dengan NEW Desain",
    "type" => "SE ULTRA"
  ],
  [
    "nama" => "XTRIG",
    "foto" => "9.jpg",
    "harga" => 13500000,
    "kategori" => "Triple Clamp",
    "deskripsi" => "Triple Clamp XTRIG Rocs for<br>KTM dan HUSQVARNA",
    "type" => "Rocs"
  ],
  [
    "nama" => "Fox",
    "foto" => "10.jpg",
    "harga" => 1000000,
    "kategori" => "Sarung Tangan",
    "deskripsi" => "Sarung Tangan Fox Bomber<br>Dengan Desain 2021",
    "type" => "Bomber"
  ],

];

function ubahRupiah($nominal){
  return "Rp" . number_format($nominal,2,',','.');
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
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">

<table class="table table-striped table-hover caption-top">
<caption>Daftar Barang</caption>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Type</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach( $barang as $number => $brg) : ?>  
        <tr>
          <th scope="row"><?= $number+1; ?></th>
          <td><?= $brg["nama"]; ?></td>
          <td><?= $brg["type"]; ?></td>
          <td><?= $brg["deskripsi"]; ?></td>
          <td><span class="badge rounded-pill bg-primary"><?= $brg["kategori"]; ?></span></td>
          <td><?= ubahRupiah($brg["harga"]) ?></td>
          <td>
          <figure class="figure">
            <img width="128" height="128" src="img/<?= $brg["foto"]; ?>" class="figure-img img-fluid rounded" alt="...">
          </figure>
          </td>
        </tr>
      <?php endforeach; ?>
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