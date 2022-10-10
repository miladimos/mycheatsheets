<?php 

var_dump($argc);
var_dump($argv);

echo ("Enter your name: ");
$name = trim(fgets(STDIN));

echo $name;
