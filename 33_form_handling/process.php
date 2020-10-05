<?php
// this is the process file
// echo the data sent to this page
if(!empty($_POST['submit'])){
	echo "the user name is ".$_POST['user_name'];
	echo "<br/>";
	echo "the password is ".$_POST['password'];
}
echo "<hr/>";
if(!empty($_GET['submit'])){
	echo "the user name is ".$_POST['user_name']. " sent by get method";
	echo "<br/>";
	echo "the password is ".$_POST['password']." sent by get method";
}
?>