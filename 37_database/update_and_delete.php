<?php
require_once("./connect.php");
// update and delete 
// update
$sql="UPDATE `car_info` SET `transmission`='MT' WHERE `transmission`='manual' LIMIT 1";
$result = $db->query($sql);

if($result===true){
	echo "update successfull";
}else{
	echo "failure";
}

// delete
$sql="DELETE FROM `car_info` WHERE `transmission`='CVT' LIMIT 1";
$result = $db->query($sql);

if($result){
	echo "delete successfull";
}else{
	echo "failure";
}

//don't forget to discoonect from the database
$db->close();
?>