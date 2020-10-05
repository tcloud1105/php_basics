<?php
function change($arg1, &$arg2){
	$arg1 = $arg1." new value!";
	$arg2 = $arg2." new value!";
}

$var1 = "old value ONE";
$var2 = "old value TWO";
change($var1,$var2);
echo $var1;
echo "<hr/>";
echo $var2;
?>