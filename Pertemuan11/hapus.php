<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 11 - 7 mei 2021
Mempelajari Mengenai Hapus, Tambah, Searching
*/
?>

<?php
require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//mengambil id dari url

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href ='index.php';
          </script>";
} else {
  echo "Data Gagal Dihapus";
}

?>