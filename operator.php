<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
<body>
    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji Sebelum Pajak = Rp. $gaji <br>";
    echo "Gaji Yang Dibawa Pulang = Rp. $thp";
    ?>
</body>
</html>