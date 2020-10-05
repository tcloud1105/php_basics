<?php
// check if user has clicked the submit button
// check if user has fill every form
// check whether the two passwords are identical
// check email address and password using regular expression
// email format: "/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/"
// username: "/^.{0,50}$/"
// password: "/^.{6,20}$/"
// security check: addslashes()/ $db->escape_string()/$db->real_escape_string()
// check if the email has been used before
// encrypt password using md5()
// if everything is fine, insert into the database

if(!empty($_POST['submit'])){
	if(empty($_POST['username'])||empty($_POST['email'])||empty($_POST['password'])||empty($_POST['re_password'])){
		exit("please fill the form .<a href='./register.php'>return</a>");
	}
	
	if($_POST['password'] !== $_POST['re_password']){
		exit("please check the password.<a href='./register.php'>return</a>");
	}
	
	$pattern = "/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/";
	
	if(!preg_match($pattern, $_POST['email'])){
		exit("please use a valid email address.<a href='./register.php'>return</a>");
	}
	
	$pattern = "/^.{6,20}$/";
	if(!preg_match($pattern, $_POST['password'])){
		exit("passwordshould contain at least 6 characters and no more than 20.<a href='./register.php'>return</a>");
	}
	
	$username = addslashes($_POST['username']);
	$email = addslashes($_POST['email']);
	$password = addslashes($_POST['password']);
	
	require_once('./connect.php');
	$sql="SELECT * FROM `user` WHERE email = `{$email}`";
	
	$result = $db->query($sql);
	if($db->error){
		exit("SQL error.<a href='.register.php'>return</a>");
	}
	
	if($result->num_rows!==0){
		exit("Please use another email address.<a href='.register.php'>return</a>");
	}
	
	// destroy new object and insert data into the database
	$result->free();
	$password = md5($password);
	
	$sql="INSERT INTO `user` SET `username`='{$username}', `email`='{$email}', `password`='{$password}'";
	$result=$db->query($sql);
	
	if($result){
		echo "registration successfull.<br/>"
	}else{
		echo "registration failed.<br/>";
	}
	
	$db->close();
}
?>

<form method="POST" action="">
  user name:<input type="text" name="username" value=""><br/>
  email address:<input type="text" name="email" value=""><br/>
  password:<input type="password" name="password" value=""><br/>
  reenter password:<input type="password" name="re_password" value=""><br/>
  <input type="submit" name="submit" value="submit"><br/>
</form>