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
// echo strrpos($str, 'o') . '<br >';
// echo stripos($str, 'o') . '<br >';
// echo strripos($str, 'o') . '<br >';

trim($str);
rtrim($str);
ltrim($str);


$firstSpace = strpos($str, ' ');
$secondSpace = strpos($str, ' ', $firstSpace + 1);

// echo substr($str, 2, 5) . '<br >';
// echo substr($str, 2) . '<br >';
// echo substr($str, 3, -5) . '<br >';

str_replace("is", "was", $str);
str_replace("is", "was", $str);


substr_count($str, 'rl');
substr_count($str, 'rl', 3);
substr_count($str, 'rl', 3, 5);

substr_replace($str, 'new', 0);
substr_replace($str, 'new', 0, 10);
substr_replace($str, 'new', 0, 0);
substr_replace($str, 'new', 3, 0);


str_repeat('-', 10);

// printf('This is str: %s', $str);
// $r = sprintf('This is str: %s', $str);

// $sf = '29 Esfand 1329';
// $res = sscanf($sf, '%d %s %d');

// list($day, $month, $year) =  sscanf($sf, '%d %s %d');

// echo '<pre>';
// print_r($res);
// echo '</pre>';


$html = "<p>this is test html</p>";
htmlspecialchars($html);
/*  Second arg: ENT_COMPAT, ENT_QUOTES, ENT_NOQUOTES */

// htmlentities($html); 

strip_tags($html); // delete html tags from string
// seconda args: tags that do not removed


$url = 'http:://google.com';
urlencode($url);
urldecode($url);

rawurlencode($url);
rawurldecode($url);

// just different between urlencode and rawurlencode is space

$path = "PHP is cool";
$pathEncoded = urlencode($path);
$url = "https://google.com/?q=".$pathEncoded;


$s = 'd,d2,d3';
explode(',', $s);
explode(',', $s, 2);

$a= ["c", "c1", "c2"];
implode(',', $a);