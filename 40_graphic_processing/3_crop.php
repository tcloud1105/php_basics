<?php
echo "<strong>Class Goal:</strong><br/>crop a picture.<hr/>";
// imagecopy($new_canvas,$original,$x1,$y1,$x2,$y2,$width,$height);
// $x2,$y2,and $width and $height will decide
// create $new_canvas based on $width and $height
// need to measure the original picture first
// which part of the picture will be chosen
// we want the TOP LEFT QUARTER
// $x2=0, $y2=0, $width = 1/2 original_width, $height = 1/2 original_height
// convert the original picture first
// then measure ist width and height

$original = imagecreatefromjpeg('./image/p2.jpg');
$original_width = imagesx($original);
$original_height = imagesy($original);

$width = $original_width/4;
$height = $original_height;

$new_canvas = imagecreatetruecolor($width,$height);
imagecopy($new_canvas,$original,0,0,0,0,$width,$height);
imagejpeg($new_canvas,"./cropped_image.jpeg");// to output the image
?>