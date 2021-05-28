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
function salam($waktu = "Datang", $nama = "Admin")
{
    return " Selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Function</title>
</head>

<body>
    <h1> <?= salam("Pagi", " Dik Dik"); ?> </h1>
</body>

</html>