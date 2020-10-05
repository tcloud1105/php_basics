<?php
/*
  this is a personal homepage
*/
if(isset($_COOKIE['id']) && isset($_COOKIE['security'])){
	$id = addslashes($_COOKIE['id']);
	$sql="SELECT * FROM `user` WHERE `user_id`='{$id}'";
	require_once('./connect.php');
	$result=$db->query($sql);
	
	if($db->error){
		exit("ERROR!");
	}
	if($result->num_rows===0){
		exit("illegal operation.<a href='./login.php'>log in</a>");
	}
	
	//id is real
	$array = $result->fetch_array();
	$result->free();
	$shell = md5($_COOKIE['id'].$array['password']."one_plus_one_is_three");
	$db->close();
	
	if($shell==$_COOKIE['security']){
		echo "welcome!<br/>";
		echo "{$array['username']}";
	}else{
		exit("error.<a href='./login.php'>login</a>");
	}
}else{
	exit("Please log in first.<a href='./login.php'>log in</a>");
}
setcookie("swicth","on",0,"/");
echo "welcome to the homepage";
?>
<a href='./logout.php'>log out</a>
<hr>
<form action="./process_upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
  <input type="file" name="upload" value="" />
  <input type="submit" name="submit" value="submit" />
</form>