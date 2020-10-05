<?php
/*
create a program to record how many times a web page
has been clicked
you need to create a file and use the file to do the recording
two situations:
1. the page has never been clicked before;
2. the page has been clicked before;
*/
// if the web has never been clicked before, the file will
// not exist
// use the file_exists() to test if the file exists
/*
1. use file_exists() to test if the file counter.txt exists or not
2. if no, meaning the web page has never been clicked before;
3. if yes, the web page has been clicked before;
4. add one to the member we read from the counter.txt
*/
if(file_exists('./counter.txt')){
	$handle=fopen("./counter.txt","r");
	$counter = fgets($handle);
	fclose($handle);
	$counter++;
	echo "you are the ".$counter ." visitor(s)";
	$handle=fopen("./counter.txt","w");
	fwrite($handle,$counter);
	fclose($handle);
}else{
	echo "welcome , you are the first visitor!<br>";
	$handle=fopen("./counter.txt","w");
	fwrite($handle,1);
	fclose($handle);
}


?>