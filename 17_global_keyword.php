<?php

$string = "a string defined outside the function";

function func(){
	global $string;
	echo $string;
}

func();
?>