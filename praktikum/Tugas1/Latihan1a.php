<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1a</title>

    <style>
        .border {
            border-style: groove;
            width: 300px;
            padding: 8px 0 8px 5px;
        }
    </style>
</head>

<body>
    <table class="border">
        <tr>
            <td>
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    for ($y = 1; $y <= 3; $y++) {
                        echo "Ini Pengulangan ke ($i,$y) <br>";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>