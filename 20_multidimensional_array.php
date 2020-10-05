<?php
/*
the foreach loop works like a "splitter"
it splits array into array elements and
it can also split array element into array key and array value 
but for multidimensional array, it only split once
you cannot echo array, otherwise, you get an error report
*/

$array = array(1,2,array(3,4,array(5,array(6,7))));
var_dump($array);
foreach($array as $k=>$v){
	// echo $v."<br/>";
	print_r($v);
	echo "<br/>";
}
echo "<hr>";
function array_split($array){
	foreach($array as $k=>$v){
		if(is_array($v)){
			array_split($v)
		}else{
			echo $k." => ".$v."<br/>";
		}
	}
array_split($array);
?>