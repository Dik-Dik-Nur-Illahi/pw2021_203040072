<?php
// Variabel Scope / lingkup Variabel
// $x = 10; //variabel local untuk halaman
// // echo $x;




// function tampilX() {
//     // $x = 20; // variabel local untuk function
//     global $x; // variabel global
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;


// SUPERGLOBALS
// Variabel global milik PHP
// Merupakan Array Associative
// var_dump($_GET)
// var_dump($_POST)
// var_dump($_SERVER)

// echo $_SERVER["SERVER_NAME"]


// $_GET
// $_GET["nama"] = "Dik Dik Nur Illahi";
// $_GET["nrp"] = "203040072";
// cara mengirimkan data menggunakan request get dan akan ditangkap oleh 
// variabel superglobal $_GET
// cara mengisi array superglovals $_GET bisa menggunakan url dengan cara 
// di akhir url kita tambahkan ?key=nilai contoh ?nama=Dik Dik Nur Illahi
// setelah menambahkan dengan cara di atas kita dapat menambah kan lagi 
// dengan cara menambahkan tanda &

$mahasiswa = [
    [
    "nama" => "Dik Dik Nur Illahi",
    "nrp" => "203040072",
    "email" => "dikdiknurillahi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "1.jpg"
],
    [
    "nama" => "Uciha Boruto",
    "nrp" => "203040069",
    "email" => "ucihaboruto@gmail.com",
    "jurusan" => "Teknik Ninja",
    "gambar" => "boruto.jpg"
]
];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>