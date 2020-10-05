<?php
// prepared statement
// $stmt = $db->stmt_init()
// The MYSQLi_STMT class will take over
// use ? as placeholder for field values in SQL statement
// use $stmt->prepare($sql) to replace the query() method
// use $stmt->bind_param() to replace the placeholders with actual field values
// bind_param(), "ssss", "Toyota","camry","petrol","manual" specify data
// also, bind_param() must use variable to represent field values, still
// $stmt->bind_param("ssss",$brand,$model,$engine,$gearbox)
// use $stmt->execute() to execute everything
// $stmt->affected_rows tells how many rows has been affected
// $stmt->insert_id tells you the ID of the row you just inserted
// use $stmt->close() to destroy the object

require_once('./connect.php');
$stmt = $db->stmt_init();
$sql ="INSERT INTO `car_info` SET `brand`=?,`model`=?,`engine`=?,`gearbox`=?";
$stmt->prepare($sql);

if($stmt->error){
	exit('ERROR');
}
$stmt->bind_param("ssss",$brand,$model,$engine,$gearbox);
$brand="Toyota";
$model="camry";
$engine="petrol";
$gearbox="manual";

$stmt->execute();
if($stmt->error){
	exit('ERROR');
}

$brand="Honda";
$model="NSX";
$engine="petrol";
$gearbox="automatic";

$stmt->execute();

echo "The ID is ".$stmt->insert_id;
$stmt->close();
$db->close();

?>