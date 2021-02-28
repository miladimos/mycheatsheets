<?php 
declare(strict_types = 1);

$a = 10;

function add(int $arg) :  int {
    // global $a;
    $a = $GLOBALS['a'];

    return $a + $arg;
}


function sum($name = 'default', ...$nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo sum('name',1,4,1,6,8,9,2,14);


// argument by refrences
function doubler(&$value){
    $value *= 2;
}

$mul = function ($a, $b) {
    return $a + $b;
};

// global varable in function
// $counter = 1;
// updateCounter();
// function updateCounter(){
//     global $counter;
//     $counter++;
// }
echo $counter;

// static variables
$counter = 10;
updateCounter();
updateCounter();
function updateCounter(){
    static $counter = 0;
    $counter++;
    echo $counter; //1 ... 2
}
echo $counter; // 10




// php builtin functions for information of functions
func_get_args();
func_num_args();
$value = func_get_arg($argNumber);

function mean(){
    $sum = 0;
    $size = func_num_args();
    for($i=0; $i < $size; $i++) {
        $sum += func_get_arg($i);
    }
    $average = $sum / $size;
    return $average;
}


class strongPassword
 {
 
 public function randomText($length, $patternType = 4) {
 
 if(!is_numeric($length) || $length < 1)
 $length = 20;
 
     $small_alphabet = "abcdefghijklmnopqrstuwxyz";
     $big_alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
     $number = "0123456789";
     $characters = "!@#$%^&*()[]{};:'?`~+-_,<>";
 
     if(!is_numeric($patternType) || $patternType < 0 || $patternType > 4)
 $patternType = 4;
 
 $pettern = $small_alphabet . $big_alphabet . $number . $characters;
 if($patternType == 1)
 $pettern = $small_alphabet;
 elseif($patternType == 2)
 $pattern = $small_alphabet . $big_alphabet;
 elseif($patternType == 3)
 $pattern = $small_alphabet . $big_alphabet . $number;
 elseif($patternType == 4)
 $pattern = $small_alphabet . $big_alphabet . $number . $characters;
 else
 $pattern = $small_alphabet . $big_alphabet . $number . $characters;
 
     for ($i = 0; $i < $length; $i++) {
         $n = rand(0, strlen($pettern) - 1);
         $result[$i] = $pettern[$n];
     }
 
     return substr(implode('', $result), 0, $length);
 }
 
 }
 
 $strongPassword = new strongPassword();
 echo "<strong>&dollar;strongPassword->randomText(5) : </strong><br />" . $strongPassword->randomText(5) . "<br /><br />";
 echo "<strong>&dollar;strongPassword->randomText(20, 1) : </strong><br />" . $strongPassword->randomText(20, 1) . "<br /><br />";
 echo "<strong>&dollar;strongPassword->randomText(30, 2) : </strong><br />" . $strongPassword->randomText(30, 2) . "<br /><br />";
 echo "<strong>&dollar;strongPassword->randomText(40, 3) : </strong><br />" . $strongPassword->randomText(40, 3) . "<br /><br />";
 echo "<strong>&dollar;strongPassword->randomText(50, 4) : </strong><br />" . $strongPassword->randomText(50, 4) . "<br /><br />";
