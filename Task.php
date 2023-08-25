<?php
// for($i=1;$i<=15;$i++){
//     if($i % 3 == 0){
//         echo "$i ";
//     }
// }

    // Task 2
    for($i=1 ; $i<=12 ; $i++){
        if($i % 5 == 0){
            echo "Cek, ";
        }
        elseif($i % 3 == 0){
            echo "Halo, ";
        }
        else{
            echo "$i, ";
        }
    }