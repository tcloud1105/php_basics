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
		exit('please fill all of the forms.<a href="./login.php">return</a>');
	}
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	require_once('./connect.php');
	$sql="SELECT * FROM `user` WHERE `email`='{$email}'";
	
	$result = $db->query($sql);
	
	if($db->error){
		exit("SQL ERROR.<a href='./login.php'>return</a>");
	}
	
	if($result->num_rows==0){
		exit("account does not exist.<a href='./login.php'>return</a>");
	}
	
	// compare the password
	$password = md5($password);
	$array = $result->fetch_array();
	$result->free();
	
	if($password === $array['password']){
		//echo "welcome";
		
		setcookie("id",$array['user_id'],0,"/");
		$security = md5($array['user_id'].$array['password']."one_plus_one_is_three");
		setcookie("security",$security,0,"/");
		echo "<script>window.location.href='./index.php'</script>";
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