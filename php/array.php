<?php

// Arrays

$a1 = [1, 2, 3];

$b1 = array(1, 2, 3);

$c1 = [1, 'str', true, 3.14];

$days = [1=>"mon", "tue", 'wend', 'thu', 'fri', 'sat'];

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

echo sizeof($nums);

array_slice($colors, 1, 4);

list($red, $blue) = array_slice($color, 0,2);

echo array_sum($nums);

echo array_keys($nn);

echo array_values($nn);

echo isset($nn['A']);

echo array_key_exists('a', $nn);

echo array_search('pink', $colors); // pink
echo array_search('green', $colors); // false

echo array_unique($colors);


$callback = function($value, $key) {
    print("<tr><td>{$value}</td><td>{$value}</td></tr>\n");
};
$person = ['name'=>'milad', 'age'=>20];
array_walk($person, $callback);


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


// range

$numbers = range(1,9);
$letters = range('a', 'z');
$revNumbers = range(9, 1);

