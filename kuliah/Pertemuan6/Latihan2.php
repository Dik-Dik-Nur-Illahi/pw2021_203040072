<?php
/*
Dik Dik Nur Illahi
203040072
https://github.com/Dik-Dik-Nur-Illahi/pw2021_203040072
Pertemuan 6 - 12 Maret 2021
Mempelajari Mengenai Array Associative
*/
?>

<?php 
$mahasiswa1 = [
["Dik Dik Nur Illahi", "203040072", "dikdiknurillahi@gamil.com", "Teknik Informatika"],
["Uciha Boruto", "203040099", "ucihaboruto@gamil.com", "Teknik Ninja"]
]; 


// Array Associative
// definisi sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
// echo $mahasiswa[1]["tugas"][1];

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

    <?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?> </li>
        <li>NRP : <?= $mhs["nrp"]; ?> </li>
        <li>Email : <?= $mhs["email"]; ?> </li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>

<?= "<br>" ?>
<?= "<br>" ?>
<?= "<br>" ?>
<?= "<br>" ?>
<?= "<br>" ?>
<?= "<br>" ?>


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

    <?php foreach ($mahasiswa1 as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?> </li>
        <li>NRP : <?= $mhs[1]; ?> </li>
        <li>Email : <?= $mhs[2]; ?> </li>
        <li>Jurusan : <?= $mhs[3]; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>