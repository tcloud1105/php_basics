<?php
/*
  this is a personal homepage
*/
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
	echo "welcome.<br/>";
	echo $_SESSION['username']."<hr>";
}else{
	exit("Please login first.<a href='./admin_login.php'>login</a>");
}
setcookie("swicth","on",0,"/");
echo "welcome to the homepage";
?>
<a href='./admin_logout.php'>log out</a>
<hr>
<form action="./process_upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
  <input type="file" name="upload" value="" />
  <input type="submit" name="submit" value="submit" />
</form>