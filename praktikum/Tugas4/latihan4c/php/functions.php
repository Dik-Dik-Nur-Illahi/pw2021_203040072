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

?>