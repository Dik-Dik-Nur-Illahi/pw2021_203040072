<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 7 - 30 April 2021
Mempelajari Mengenai Menghubungkan data base
*/
?>

<?php
function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040072');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $brand = htmlspecialchars($data['brand']);
  $tipe = htmlspecialchars($data['tipe']);
  $tahun = htmlspecialchars($data['tahun']);
  $cc = htmlspecialchars($data['cc']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
              mobil
            VALUES
            (null, '$brand', '$tipe', '$tahun', '$cc', '$gambar');
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}










?>