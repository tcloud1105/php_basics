<?php
// connect to database
// first, instantiate MySQLi class
// order: localhost root password db_name
// use @ to block error report
// connect_error:null
/*
$db = @new MySQLi("localhost","root","","car");
if($db->connect_error){
	exit("cannot connect to the database");
}

var_dump($db->connect_error);
*/

$db = new MySQLi();
$result = @$db->connect("localhost","root","","car");
var_dump($result);

//if($db->close()){
	//echo "bye";
//}else{
	//echo "error";
//}
?>