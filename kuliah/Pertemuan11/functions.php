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
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mobil WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $brand = htmlspecialchars($data['brand']);
  $tipe = htmlspecialchars($data['tipe']);
  $tahun = htmlspecialchars($data['tahun']);
  $cc = htmlspecialchars($data['cc']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = " UPDATE mobil SET
            brand = '$brand', 
            tipe = '$tipe', 
            tahun = '$tahun', 
            cc = '$cc', 
            gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mobil 
              WHERE 
              brand LIKE '%$keyword%' OR
              tipe LIKE '%$keyword%' OR
              tahun LIKE '%$keyword%' OR
              cc LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}




?>