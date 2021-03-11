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
    <title>Tugas1</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 2px solid black;
        }
        .biru{
            background-color: lightblue;
        }
        .salmon{
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($i=1; $i<=6; $i++) : 
        for ($y=1; $y<=6; $y++) : 

            if($i % 2 == 0) :
                if($y % 2 == 0) : ?>
                    <div class="box biru"></div>
                <?php else: ?>
                    <div class="box salmon"></div>
                <?php endif; ?>

            <?php else: 
                if($y % 2 == 0) : ?>
                    <div class="box salmon"></div>
                <?php else: ?>
                    <div class="box biru"></div>
                <?php endif; ?>    
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>