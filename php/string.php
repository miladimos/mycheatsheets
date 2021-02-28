<?php

$strSingleQuotation = 'Hello World'; // can use just \' or \\   - 
$strDoubleQuotation = "Hello World"; // can use all scape chars - can use variables 

$testVar = 15;
$str = "Hello World! {$testVar}";

// echo $str[1] . '<br >'; // e

// echo strlen($str) . '<br >';

$strArr = str_split($str, 2);
// echo '<pre>';
// print_r($strArr);
// echo '</pre>';

$hereDoc = <<<HEREDOC
    This is Test For 
    For long strings 
    HEREDOc Format string
    \$str = $str
HEREDOC;

$nullDoc = <<<'NULLDOC'
    This is Test For
    HEREDOc Format string
    \$str = $str
NULLDOC;



// Variable Variables

$a = 'a';
$b = 'b';
$c = 'b';

// echo $$c; // b

// String Functions

// echo strtolower($str) . '<br >';
// echo strtoupper($str) . '<br >';
// echo strrev($str) . '<br >';

// echo strpos($str, 'o') . '<br >';

$firstSpace = strpos($str, ' ');
$secondSpace = strpos($str, ' ', $firstSpace + 1);

// echo substr($str, 2, 5) . '<br >';
// echo substr($str, 2) . '<br >';
// echo substr($str, 3, -5) . '<br >';


// printf('This is str: %s', $str);
// $r = sprintf('This is str: %s', $str);

// $sf = '29 Esfand 1329';
// $res = sscanf($sf, '%d %s %d');

// list($day, $month, $year) =  sscanf($sf, '%d %s %d');

// echo '<pre>';
// print_r($res);
// echo '</pre>';

