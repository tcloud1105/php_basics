<?php
/*
logout
*/
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
	$_SESSION=array();
	setcookie(session_name(),"",time()-1,"/");
	session_destroy();
	echo "bye..<a href='./admin_login.php'>login</a>";
}else{
	exit("please login first.<a href='./admin_login.php'>login</a>")
}
?>