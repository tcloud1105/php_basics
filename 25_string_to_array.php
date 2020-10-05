<?php
// String array mutual conversion
/*
implode() array into string
explode() string into array
implode($glue,$array_pieces)
explode($delimiter,$string[,$limit])
str_split($string[,$length=1])
*/
//$array = array(1,2,3,4,5,6,7,8,9,0);
//$glue="=>";
//var_dump(implode(Sglue,$array));


//$string="this is a string, and we want to make it an array";
//$delimiter=" ";
//$limit=4;
//var_dump(explode($delimiter,$string,$limit));

$string="abcdefghijklmnopqrstuvwxyz";
$numberofchunks=4;// by default, $numberofchunk=1
var_dump(str_split($string,$numberofchunks));
?>