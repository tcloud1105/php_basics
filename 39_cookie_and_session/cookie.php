<?php
  /*
  setcookie()
  name value expiry
  path domain
  */
  
  setcookie("one","one");
 // setcookie("two","two",time()+3);
 
 setcookie("one","",time()-1);
  var_dump($_COOKIE);
?>