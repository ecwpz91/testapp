<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);
$color = getenv('COLOR', true) ? getenv('COLOR', true) : 'BLUE';

if($color == 'BLUE') {
    imagefilledrectangle($im, 0, 0, 199, 199, $blue);
} else if($color  == 'GREEN') {
    imagefilledrectangle($im, 0, 0, 199, 199, $green);
} else {
    imagefilledrectangle($im, 0, 0, 199, 199, $white);
}

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
