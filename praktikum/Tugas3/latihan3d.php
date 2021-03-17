<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php
$pemain = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => 100,
        "gol" => 75,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => 87,
        "gol" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => 90,
        "gol" => 103,
        "assist" => 8
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => 109,
        "gol" => 56,
        "assist" => 15
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12
    ],
];

$jumlahMain = array_sum(array_column($pemain, "main"));
$jumlahGol = array_sum(array_column($pemain, "gol"));
$jumlahASS = array_sum(array_column($pemain, "assist"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
    <style>
    th {
        text-align: left;
    }

    .col {
        text-align: center;
    }
    </style>
</head>
<body>
    
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th> 
                <th>Club</th> 
                <th>Main</th> 
                <th>Gol</th> 
                <th>Assist</th> 
            </tr>
        <?php foreach ($pemain as $number => $pmn ) : ?>
            <tr>
                <td><?= $number+1; ?> </td>
                <td><?= $pmn["nama"]; ?> </td>
                <td><?= $pmn["club"]; ?> </td>
                <td><?= $pmn["main"]; ?> </td>
                <td><?= $pmn["gol"]; ?> </td>
                <td><?= $pmn["assist"]; ?> </td>
            </tr>
        <?php endforeach; ?>
        <tr>
        <th>#</th>
        <th class="col" colspan="2"> jumlah </th>
        <td> <?= $jumlahMain; ?> </td>
        <td> <?= $jumlahGol; ?> </td>
        <td> <?= $jumlahASS; ?> </td>
        </tr>
        </table>




</body>
</html>

 