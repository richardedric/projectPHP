<?php

    // for($i = 0; $i < 5 ; $i++){
    //     for($j = 0; $j <= $i ; $j++){
    //         echo '*';
    //     }
    //     echo '<br>';
    // }

    // for($i = 10; $i > 0 ; $i--){
    //     for($j = 1; $j <= $i ; $j++){
    //         echo '#';
    //     }
    //     for($k = 10; $k >= $i ; $k--){
    //         echo "*";
    //     }
        
    //     echo "<br>";
    // }

    // for($i = 5; $i > 0 ; $i--){
    //     for($j = 1; $j <= $i ; $j++){
    //         echo '';
    //         if($j);
    //     }
    //     echo '<br>';
    // }

    // for($i = 1; $i < 7 ; $i++){
    //     for($j = 1; $j <= $i ; $j++){
    //         echo ($j);
    //     }
    //     echo "<br>";
    // }
    
    // $angka = 1;
    // for($i = 1; $i < 8 ; $i++){
    //     for($j = 1; $j <= $i ; $j++){
    //         echo " $angka";
    //         $angka++;
    //     }
    //     echo "<br>";
    // }

    // for($i = 5; $i >= 1 ; $i--){
    //     for($j = 1 ; $j <= $i ; $j++){
    //         echo " $i";
    //     }
    //     echo '<br>';
    // }

    //Ini Boros Bossku
    // $angka = 2;
    // for($i = 7; $i >= 1 ; $i--){
    //     for($j = 1 ; $j <= $i ; $j++){
    //         echo " $angka";
    //         $angka+=2;
    //     }
    //     echo '<br>';
    //     $angka = 2;
    // }

    for($i = 7; $i >= 1 ; $i--){
        for($j = 1 ; $j <= $i ; $j++){
            echo $j*2 . " ";
        }
        echo '<br>';
    }