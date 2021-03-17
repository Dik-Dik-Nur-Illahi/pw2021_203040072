<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php
$pemain = [
    "Mohammad Salah" => "Liverpool",
    "Lionel Messi" => "Barcelona",
    "Zlatan Ibrahimovic" => "AC Milan",
    "Luca Modric" => "Real Madrid",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Cristiano Ronaldo" => "Juventus",
];
ksort($pemain)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
    <style>
    .kotak {
        border: 1px solid black;
        width: 500px;
        padding: 5px 0 20px 10px;
    }

    th {
        text-align: left;
    }
    </style>
</head>
<body>
    
    <div class="kotak">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table cellpadding="10" cellspacing="0">
        <?php foreach ($pemain as $pmn => $club ) : ?>
            <tr>
                    <th><?= "$pmn "; ?></th>
                    <td><?= ": $club "; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>

</body>
</html>