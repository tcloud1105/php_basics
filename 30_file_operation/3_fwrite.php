<?php
/*
before you can use fwrite(), you need fopen() first
you can pick r+, w, w+, a, a+ mode  for fwrite()
Do not forget to fclose()
*/
//$handle_w=@fopen("./w.txt","w") or die("error");
$handle_a=@fopen("./a.txt","a") or die("error");

//$content = "content written under W mode.";
$content = "content written under A mode.";

//fwrite($handle_w,$content);
fwrite($handle_a,$content);


//fclose($handle_w);
fclose($handle_a)
?>