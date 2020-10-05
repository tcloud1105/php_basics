<?php
echo "<strong>class goal:</strong><br>Add www.tclouds.co.za to a picture as watermark.<hr>";
// convert an image into a canvas usinge imagecreatefromjpeg/png...
// measure its width and height of the canvas: imagesx() and imagesy()
// create ink first
// imagettftext($image,$size,$angle,$x,$y,$color,$font,$string)

$image = imagecreatefromjpeg('./image/p1.jpeg');
$width = imagesx($image);
$height = imagesy($image);
$red = imagecolorallocate($image,255,0,0);
imagettftext($image,250,0,300,300,$red,"./font/1.ttf","www.tclouds.co.za");
imagejpeg($image,"watermarked_p1.jpeg");
?>