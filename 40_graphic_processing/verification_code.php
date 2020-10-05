<?php
// The verification code -- CAPTCHA
/*
 requirements
 1. 4 random characters : A-Z a-z 0-9
 2. white background with black border
 3. 100 noise pixel (colorful)
 4. random tilting angle for each character
 5. random font for each character 
 process:
 1. create canvas: imagecreatetruecolor($width,$height)
 2. create ink: imagecolorallocate($image,$red,$green,$blue)
 3. create the background
 4. create content for the verification code: mt_rand($min,$max);
 5. put the words: imagettftext($image,$size,$angle,$x,$y,$color,$font,$string);
*/
session_start();
$image = imagecreatetruecolor(100,40) or die("canvas cannot be created.<br/>");

$red = imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);

$background = imagefill($image,0,0,$white);
imagerectangle($image,1,1,99,39,$black);

$color = array($red,$green,$blue);
for($i=1;$i<=100;$i++){
	imagesetpixel($image,mt_rand(2,98),mt_rand(2,38),$color[mt_rand(0,2)]);
}

$source="abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$first=$source[mt_rand(0,61)];
$second=$source[mt_rand(0,61)];
$third=$source[mt_rand(0,61)];
$fourth=$source[mt_rand(0,61)];
//$verification_code = $first.$second.$third.$fourth;
$_SESSION['vcode'] = $first.$second.$third.$fourth;

imagettftext($image,20,mt_rand(-20,20),10,30,$black,'./font/1.ttf',$first);
imagettftext($image,20,mt_rand(-20,20),30,30,$black,'./font/1.ttf',$second);
imagettftext($image,20,mt_rand(-20,20),50,30,$black,'./font/1.ttf',$third);
imagettftext($image,20,mt_rand(-20,20),70,30,$black,'./font/1.ttf',$fourth);

header("content-type: image/jpeg");
imagepng($image);

?>