<?php
echo "<strong>class goal:</strong><br>Scale down a picture and make a thumbnail.<hr>";
// make a thumbnail picture 
// imagecopyresized(): faster but limited quality
// imagecopyresampled(): slower but higher quality
// 10 arguments to set
// $new_canvas,$original,0,0,0,0,$new_width,$new_height,$original_width,$original_height
// convert the original picture into a canvas first
// then, get its width and heigth
// decide the size of the thumbnail picture and create a new canvas accordingly

$original = imagecreatefrompng("./image/logo_tclouds.png");
$original_width = imagesx($original);
$original_height = imagesy($original);

$thumb_width = $original_width/2;
$thumb_height = $original_height/2;
$new_canvas = imagecreatetruecolor($thumb_width,$thumb_height);
$white = imagecolorallocate($new_canvas,255,255,255);
$background = imagefill($new_canvas,0,0,$white);


imagecopyresized($new_canvas,$original,0,0,0,0,$thumb_width,$thumb_height,$original_width,$original_height);
imagejpeg($new_canvas,"thumb_logo.png");
?>
<img src="./image/thumb_logo.png"/>