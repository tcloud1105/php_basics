<?php
// file type detector
// explode($delimiter,$string)
// array_pop()
// the filename extension can tell you the file type
echo "the file name extension can tell you the file type<hr>";
$name_1="tclouds.ppt";
$name_2="tclouds.txt";
$name_3="tclouds.pdf";

$array = explode(".",$name_1);
var_dump(array_pop($array));
?>