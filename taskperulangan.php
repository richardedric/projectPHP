<?php

    //perulangan for

    // echo "<table border = 1 cellpadding=15 cellspacing=0>";
    // for($i = 1 ; $i <= 5 ; $i++){  
    //     echo "<tr>";      
    //     for($j = 1 ; $j <=5 ; $j++){
    //         echo "<td>$i,$j</td>";
    //     }
    //     echo "</tr>";
    // }
    // echo "</table>";

    //perulangan while

    // $i = 1;
    // echo "<table border = 1 cellpadding=15 cellspacing=0>";
    // while($i <= 5){
    //     $j =1;
    //     echo "<tr>";
    //     while($j <= 5){
    //         echo "<td>$i,$j</td>";
    //         $j++;
    //     }
    //     echo "</tr>";
    //     $i++;
    // }
    // echo "</table>";

    //perulangan do while

    $i = 1;
    echo "<table border = 1 cellpadding=15 cellspacing=0>";
    do{
        $j = 1;
        echo "<tr>";
        do{
            echo "<td>$i,$j</td>";
            $j++;
        }while($j<=5);
        echo "</tr>";
        $i++;
    }while($i <= 5);
    echo "</table>";