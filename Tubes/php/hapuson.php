<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

//mengambil id dari url

$id = $_GET['id'];

if (hapuson($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href ='admin.php';
          </script>";
} else {
  echo "Data Gagal Dihapus";
}
