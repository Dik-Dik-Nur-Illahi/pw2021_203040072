<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan1b</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?> </th>
            <?php endfor; ?>
        </tr>

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris
                    <?= $i; ?>
                </th>
                <?php for ($z = 1; $z <= 5; $z++) : ?>
                    <td>Baris <?= $i; ?>, Kolom <?= $z; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>





    </table>
</body>

</html>