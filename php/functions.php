<?php 
declare(strict_types = 1);

$a = 10;

function add(int $arg) :  int {
    // global $a;
    $a = $GLOBALS['a'];

    return $a + $arg;
}


function sum($name, ...$nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo sum('name',1,4,1,6,8,9,2,14);


$mul = function ($a, $b) {
    return $a + $b;
};

