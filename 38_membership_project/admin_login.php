<?php
/*
log in:
  check if the user has clicked the submit button
  check if user has filled all the forms
  security checks: $_POST['email'] and $_POST['password']
  Assume the email address/login name exists
  search the database
  check MySQLi class property $db->num_rows
  0 means invalid email address
  1 means valid email address
  then, check password
  ATTENTION, addslashes() and md5
  password recorded in the database has already been processed by addslashes and md5
  you cannot do the comparison directly
*/
if(!empty($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		exit('please fill all of the forms.<a href="./admin_login.php">return</a>');
	}
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	require_once('./connect.php');
	$sql="SELECT * FROM `user` WHERE `email`='{$email}'";
	
	$result = $db->query($sql);
	
	if($db->error){
		exit("SQL ERROR.<a href='./admin_login.php'>return</a>");
	}
	
	if($result->num_rows==0){
		exit("account does not exist.<a href='./admin_login.php'>return</a>");
	}
	
	// compare the password
	$password = md5($password);
	$array = $result->fetch_array();
	$result->free();
	
	if($password === $array['password']){
		session_start();
		$_SESSION['username']=$array['username'];
		$_SESSION['password']=$array['password'];
		echo "<script>window.location.href='./admin_index.php'</script>";
	}else{
		exit("wrong password.<br>");
	}
	
}

?>

<form action="" method="POST">
   email address:<input name="email" type="text" value=""/>
   password:<input name="password" type="password" value=""/>
   <input type="submit" name="submit" value="submit" />
</form>