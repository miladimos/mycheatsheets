<?php

// $timestamp -> jan 01 1970
// January 19, 2038 ->  32-bit overflow

// date($format, $timestamp);

// echo time(); 
// echo date("Y/m/d"); -> 2020/12/05

// echo date("y/m/d"); -> 20/12/05

// echo date("Y M D"); -> 2020 Dec Sat
// echo date("F"); -> December
// echo date("l"); -> Saturday
// echo date("N"); -> Current Day Number : 1(mon) - 7(sun)
// echo date("w"); -> Current Day Number : 0(sun) - 6(sat)
// echo date("W"); -> Current Week Number 
// echo date("t"); -> Current Month Number 
// echo date("z"); -> 339 : day of year
// echo date("L"); -> is leap year



// Time
// echo date("g:i:s a"); -> 5:45:51 pm
// date_default_timezone_set("Asia/Tehran");
// echo date("g:i:s a"); -> 9:15:51 pm
// echo date("h:i:s a"); -> 09:15:51 pm
// echo date("g:i:s A"); -> 9:15:51 PM
// echo date("G:i:s A"); -> 17:48:29 PM

// echo date('e'); -> Current Time Zone
// echo date('P'); -> +00:00


////////////// Jalali Date/Time


$timezone_identifiers = DateTimeZone::listIdentifiers();

foreach($timezone_identifiers as $key => $list){

echo $list . "<br/>";

}

date_default_timezone_set ( string $timezone_identifier );
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");

date_default_timezone_set("Asia/Calcutta");
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
