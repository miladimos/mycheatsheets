<?php

// Arrays

$a1 = [1, 2, 3];

$b1 = array(1, 2, 3);

$c1 = [1, 'str', true, 3.14];


////////
$a = [
    'URL' => 'http://google.com',
    'Name' => 'Google',
    'Eamil' => 'Google@gmail.com'
];

$b = array(
    'Username' => 'UGoogle',
    'URL' => 'http://google.com',
);

$c = array_merge($a, $b);

echo '<pre>';
echo '$c = ';
print_r($c);
echo '</pre>';

/////////////


// Array Functions

$nums = array(1,45,7,2,4,7,9,13);

$nn = [
    'A' => 13, 
    'v' => 34, 
    'pi' => 3.14, 
    'name' => 'name',
];

$colors = ['red', 'blue', 'orange', 'pink', 'black', 'blue', 'red'];

echo count($nums);

echo array_sum($nums);

echo array_keys($nn);

echo array_values($nn);

echo isset($nn['A']);

echo array_key_exists('a', $nn);

echo array_search('pink', $colors); // pink
echo array_search('green', $colors); // false

echo array_unique($colors);



// Array Sort Functions
echo sort($colors);

echo sort($nums);

echo rsort($nums);

echo asort($nn);

echo arsort($nn);

echo ksort($nn);

echo krsort($nn);

$alphabet = 'abcdefghklmnopqrstu1234567890AVNDJSDFC';
$arrayAlphabet = str_split($alphabet); // string to array
echo shuffle($nums);


// Array Pointers

$arr = [1,4,5,3,7,9,13];
echo current($arr);

echo next($arr);

echo current($arr);

end($arr);
key($arr);

echo prev($arr);

echo current($arr);

reset($arr);

echo current($arr);

while(current($arr) !== false) {
    echo current($arr);
    next($arr);
}

list($key, $value) = each($arr);


