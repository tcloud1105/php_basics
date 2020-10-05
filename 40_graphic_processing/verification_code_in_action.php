<?php
/*
try the verification code
strcasecmp($string1,$string2)
*/
session_start();
if(!$_empty($_POST['submit'])){
	$result = strcasecmp($_SESSION['vcode'],$_POST['vcode']);
	if($result===0){
		echo "correct";
	}else{
		echo "error.";
	}
}

?>
<p>please type in the verification code:<br/></p>
<img src="./verification_code.php"/><!--display the verification code-->
<form method="POST" action="">
<span>verification code:</span><input name="vcode" type="text" value=""/>
<input type="submit" name="submit" value="submit" />
</form>