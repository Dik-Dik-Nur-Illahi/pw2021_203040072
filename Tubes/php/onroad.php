<?php
require 'functions.php';
$barang = query("SELECT * FROM onroad");

//ketika tombil cari di klik
if (isset($_POST['cari2'])) {
  $barang = cari2($_POST['keyword']);
}

if (isset($_POST['member'])) {
  if (member($_POST) > 0) {
    echo "<script>
            alert('Email Berhasil Ditambahkan');
          </script>";
  } else {
    echo "email gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WRHere Official Store</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/onroad.css">
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>

  <!-- navbar -->
  <nav class="navbar is-light is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="home.php">
        <img src="../assets/home/logo2.png" height="50" width="112">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          On Road
        </a>

        <a href="offroad.php" class="navbar-item">
          Off Road
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field has-addons">
            <div class="input-field col s6">
              <i class="material-icons prefix">search</i>
              <input id="icon_telephone" type="text" name="keyword" class="validate keyword" autocomplete="off">
              <label for="icon_telephone">Search</label>
            </div>
            <button type="submit" name="cari" class="tombol-cari">Cari</button>
          </div>
          <div class="buttons">
            <a href="login.php" class="button is-ghost">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <p>On Road</p>
  </div>

  <div class="container">

    <?php if (empty($barang)) : ?>
      <tr>
        <td colspan="4">
          <p style="color:red; font-style:italic;">Data Barang Tidak Ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>

    <div class="row">
      <?php foreach ($barang as $brg) : ?>
        <div class="col m3 s12" style="display:list-item;">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../assets/img/onroad/<?= $brg["gambar"]; ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">
                <span class="new badge light-blue accent-3" data-badge-caption="<?= $brg["kategori"]; ?>"></span> <br> <?= $brg["nama"]; ?><i class="material-icons right">more_vert</i>
              </span>
              <p><?= ubahRupiah($brg["harga"]) ?></p>
            </div>
            <div class="card-action">
              <p><a class="blue-text text-darken-2" href="detailon.php?id=<?= $brg["id"] ?>">Detail</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?= $brg["nama"]; ?> <br>
                <h6><?= $brg["tipe"]; ?></h6><i class="material-icons right">close</i>
              </span>
              <p><?= $brg["deskripsi"]; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="member">
    <h4 class="center-align">Jadilah Member WRHere</h4>
    <p class="center-align">Keuntungan menjadi Member Yaitu mendapat pemberitahuan tentang produk baru, diskon, dan produk terbatas</p>
    <div class="container">
      <div class="row">
        <form action="" method="POST" class="col s6">
          <div class="row">
            <div class="input-field col s12" style="margin-left: 250px;">
              <input name="email" id="email" type="email" class="validate white">
              <label for="email">Email Address</label>
              <span class="helper-text" data-error="wrong" data-success="right">Email Address</span>
              <button type="submit" name="member" class="waves-effect waves-light btn-large col s8 black boton" style="margin-left: 90px;">SIGN UP</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">WRHere Official Store</h5>
          <p class="grey-text text-lighten-4">Kami Melayani Pembelian Online dan Offline</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Kategoti</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="onroad.php">On Road</a></li>
            <li><a class="grey-text text-lighten-3" href="offroad.php">Off Road</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2021 Copyright
      </div>
    </div>
  </footer>



  <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
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
      fetch('../ajax/ajax_cari2.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));


    });
  </script>
</body>

</html>