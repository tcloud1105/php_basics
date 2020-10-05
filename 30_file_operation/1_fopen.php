<?php 
   //fopen($filename, $mode)
   /*
     $mode:r w a
	 r: the file must exist
	 w: wipe old contents
	 a: add new contents behind old ones
	 create new files: w/w+ a/a+
   */
   $handle = @fopen("./text.txt","r") or die("error!");// @suppress the display of error report
   var_dump($handle);
   @fclose($handle);
?>