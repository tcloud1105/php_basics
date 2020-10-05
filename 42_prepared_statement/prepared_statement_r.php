<?php
// prepared statement for retrieving data
// $stmt->store_result() move all retrieved data from database server to the PHP script
// $stmt->bind_result($brand, $model, $engine, $gearbox)
// the variable order is vital, must ne the same as the SQL Statement
// while($stmt->fetch()){...}

require_once('./connect.php');
$stmt = $db->stmt_init();
$sql="SELECT `brand`,`model`,`engine`,`gearbox` FROM `car` WHERE `brand`=?";
$stmt->prepare($sql);

// check SQL error
if($stmt->error){
	exit('ERROR');
}
$stmt->bind_param("s",$brand);
$brand="TOYOTA";

// check SQL error
$stmt->execute();
if($stmt->error){
	exit('ERROR');
}
$stmt->store_result();
$stmt->bind_result($brand, $model, $engine, $gearbox);

echo "THE Total of rows is ".$stmt->num_rows."<br/>";
while($stmt->fetch()){
	echo "The brand is ".$brand." and the model is ".$model."<br/>";
	echo "The engine is ".$engine." and the gearbox is ".$gearbox."<hr/>";
}

$stmt->close();
$db->close();
?>