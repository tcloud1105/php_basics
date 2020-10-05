<?php
// process uploaded file
// first, you need to check if user has clicked the 
// submit button
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

if(empty($_COOKIE['switch'])){
	exit("upload request denied");
}

if($_COOKIE['switch']=='on'){
	setcookie('swicth','',time()-1,"/");
}else{
	exit("illegal operation");
}
if(!empty($_POST['submit'])){
	if($_FILES['upload']['error']==0){
		// var_dump($_FILES);
		switch($_FILES['upload']['type']){
			case "image/jpeg":
			  echo "file type accepted.<br>";
			  break;
			case "image/png":
			  echo "file type accepted.<br>";
			  break;
			default:
			  // illegal type, shut down the program
			  exit("illegal file type");
		}
		// new file name
		// get file name extension
		$array = explode(".", $_FILES['upload']['name']);
		$file_name_extension = array_pop($array);
		$new_file_name = time().rand(1000,9999).'.'.$file_name_extension;
		
		// new directories
		//./2015/06/23
		$new_file_destination = './'.date('Y').'./'.date('m').'./'.date('d');
		if(!is_dir($new_file_destination)){
			mkdir($new_file_destination,0777, true);
			$destination = $new_file_destination.'/'.$new_file_destination;
		}else{
			$destination = $new_file_destination.'/'.$new_file_destination;
		}
		//$destination = "./destination".$_FILES['upload']['name']
		if(move_uploaded_file($_FILES['upload']['tmp_name'], $destination)){
			require_once('./connect.php');
			$sql="INSERT INTO `picture` SET `url`='{$destination}',`user_id`='{$_COOKIE['id']}'";
			$db-query($sql);
			
			if($db->error){
				exit("SQL ERROR!");
			}
			
			$db->close();
			echo "file uploaded";
		}else{
			echo "failure";
		}
	}else{
		if($_FILES['upload']['error']==2 || $_FILES['upload']['error']==3){
			echo "file too big, please select a small one.<br>";
		}else{
			echo "this file is partially uploaded.<br/>";
		}
	}
}

?>