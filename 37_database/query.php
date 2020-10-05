<?php
// connect to the database
/*
1. prepare and execute SQL statements
2. check SQL error
3. do the unpacking
4. display results
*/
require_once('./connect.php');
//$sql = "SELECT * FROM `car_info`";

// first two rows
//$sql = "SELECT * FROM `car_info` LIMIT 2";

// second and third row 
$sql = "SELECT * FROM `car_info` LIMIT 1,2"

// automatic only
//$sql = "SELECT * FROM `car_info` WHERE `transmission`='automatic'";

// newest comes first
$sql = "SELECT * FROM `car_info` ORDER BY `age` ASC";
$result = $db->query($sql);
//var_dump($result);
//var_dump($db->error);

if($db->error){
	exit("SQL Error");
}

echo "total row number: ".$result->num_rows;

while($array = $result->fetch_array()){
	echo "the engine of the car is ".$array['engine'].'<br/>';
	echo "this car is ".$array['age']." years old and has ".$array['door_no']."<br/>";
	echo "this car is ".$array['transmission'];
	echo "<hr/>";
}
echo "we have ".$result->num_rows." cars in record.<br/>";

$result->free();
$db->close();
?>