<?php
    date_default_timezone_set('Asia/Jayapura');
    echo 'Menghitung 13 hari ke depan <br>';
    echo date('d M Y', time()+60*60*24*13).'<br><br>';
    echo 'Menghitung 13 hari ke belakang <br>';
    echo date('d M Y', time()-60*60*24*13);