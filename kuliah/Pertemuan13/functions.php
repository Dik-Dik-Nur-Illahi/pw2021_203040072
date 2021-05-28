<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 13 - 14 mei 2021
Mempelajari Live Searching & Upload Gambar
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

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nofoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('Ukuran terlalu Besar!');
          </script>";
    return false;
  }

  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $brand = htmlspecialchars($data['brand']);
  $tipe = htmlspecialchars($data['tipe']);
  $tahun = htmlspecialchars($data['tahun']);
  $cc = htmlspecialchars($data['cc']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

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

  // menghapus gambar di folder img
  $mbl = query("SELECT * FROM mobil WHERE id = $id");
  if ($mbl['gambar'] != 'nofoto.jpg') {
    unlink('img/' . $mbl['gambar']);
  }

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
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nofoto.jpg') {
    $gambar = $gambar_lama;
  }

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
    echo "<>
            alert('username/password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </>";
    return false;
  }

  //jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </>";
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