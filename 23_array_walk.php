<?php
/*
array_walk()
1. manual's description of array_walk() is kind of blurry
2. each array key and array value will be used in the function
3. the function can only contain no more than three arguments
4. callable/callback: for now, just think of it as any function
EXCEPT:
array(), echo , empty(),
eval(), exit(), isset(),
list(), print() or unset();
*/
// use function as a function parameter
// function value or function
// array_walk($array,function,$variable)
$array = array('BYD'=>'Qin','byd'=>'Tang');

function car($model,$brand,$remark){
	echo "The ".$model." by ".$brand." is ".$remark."<br/>";
}

array_walk($array,"car","great");
?>