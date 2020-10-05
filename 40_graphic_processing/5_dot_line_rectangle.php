<?php
// draw a dot, line, and rectangle
// imagesetpixel($image,$x,$y,$color)
// imageline($image,$x1,$y1,$x2,$y2,$color)
// imagerectangle($image,$x1,$y1,$x2,$y2)

$image = imagecreatetruecolor(500,300) or die("canvas cannot be created.<br/>");

$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);

$background = imagefill($image,0,0,$red);
//var_dump(background);

//$result = imagejpeg($image, "./red.jpeg");
//var_dump($result);

imagesetpixel($image,250,150,$black);
imageline($image,500,0,0,300,$red);
imagerectangle($image,50,50,200,200,$white);
header("content-type: image/jpeg");
imagejpeg($image);
?>