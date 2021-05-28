<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 4 - 1 Maret 2021
Mempelajari Mengenai Function
*/
?>


<?php
// Date
// Untuk menampilkan tanggal dengan format Tertentu
// echo date("l, d-M-Y");


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d M Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 9, 17, 2002));


// strtotime
echo date("l", strtotime("17 sep 2002"));
