<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php
$pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3b</title>
    <style>
    .kotak {
        border: 1px solid black;
        width: 500px;
        height: 400px;
        padding: 20px 0 0 10px;
    }
    </style>
</head>
<body>
    
    <div class="kotak">
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <li><?= $pemain[0]; ?> </li>
        <li><?= $pemain[1]; ?> </li>
        <li><?= $pemain[2]; ?> </li>
        <li><?= $pemain[3]; ?> </li>
        <li><?= $pemain[4]; ?> </li>
    </ol>
    <h3>Daftar pemain bola terkenal baru</h3>
    <?php 
    $pemain[5] = "Luca Modric";
    $pemain[6] = "Sadio Mane";
    sort($pemain) 
    ?>
    <ol>
        <li><?= $pemain[0]; ?> </li>
        <li><?= $pemain[1]; ?> </li>
        <li><?= $pemain[2]; ?> </li>
        <li><?= $pemain[3]; ?> </li>
        <li><?= $pemain[4]; ?> </li>
        <li><?= $pemain[5]; ?> </li>
        <li><?= $pemain[6]; ?> </li>
    </ol> 
    </div>

</body>
</html>