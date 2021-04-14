<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>


<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "pw_tubes_203040072");

    return $conn;
}

// function untuk melakukan query dan memasukan kedalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    } 
    return $rows;
}


function ubahRupiah($nominal){
    return "Rp" . number_format($nominal,2,',','.');
}


// Fungsi untuk menambahkan data di dalam database
function tambah($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $type = htmlspecialchars($data['type']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO data_tubes_pw
                VALUES
                ('', '$nama', '$harga', '$kategori', '$deskripsi', '$type', '$img')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengahapus
function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM data_tubes_pw WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah
function ubah($data) {
    $conn = koneksi();
    
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $type = htmlspecialchars($data['type']);
    $img = htmlspecialchars($data['img']);

    $query = "UPDATE data_tubes_pw
                SET
                nama ='$nama', 
                harga = '$harga', 
                kategori = '$kategori', 
                deskripsi = '$deskripsi', 
                type = '$type', 
                img = '$img'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>