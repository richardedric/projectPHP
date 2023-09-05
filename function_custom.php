<?php
    function kelilingPersegi($p,$l){
        $keliling = ($p+$l)*2;
        return $keliling;
    }
    function luasPersegi($p,$l){
        $luas = $p*$l;
        return $luas;
    }
    function kelilingLingkaran($r){
        $keliling = 3.14*($r*2);
        return $keliling;
    }
    function luasLingkaran($r){
        $luas = 3.14*$r*$r;
        return $luas;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Function</title>
</head>
<body>
    <h1>Keliling persegi = <?php echo kelilingPersegi(5,2) ?></h1>
    <h1>Luas persegi = <?php echo luasPersegi(5,2) ?></h1>
    <h1>Keliling lingkaran = <?php echo kelilingLingkaran(13) ?></h1>
    <h1>Luas lingkaran = <?php echo luasLingkaran(13) ?></h1>
</body>
</html>