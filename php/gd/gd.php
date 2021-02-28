<?php

// $image = imagecreatetruecolor(300, 400);
// $red = imagecolorallocate($image, 255, 0, 0);
// imagefill($image, 0, 0, $red);

$image     = imagecreate(400, 400);
$bkg_color = imagecolorallocate($image, 255, 255, 255);

$width  = imagesx($image);
$height = imagesy($image);

$blue = imagecolorallocate($image, 0, 0, 255);
for($i = 0; $i <= 100000; $i++) {
    $x = rand(0, $width);
    $y = rand(0, $height);
    imagesetpixel($image, $x, $y, rand_color($image));
}

header('Content-Type: image/png');
imagepng($image);

imagedestroy($image);


function rand_color($image) {
    return imagecolorallocate($image, random_int(50, 255), random_int(50, 255), random_int(50, 255));
}