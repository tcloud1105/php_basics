<?php
// put words onto the canvas
// imagettftext($image,$size,$angle,$x,$y,$color,$font,$string);
// download some font files first

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
imagettftext($image,50,0,200,300,$white,'./font/1.ttf',"tcloud");
header("content-type: image/jpeg");
imagejpeg($image);
?>