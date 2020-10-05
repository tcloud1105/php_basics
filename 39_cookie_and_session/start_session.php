<?php
/*
this file is for: starting a new session
*/
session_set_cookie_params(3);
$result = session_start();
if($result){
	echo "a new session has started";
}else{
	echo "error";
}

$_SESSION['password'] = '123456abcd';
?>