<?php
/*
this file is for: showing the results
*/
session_set_cookie_params(3);
session_start();

var_dump($_SESSION);
echo "<hr/>";
var_dump($_COOKIE);
?>