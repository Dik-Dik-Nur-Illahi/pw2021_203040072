<?php
session_start();
require 'functions.php';

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WRHere Official Store</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
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
            <a href="login.php" class="button is-ghost">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="../assets/slider/1.jpg">
        <div class="caption left-align">
          <h3>Dirt Bike Store</h3>
          <h5 class="light grey-text text-lighten-3">Store Terbesar Motocross Di Indonesia</h5>
        </div>
      </li>
      <li>
        <img src="../assets/slider/2.jpg">
        <div class="caption right-align">
          <h3>Factory New KTM 2021</h3>
          <h5 class="light grey-text text-lighten-3">Desain Terbaru Motor KTM 2021</h5>
        </div>
      </li>
      <li>
        <img src="../assets/slider/3.jpg">
        <div class="caption left-align">
          <h3>New BMW S 1000RR</h3>
          <h5 class="light grey-text text-lighten-3">Motor Super Sport Terbaru dari BMW</h5>
        </div>
      </li>
      <li>
        <img src="../assets/slider/4.jpg">
        <div class="caption center-align">
          <h3>Official Racing Store</h3>
          <h5 class="light grey-text text-lighten-3"> Official Racing Store Di Indonesia </h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- card -->
  <section class="grey lighten-3">
    <div class="container ">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Pilih Kategori</h3>
        <div class="col s6">
          <a href="offroad.php">
            <div class="card card1">
              <div class="card-image">
                <p class="center">Off Road</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col s6">
          <a href="onroad.php">
            <div class="card card2">
              <div class="card-image">
                <p class="center">On Road</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="../assets/slider/paralax.jpg" style="opacity: 0.5;"></div>

    <div class="container clients">
      <h3 class="center light white-text">Our Partner</h3>
      <div class="row">
        <?php for ($i = 1; $i <= 8; $i++) : ?>
          <div class="col s12 m6 l3" style="padding: 20px 0 0 20px;">
            <img src="../assets/partner/<?= $i; ?>.png" alt="">
          </div>
        <?php endfor; ?>
      </div>
    </div>
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
              <input name="email" id="email" type="email" class="validate white" required>
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
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 700,
      transition: 600,
      interval: 3000
    });

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems, options);
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);
  </script>
</body>

</html>