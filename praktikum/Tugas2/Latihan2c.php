<?php
// Dik Dik Nur Illahi
// 203040072
// Jumat 10.00 - 11.00
?>

<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bg\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
    .bg{
        background-color: salmon;
        display: inline-block;
        text-align: center;
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 100%;
        border: 2px solid black;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <?php tumpukanBola(5); ?>
</body>
</html>