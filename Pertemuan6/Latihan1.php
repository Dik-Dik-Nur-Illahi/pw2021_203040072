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
// array
// Membuat Array

// Ada 2 cara membuat array cara lama dan cara baru

// cara lama
$hari = array("Senin", "Selasa", "Rabu","rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];
// Menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo "<br>";
// menampilkan 1 elemen array
echo $arr[0];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
    <?php 
    $angka =[
            [1,2,3],
            [4,5,6],
            [7,8,9]
]; // Array Multi dimensi
    // echo $angka [1][1];
    // echo $angka [2][2];
    ?>



    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
            <div class="kotak"><?= $b; ?> </div>
        <?php endforeach ; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>