<?php
echo "<strong>class goal:</strong><br>we will convert an image into canvas and measure its width and height.<hr>";
// convert an image into a canvas usinge imagecreatefromjpeg/png...
// measure its width and height of the canvas: imagesx() and imagesy()

$image = imagecreatefromjpeg('./image/p1.jpeg');
var_dump($image);
$width = imagesx($image);
echo "the width is ".$width.".<br/>";
$height = imagesy($image);
echo "the height is ".$height.".<br/>";
?>