<?php
// create ink
// imagecolorallocate($image,red,green,blue)

$image = imagecreatetruecolor(500,300) or die("canvas cannot be created.<br/>");

$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);

var_dump($red);
var_dump($green);
var_dump($blue);
var_dump($white);
var_dump($black);
?>