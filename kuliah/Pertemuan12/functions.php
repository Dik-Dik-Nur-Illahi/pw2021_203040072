<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 12 - 8 mei 2021
Mempelajari Login dan Registrasi
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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'username / password salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username/password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password

  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

?>