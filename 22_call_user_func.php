<?php
/*
call_user_func(): the robot
*/
function car($brand,$model){
	echo "this is a ".$model." ".$model."<br/>";
	echo "it's a great car";
}

echo "the traditional way: we drive the car:<br>";
car("BYD","Tang");
echo "<hr/>";
echo "the new way: we drive the robot and the robot drive the car:<br/>";
call_user_func("car","BYD","Tang")
?>