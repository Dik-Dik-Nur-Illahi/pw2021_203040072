<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
require 'functions.php';

$id = $_GET['id'];
$brg = query("SELECT * FROM data_tubes_pw WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
    <h3>Ubah Data Barang</h3>

    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $brg["id"]; ?>">
    <ul>

        <li>
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" id="nama" require value="<?= $brg['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" require value="<?= $brg['type']; ?>"><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" require value="<?= $brg['deskripsi']; ?>"><br><br>
        </li>
        <li>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" require value="<?= $brg['kategori']; ?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" require value="<?= $brg['harga']; ?>"><br><br>
        </li>
        <li>
            <label for="img">Foto</label>
            <input type="text" name="img" id="img" require value="<?= $brg['img']; ?>"><br><br>
        </li>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-danger">
                <a href="admin.php">Kembali</a>
            </button>
            <button type="submit" name="ubah" class="btn btn-primary">ubah Data</button>
        </div>
    </ul>
    
    
    </form>










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