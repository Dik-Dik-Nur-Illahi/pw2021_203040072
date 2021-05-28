<?php
session_start();


require 'functions.php';
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM onroad WHERE id = $id");
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
  <link rel="stylesheet" href="../css/offroad.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/detail.css">
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
          <div class="buttons">
            <a href="logout.php" class="button is-ghost">
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <section class="detail" style="padding-top: 60px;">
      <div class="row">

        <div class="col s6">
          <img src="../assets/img/onroad/<?= $m["gambar"]; ?>">
        </div>
        <div class="col s6">
          <h3><?= $m['nama']; ?></h3>
          <p style="margin-top: -20px;"><?= $m['tipe']; ?></p>
          <h6 style="margin-top: 0px;"><?= ubahRupiah($m["harga"]) ?></h6>
          <img src="../assets/slider/line.png" alt="">
          <h6 class="kategori">Kategori | <?= $m['kategori']; ?> </h6>
          <p><?= $m['deskripsi']; ?></p>

          <img src="../assets/slider/line.png" style="margin-top: 20px;">
          <a href="ubahon.php?id=<?= $m['id']; ?>" class="waves-effect waves-light btn-large col s5 black boton" style="margin-left: 30px; margin-top: 20px;">Ubah</a>
          <a href="hapuson.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');" class="waves-effect waves-light btn-large col s5 black boton" style="margin-left: 10px; margin-top: 20px;">Hapus</a>
        </div>

      </div>
    </section>
  </div>



  <div class="member">
    <h4 class="center-align">Jadilah Member WRHere</h4>
    <p class="center-align">Keuntungan menjadi Member Yaitu mendapat pemberitahuan tentang produk baru, diskon, dan produk terbatas</p>
    <div class="container">
      <div class="row">
        <form class="col s6">
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



  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>
</body>

</html>