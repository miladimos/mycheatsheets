<?php 
declare(strict_types = 1);

$a = 10;

function add(int $arg) :  int {
    // global $a;
    $a = $GLOBALS['a'];

    return $a + $arg;
}
