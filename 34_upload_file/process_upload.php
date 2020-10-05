<?php
// process uploaded file
// first, you need to check if user has clicked the 
// submit button
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