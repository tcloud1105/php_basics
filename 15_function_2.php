<?php
// to empty a variable, you will assign null to it
// $variable = null;
// can you empty a variable using a function?

function set_empty(&$arg){ //passing by reference
	$arg = null;
}

$string = "not empty";
set_empty($string);
var_dump($string);

?>