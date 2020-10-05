<?php
//$dir is: URL + directory name ./nation

function super_delete($dir){
	$handle = @opendir($dir) or die("cannot open $dir");
	readdir($handle); // ./
	readdir($handle); // ../
	while(false !== ($file=$readdir())){// while(): filter empty directories
		$file = $dir."/".$file; //readdir() only returns name, no URL
		if(is_dir($file)){//$file is a child directory
			super_delete($file)
		}else{// $file is a file
			if(@unlink($file)){
				echo "file: $file has been successfully deleted<br>";
			}else{
				echo "file: $file cannot be deleted<br>";
			}
		}
	}// while() is used to remove all files
	
	//empty directory
	if(@rmdir($dir)){
		echo "directory: $dir has been successfully deleted.<br/>";
	}else{
		echo "directory: $dir cannot be deleted.<br/>";
	}
	closedir($handle);
}

super_delete('./nation');
?>