<?php
// create fle folder/ directories
var_dump(file_exists("new_folder"));

// mkdir("directory_name")
// create one folder at a time
// this way, your code is easier to read
var_dump(mkdir('./new_directory'));
mkdir('./nation');
mkdir('./nation/city');

// rename("old name","new name")
var_dump(rename("file_folder","new_name"));

//rmdir("directory name")
var_dump(rmdir("./name_1"));

//is_dir("directory name")
var_dump(is_dir("./nation"));
?>