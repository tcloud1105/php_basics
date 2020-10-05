<?php
/*
logout
*/
if(isset($_COOKIE['id'])&&isset($_COOKIE['security'])){
	setcookie('id',"",time()-1,"/");
	setcookie("security","",time()-1,"/");
	
	echo "bye.<a href='./login.php'>login</a>";
}else{
	exit("please log in first.<a href='./login.php'>log in</a>");
}
?>