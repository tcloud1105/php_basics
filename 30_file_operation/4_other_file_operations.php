<?php
/*
 other commonly used function you can use to deal with files
 file_exists() to check if a file/directory exists
 is_file() to test if a file name is a regular file
 filesize() get the size of a given file
 unlink() to delete a file
 foef() check if everything is read
*/

// create a new file first
$handle = @fopen("./file.txt","w") or die("something is wrong");
if(fwrite($handle, 1234567890)){
	echo "file created successfully";
}else{
	echo "failure";
}

//file_exists()
var_dump(file_exists('./file.txt'));

//is_file()
var_dump(is_file('.file.txt'));

//filesize()
var_dump(filesize('./file.txt'));

//unlink()
var_dump(unlink('./file.txt'));


?>