<?php

$width = 300;
$height = 300;
// $image = imagecreate($width, $height); // allow to use maximum 256 color
$image = imagecreatetruecolor($width, $height); // allow to use 2**24 color // default background color is black

// $white = imagecolorallocate($image, 255, 255, 255);
// $black = imagecolorallocate($image, 0, 0, 0);
$redAlpha = imagecolorallocatealpha($image, 255, 0,0,50);
// imagejpeg($image. $filename, $compression); // compression: 0 to 9 default : 6
// imagepng($image, $filename, $quality);  // quality: 0 to 100 default: 75
// imagegif($image);




header("Content-Type: image/jpeg");
imagejpeg($image);


// imagedestroy($image);




















/////// Image Crop

// $filename = "image.jpg";
// $new_filename = "newimage.jpg";

// list($width, $height) = getimagesize($filename);

// $left = 0; // crop left margin
// $top = 0;

// $cropWidth = 400;
// $cropHeight = 400;

// $image = imagecreatetruecolor($cropWidth, $cropHeight);
// $currentImage = imagecreatefromjpeg($filename);
// imagecopy($image, $currentImage, 0, 0, $left, $top, $width, $height);
// imagejpeg($image, $new_filename, 100);


////// Chart

// $image = imagecreate(500, 500);
// $white = imagecolorallocate($image, 255, 255, 255);
// $black = imagecolorallocate($image, 0, 0, 0);

// imageline($image, 0, 0, 0, 199, $black);
// imageline($image, 0, 99, 199, 99, $black);
// for ($x = 0; $x < 200; $x++) {
//     imagesetpixel($image, $x / 5, -sin($x / 20) * 100 + 100, $black);
// }
// header("Content-Type: image/png");
// imagepng($image);

///// Chart 2

// $values = ["20", "23", "40", "60", "55", "15", "76", "100"];
// $chart  = createChart($values);
// header("Content-Type: image/png");
// imagepng($chart);

// function createChart($values)
// {
//     $columns = count($values);
//     $width = 300;
//     $height = 200;
//     $padding = 5;
//     $column_width = $width / $columns;
//     $image = imagecreate($width, $height);
//     $white = imagecolorallocate($image, 255, 255, 255);
//     $gray = imagecolorallocate($image, 200, 200, 200);
//     $maxV = max($values);
//     for ($i = 0; $i < $columns; $i++) {
//         $column_height = ($height / 100) * (($values[$i] / $maxV) * 100);
//         $x1 = $i * $column_width;
//         $y1 = $i * $column_width;
//         $x2 = (($i + 1) * $column_width) - $padding;
//         $y2 = $height;
//         imagefilledrectangle($image, $x1, $y1, $x2, $y2, $gray);
//     }
//     return $image;
// }
