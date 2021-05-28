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
  <style>
    #kuliah a {
      margin-top: 10px;
    }

    #praktikum a {
      margin-top: 10px;
    }

    #tubes a {
      margin-top: 10px;
    }

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    #main {
      margin-top: 60px;
    }

    @font-face {
      font-family: "Staatliches";
      src: url('assets_index/Staatliches/Staatliches-Regular.ttf');
    }

    .text {
      font-family: "Staatliches";
      font-style: italic;
    }
  </style>
</head>

<body>
  <nav class="navbar is-light is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="home.php">
        <img src="assets_index/logo.png">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a href="Tubes/php/home.php" class="navbar-item">
          Tubes
        </a>
        <a href="praktikum/Tugas6/Tugas/" class="navbar-item">
          Praktikum
        </a>
        <a href="kuliah/Pertemuan13/" class="navbar-item">
          Kuliah
        </a>
      </div>

    </div>
  </nav>
  <div class="jumbotron">
  </div>

  <div class="container" id="main">

    <div class="text">
      <h3>Dik Dik Nur Illahi</h3>
      <h5>203040072</h5>
      <h5>Informatika B</h5>
      <h5>Jadwal Praktikum Jum'at 10.00 - 11.00</h5>
    </div>

    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s4"><a class="active" href="#kuliah">Kuliah</a></li>
          <li class="tab col s4"><a href="#praktikum">Praktikum</a></li>
          <li class="tab col s4"><a href="#tubes">Tubes</a></li>
        </ul>
      </div>
      <div id="kuliah" class="col s3">
        <div class="container">
          <a href="kuliah/Pertemuan2/" class="waves-effect waves-light btn">Pertemuan 2</a>
          <a href="kuliah/Pertemuan3/" class="waves-effect waves-light btn">Pertemuan 3</a>
          <a href="kuliah/Pertemuan4/" class="waves-effect waves-light btn">Pertemuan 4</a>
          <a href="kuliah/Pertemuan5/" class="waves-effect waves-light btn">Pertemuan 5</a>
          <a href="kuliah/Pertemuan6/" class="waves-effect waves-light btn">Pertemuan 6</a>
          <a href="kuliah/Pertemuan7/" class="waves-effect waves-light btn">Pertemuan 7</a>
          <a href="kuliah/Pertemuan10/" class="waves-effect waves-light btn">Pertemuan 10</a>
          <a href="kuliah/Pertemuan11/" class="waves-effect waves-light btn">Pertemuan 11</a>
          <a href="kuliah/Pertemuan12/" class="waves-effect waves-light btn">Pertemuan 12</a>
          <a href="kuliah/Pertemuan13/" class="waves-effect waves-light btn">Pertemuan 13</a>
        </div>
      </div>
      <div id="praktikum" class="col s3">
        <div class="container">
          <a href="praktikum/Tugas1/" class="waves-effect waves-light btn">Tugas 1</a>
          <a href="praktikum/Tugas2/" class="waves-effect waves-light btn">Tugas 2</a>
          <a href="praktikum/Tugas3/" class="waves-effect waves-light btn">Tugas 3</a>
          <a href="praktikum/Tugas4/" class="waves-effect waves-light btn">Tugas 4</a>
          <a href="praktikum/Tugas5/" class="waves-effect waves-light btn">Tugas 5</a>
          <a href="praktikum/Tugas6/" class="waves-effect waves-light btn">Tugas 6</a>
        </div>
      </div>
      <div id="tubes" class="col s12">
        <div class="container">
          <a href="Tubes/php/home.php" class="waves-effect waves-light btn col s2">Tubes</a>
        </div>
      </div>
    </div>
  </div>


  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Dik Dik Nur Illahi</h5>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Final Tugas</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="Tubes/php/home.php">Tubes</a></li>
            <li><a class="grey-text text-lighten-3" href="praktikum/Tugas6/Tugas/">Praktikum</a></li>
            <li><a class="grey-text text-lighten-3" href="kuliah/Pertemuan13/">Kuliah</a></li>
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
    $(document).ready(function() {
      $('.tabs').tabs();
    });
  </script>
</body>

</html>