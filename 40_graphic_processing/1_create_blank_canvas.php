<?php
// create a blank canvas
// imagecreatetruecolor($width,$height) returns resource

$image = imagecreatetruecolor(500,300) or die("canvas cannot be created.<br/>");;
var_dump($image);
?>