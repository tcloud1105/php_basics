<?php
  $result = session_start();
  
  if($result){
	 echo "session started successfully.<br/>";
  }else{
	 echo "error!";
  }
  
  var_dump($_COOKIE);
  var_dump(session_id());
  var_dump(session_name());
  
  $_SESSION['password']='123abc';
  var_dump($_SESSION);
?>