<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

// ketika tombol login di tekan
if (isset($_POST['login'])) {
  $login = login($_POST);
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/login.css">
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

    </div>
  </nav>




  <div class="container">
    <div class="row">
      <div class="col s6">
        <div class="card horizontal" style="margin-top: 100px;">
          <div class="card-stacked">
            <div class="card-content">
              <?php if (isset($login['error'])) : ?>
                <p style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
              <?php endif; ?>
              <form class="col s12" action="" method="POST">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_prefix" type="text" class="validate" name="username" autocomplete="off" required>
                    <label for="icon_prefix">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_telephone" type="password" class="validate" name="password" required>
                    <label for="icon_telephone">Password</label>
                  </div>
                  <button type="submit" name="login" class="waves-effect waves-light btn col s10 black" style="margin-left: 55px;">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col s6">
        <div class="card horizontal" style="margin-top: 100px;">
          <div class="card-stacked">
            <div class="card-content">
              <h5>New Admin</h5>
              <p style="padding-top: 15px;">Buat akun disini</p>
              <a href="registrasi.php" class="waves-effect waves-light btn-large col s12 black" style="margin: 15px 0 14% 0;">Registrasi</a>
            </div>
          </div>
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
</body>

</html>