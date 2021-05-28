<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 5 - 10 Maret 2021
Mempelajari Mengenai Array
*/
?>

<?php 
// Array 
// Variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

$nama = "Dik Dik";

// membuat array
// Cara lama
$hari = array("Senin", "Selasa", "Rabu"); 
// Cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari); //Menampilkan tipe data
// echo "<br>";
// print_r($bulan); //Tanpa tipe data
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>