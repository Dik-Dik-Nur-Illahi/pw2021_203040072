<?php
function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tubes_pw203040072');
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

function uploadoff()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    return 'noimg.png';
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
  move_uploaded_file($tmp_file, '../assets/img/offroad/' . $nama_file_baru);

  return $nama_file_baru;
}

function uploadon()
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
    return 'noimg.png';
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
  move_uploaded_file($tmp_file, '../assets/img/onroad/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambahoff($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tipe = htmlspecialchars($data['tipe']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = uploadoff();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
              offroad
            VALUES
            (null, '$nama', '$harga', '$kategori', '$deskripsi', '$tipe', '$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function tambahon($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tipe = htmlspecialchars($data['tipe']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = uploadon();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
              onroad
            VALUES
            (null, '$nama', '$harga', '$kategori', '$deskripsi', '$tipe', '$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function member($data)
{
  $conn = koneksi();

  $email = htmlspecialchars($data['email']);

  if (query("SELECT * FROM member WHERE email = '$email'")) {
    echo "<script>
            alert('email sudah terdaftar!');
          </script>";
    return false;
  }

  $query = "INSERT INTO 
              member
            VALUES
            (null, '$email');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusoff($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $offroad = query("SELECT * FROM offroad WHERE id = $id");
  if ($offroad['gambar'] != 'noimg.png') {
    unlink('../assets/img/offroad/' . $offroad['gambar']);
  }

  mysqli_query($conn, "DELETE FROM offroad WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapuson($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $onroad = query("SELECT * FROM onroad WHERE id = $id");
  if ($onroad['gambar'] != 'noimg.png') {
    unlink('../assets/img/onroad/' . $onroad['gambar']);
  }

  mysqli_query($conn, "DELETE FROM onroad WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahoff($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tipe = htmlspecialchars($data['tipe']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = uploadoff();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'noimg.png') {
    $gambar = $gambar_lama;
  }

  $query = " UPDATE offroad SET
            nama = '$nama', 
            harga = '$harga', 
            kategori = '$kategori', 
            deskripsi = '$deskripsi', 
            tipe = '$tipe', 
            gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahon($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $tipe = htmlspecialchars($data['tipe']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = uploadon();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'noimg.png') {
    $gambar = $gambar_lama;
  }

  $query = " UPDATE onroad SET
            nama = '$nama', 
            harga = '$harga', 
            kategori = '$kategori', 
            deskripsi = '$deskripsi', 
            tipe = '$tipe', 
            gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM offroad 
              WHERE 
              nama LIKE '%$keyword%' OR
              deskripsi LIKE '%$keyword%' OR
              tipe LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              kategori LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function cari2($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM onroad 
              WHERE 
              nama LIKE '%$keyword%' OR
              deskripsi LIKE '%$keyword%' OR
              tipe LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              kategori LIKE '%$keyword%'
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

  if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
  }

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: admin.php");
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

function ubahRupiah($nominal)
{
  return "Rp" . number_format($nominal, 2, ',', '.');
}
