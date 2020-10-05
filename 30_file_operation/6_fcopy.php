<?php
/*
copy() --> copy a file
rename() --> rename a file or move a file
*/
$handle = fopen("./file.txt","w");
if(fwrite($handle,"this is a file")){
	echo "file created.<br>";
}else{
	echo "error";
}

fclose($handle);
// copy the file.txt copied_file.txt
var_dump(copy("./file.txt","./copied_file.txt"));

// copy the file.txt but store it in the destination directory
var_dump(copy("./file.txt","./destination/copied_file.txt"));

// rename the file.txt to renamed_file.txt
var_dump(rename('./file.txt','./renamed_file.txt'));

// move file.txt to destination directory
var_dump(rename('./renamed_file.txt','./destination/renamed_moved_file.txt'));
?>