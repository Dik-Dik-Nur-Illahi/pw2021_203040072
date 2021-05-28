<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambahoff'])) {
  if (tambahoff($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='admin.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
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
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/registrasi.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
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



  <section>
    <div class="container">
      <h6>Tambah Data Barang</h6>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s6">
            <input id="nama" type="text" name="nama" class="validate" required>
            <label for="nama">Nama Barang</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="harga" name="harga" type="text" class="validate" required>
            <label for="harga">Harga</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="kategori" name="kategori" type="text" class="validate" required>
            <label for="kategori">Kategori</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="deskripsi" name="deskripsi" type="text" class="validate" required>
            <label for="deskripsi">Deskripsi</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="tipe" name="tipe" type="text" class="validate" required>
            <label for="tipe">Tipe</label>
          </div>
        </div>
        <img src="../assets/img/offroad/noimg.png" width="300" style="display: block;" class="img-preview">
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Gambar</span>
              <input type="file" name="gambar" class="gambar" onchange="previewImage()">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate col s6" type="text">
            </div>
          </div>
          <button type="submit" name="tambahoff" class="waves-effect waves-light btn col s7 black">Tambah</button>
        </div>
      </form>
    </div>
    </div>
  </section>


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

  <script src="../js/script.js"></script>
  <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
</body>

</html>