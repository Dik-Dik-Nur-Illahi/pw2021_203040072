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
// Array 1 dimensi
$mahasiswa1 = ["Dik Dik Nur Illahi", "203040072", "Teknik Informatika", "dikdiknurillahi17@gmail.com"]; 

// Array multi dimensi
$mahasiswa2 = [
    ["Dik Dik Nur Illahi", "203040072", "Teknik Informatika", "dikdiknurillahi17@gmail.com"],
    ["Uciha Naruto", "203040099", "Teknik Informatika", "Naruto@gmail.com"],
    ["Diablo", "203040666", "Teknik Informatika", "diablo@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<!-- ada dua cara menampilkan ke user yaitu looping dan manual -->
    <!-- looping -->
<ul>
    <?php foreach ($mahasiswa1 as $mhs) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul>
    <br>

    <!-- manual -->
    <?php foreach ($mahasiswa2 as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>E-Mail :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>