<?php
/*
To read the content of a file, you can use fread() or fgets()
*/
$handle = @fopen("./first_file.txt","r") or die("error");
$string = fread($handle);
fclose($handle);

echo $string;
?>