<?php
    echo '13 Juli 1999 is ';
    date_default_timezone_set('Asia/Jayapura');
    echo date('l', mktime(0,0,0,7,13,1999));