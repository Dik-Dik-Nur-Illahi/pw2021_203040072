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

?>