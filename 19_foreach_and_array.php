<?php
//foreach loop
/*
array carries information in two places: key and value
foreach($array as $value)
foreach($array as $k=>$v)
*/
$index_array = array(1,2,3,4);
$associative_array = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);

foreach($index_array as $value){
	echo $value."<br/>";
}

foreach($associative_array as $key=>$value){
	echo $key." => ".$value."<br/>";
}
?>