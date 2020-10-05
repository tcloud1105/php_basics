<?php
 // feof()
 // $content = fread($handle,1024)
 // fread() will push back the file pointer by the length it has read
 // feof($handle) will return true when the file pointer has been pushed to the end
 // in the following example, book.txt should have been created
 var_dump('./book.txt');
 $handle = fopen('./book.txt', 'r');
 $content="";
 while(!feof($handle)){
	 $content.=fread($handle,1024);
 }
 fclose($handle);
 echo $content;
?>