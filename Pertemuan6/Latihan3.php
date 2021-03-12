<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 6 - 12 Maret 2021
Mempelajari Mengenai Array Associative - Tugas pertemuan 6
*/
?>


<?php 

$mobil = [
[
        "brand" => "Honda",
        "tipe" => "NSX Accura",
        "CC" => "3500cc",
        "tahun" => "2016",
        "foto" => "nsx1.jpg"
    ],
[
        "brand" => "Nissan",
        "tipe" => "Skyline GTR R34",
        "CC" => "2500cc",
        "tahun" => "2000",
        "foto" => "gtr.jpg"
    ],
[
        "brand" => "Mazda",
        "tipe" => "RX-7 Veilside",
        "CC" => "1300cc",
        "tahun" => "2000",
        "foto" => "rx7.jpg"
    ],
[
        "brand" => "Toyota",
        "tipe" => "Supra MK4",
        "CC" => "3000cc",
        "tahun" => "2000",
        "foto" => "supra1.jpg"
    ],
[
        "brand" => "Toyota",
        "tipe" => "Supra GR",
        "CC" => "3000cc",
        "tahun" => "2020",
        "foto" => "supra.jpg"
    ],
[
        "brand" => "Mitsubishi",
        "tipe" => "Lancer Evolution IX",
        "CC" => "2000cc",
        "tahun" => "2015",
        "foto" => "evo.jpg"
    ],
[
        "brand" => "Honda",
        "tipe" => "NSX",
        "CC" => "3200cc",
        "tahun" => "2002",
        "foto" => "nsx2.jpg"
    ],
[
        "brand" => "Subaru",
        "tipe" => "WRX STI",
        "CC" => "2500cc",
        "tahun" => "2020",
        "foto" => "subaru.jpg"
    ],
[
        "brand" => "Toyota",
        "tipe" => "GT 86",
        "CC" => "2000cc",
        "tahun" => "2012",
        "foto" => "gt86.jpg"
    ],
[
        "brand" => "Nissan",
        "tipe" => "Silvia S15",
        "CC" => "2000cc",
        "tahun" => "2000",
        "foto" => "s15.jpg"
    ],
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil JDM</title>
</head>
<body>
    <h1>Daftar Mobil JDM</h1>

    <?php foreach ($mobil as $mbl ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mbl["foto"]; ?>">
        </li>
        <li>Brand : <?= $mbl["brand"]; ?> </li>
        <li>Type : <?= $mbl["tipe"]; ?> </li>
        <li>Engine : <?= $mbl["CC"]; ?> </li>
        <li>Tahun : <?= $mbl["tahun"]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>