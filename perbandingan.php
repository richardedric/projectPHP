<?php
// Perbandingan

    $angka1 = 10;
    $angka2 = 6;
    $angka3 = 6;
    $angka4 = 13;
    $angka5 = '13';

    //<
    if($angka1 < $angka2){
        echo $angka1 . ' < ' . $angka2 . ' Betul';
        echo '<br>';
    }
    else{
        echo $angka1 . ' < ' . $angka2 . ' Salah';
        echo '<br>';
    }

    // >
    if($angka1 > $angka2){
        echo $angka1 . ' > ' . $angka2 . ' Betul';
        echo '<br>';
    }
    else{
        echo $angka1 . ' > ' . $angka2 . ' Salah';
        echo '<br>';
    }

    // <=
    if($angka3 <= $angka4){
        echo $angka3 . ' <= ' . $angka4 . ' Betul';
        echo '<br>';
    }
    else{
        echo $angka3 . ' <= ' . $angka4 . ' Salah';
        echo '<br>';
    }

    // >=
    if($angka2 >= $angka3){
        echo $angka2 . ' >= ' . $angka3 . ' Betul';
        echo '<br>';
    }
    else{
        echo $angka2 . ' >= ' . $angka3 . ' Salah';
        echo '<br>';
    }

    // <=
    if($angka4 == $angka5){
        echo $angka4 . ' == ' . 'String ' . $angka5 . ' Betul';
        echo '<br>';
    }
    else{
        echo $angka4 . ' == ' . 'String ' . $angka5 . ' Salah';
        echo '<br>';
    }

