<?php
echo "<strong>class goal:</strong><br>Add logo picture to a picture as watermark.<hr>";
// convert an image into a canvas usinge imagecreatefromjpeg/png...
// measure its width and height of the canvas: imagesx() and imagesy()
// imagecopy($image, $watermark,$x1,$y1,$x2,$y2,$width,$height)
// convert the logo picture into a canvas --$watermark
// measure the width and the height of the logo $watermark
// logo picture: ./image/logo_tclouds.png

$image = imagecreatefromjpeg('./image/p1.jpeg');
$watermark = imagecreatefrompng('./image/logo_tclouds.png');
$watermark_width = imagesx($watermark);
$watermark_height = imagesy($watermark);

imagecopy($image, $watermark,0,0,0,0,$watermark_width,$watermark_height);
imagejpeg($image,"watermarked_p1.jpeg");
?>
