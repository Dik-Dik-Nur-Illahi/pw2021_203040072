<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$offroad = query("SELECT * FROM offroad");
$onroad = query("SELECT * FROM onroad");

//ketika tombil cari di klik
if (isset($_POST['cari2'])) {
  $onraod = cari2($_POST['keyword']);
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
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
        <a href="onroad.php" class="navbar-item">
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
            <a href="logout.php" class="button is-ghost">
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <p>Admin</p>
  </div>

  <div class="container">

    <?php if (empty($offroad)) : ?>
      <tr>
        <td colspan="4">
          <p style="color:red; font-style:italic;">Data Barang Off Road Tidak Ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php if (empty($onroad)) : ?>
      <tr>
        <td colspan="4">
          <p style="color:red; font-style:italic;">Data Barang On Road Tidak Ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>

    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6"><a class="active" href="#offroad">Off Road</a></li>
          <li class="tab col s6"><a href="#onroad">On Road</a></li>
        </ul>
      </div>
      <div id="offroad" class="col s12">
        <div class="container">
          <a href="tambahoff.php" class="waves-effect waves-light btn col s3 black boton" style="margin-top: 10px;">Tambah</a>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Nama Barang</th>
                <th>Tipe</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Foto</th>
              </tr>
            </thead>

            <tbody>
              <?php $i = 1;
              foreach ($offroad as $off) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td>
                    <a href="detailadminoff.php?id=<?= $off["id"] ?>">Lihat Detail</a>
                  </td>
                  <td><?= $off["nama"]; ?></td>
                  <td><?= $off["tipe"]; ?></td>
                  <td><?= $off["deskripsi"]; ?></td>
                  <td><?= $off["kategori"]; ?></td>
                  <td><?= $off["harga"]; ?></td>
                  <td><img src="../assets/img/offroad/<?= $off["gambar"]; ?>" alt="" style="width: 200;"></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div id="onroad" class="col s12">
        <div class="container">
          <a href="tambahon.php" class="waves-effect waves-light btn col s3 black boton" style="margin-top: 10px;">Tambah</a>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Nama Barang</th>
                <th>Tipe</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Foto</th>
              </tr>
            </thead>

            <tbody>
              <?php $i = 1;
              foreach ($onroad as $on) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td>
                    <a href="detailadminon.php?id=<?= $on["id"] ?>">Lihat Detail</a>
                  </td>
                  <td><?= $on["nama"]; ?></td>
                  <td><?= $on["tipe"]; ?></td>
                  <td><?= $on["deskripsi"]; ?></td>
                  <td><?= $on["kategori"]; ?></td>
                  <td><?= $on["harga"]; ?></td>
                  <td><img src="../assets/img/onroad/<?= $on["gambar"]; ?>" alt="" style="width: 200px;"></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
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


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
      fetch('../ajax/ajax_cari3.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));


    });

    $(document).ready(function() {
      $('.tabs').tabs();
    });
  </script>
</body>

</html>