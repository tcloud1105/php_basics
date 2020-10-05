<?php
/*
some commonly used functions for dealing with array
1. count() to find out how many elements an array has
2. is_array() to check if a variable is array or not
3. in_array($value,$array) to check if $array has $value
4. array_combine() assemble two arrays into one
5. array_merge() assemble two arrays into one
6. array_shift/array_pop() get the first/last array element
7. array_walk()
*/
$array = array("engine","transmission","door","wheel","brake");
$variable = "this is not an array";

//count($array)
var_dump(count($array));

//is_array($array)
var_dump(is_array($array));
var_dump(is_array($variable));

//in_array($variable, $array[,$bool=false])
//false means only the value will be compared, datatype is ignored, true otherwise
var_dump("any string"==0);//by loose standard, you will get true
$zero = array(1,2,3,4,5,6,7,8,9,0);
var_dump(in_array("any string", $zero, true));

// array_combine() and array_merge()
$key = array("first","second","third");
$value = array("value_one","value_two","value_three");
var_dump(array_combine($key,$value))// first array is used as array key, second as array value
var_dump(array_merge($key,$value)); // two arrays are assembled into one

// array_shift() and array_pop()
var_dump(array_shift($array));
var_dump(array_pop($array));

?>