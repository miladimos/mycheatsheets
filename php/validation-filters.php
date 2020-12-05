<?php

// $str = "<h1>This is String</h1>";
// echo $str;

// $nStr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $nStr;


/*

    FILTER_SANITIZE_STRING
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_URL


    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_URL

*/

$var = 100;
$filterInt = filter_var($var, FILTER_VALIDATE_INT, array(
    'option' => array(
        'min_range' => 10,
        'max_range' => 100,
    )
));