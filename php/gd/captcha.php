<?php 

session_start();

$chars = array();
for($i = 0 ; $i <5 ; $i++) {
    do {
        $ascii = rand(48, 90);
    } while($ascii > 57 and $ascii < 65);
    $chars[$i] = chr($ascii);
}

$code = $chars[0] . $chars[1] . $chars[2] . $chars[3] . $chars[4];
$_SESSION['captcha'] = $code;
$image = imagecreate(120, 40);
$green = imagecolorallocate($image, 100, 255, 100);
for($i=0; $i<5;$i++) {
    $angel = rand(-20,20);
    $size = rand(18, 22);
    $space = 22;
    $height = rand(25,33);
    $color = imagecolorallocate($image, rand(0,255), rand(0,100), rand(0,255));
    imagefttext($image, $size, $angel, $i * $space + 5, $height, $color, "centaur.TTF", $chars[$i]);
    imageline($image, rand(0, 119), rand(0, 39), rand(0, 119), rand(0,39), $color);
}

imagepng($image);