<?php
/*
this file is for: deleting the session
*/
session_start();
$_SESSION= array();// unset($_SESSION['password'])
setcookie(session_name(),'',time()-1,"/");
session_destroy();
?>