<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
    function hitungDeterminan($nilaiA, $nilaiB, $nilaic, $nilaid){
        $hasil = ($nilaiA * $nilaid) - ($nilaiB * $nilaic);

        echo "<table style='border-left:2px solid black; border-right: 2px solid black; font-size:20px;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$nilaiA</td>
                    <td>$nilaiB</td>
                </tr>
                <tr>
                    <td>$nilaic</td>
                    <td>$nilaid</td>
                </tr>
            </table><br>";
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4); ?>
</body>
</html>