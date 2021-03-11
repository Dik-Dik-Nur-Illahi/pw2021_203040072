<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
    $jawabanIsset = "Isset adalah = fubgsi isset berguna untuk memeriksa suatu objek dari nilai inputan form, isset() tersebut akan berperan mencek nilai tersebut dan jika nilai yang dilempar dari suatu form tersebut ada maka akan bernilai true walaupun nilai dari suatu form tersebut tidak terisi atau kosong.<br><br>";
    $jawabanEmpty = "Empty adalah = fungsi empty akan berperan mencek kabalikannya dari isset() atau mencari nilai lemparan dari suatu form yang tidak terisi atau kosong";
    //Sumber : https://www.virendrachandak.com/techtalk/php-isset-vs-empty-vs-is_null/

    function soal($style){
        return "<div class=\"$style\">" .$GLOBALS['jawabanIsset'] .$GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
    .style{
        border: 1px solid black;
        box-shadow: 0 0 5px rgba(0, 0, 0, 20);
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
    
</body>
</html>