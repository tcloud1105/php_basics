<?php
// add new rows to a table
// INERT INTO `table_name` SET `field_name1`='value1',`field_name2`='value2',...
require_once('./connect.php');

$sql="INSERT INTO `car_info` SET `engine`='rotor',`transmission`='lineartonic',`door_no`=4, `age`=3";
$result = $db->query($sql);

if(result){
	echo "new row added.<br>";
}else{
	echo "failure";
}
?>