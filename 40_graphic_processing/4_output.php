<?php
// output image
// for storage: imagejpeg($image,"new_url + file name")
// for display: header("content-type: image/jpeg"); imagejpeg($image);

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

header("content-type: image/jpeg");
imagejpeg($image);
?>