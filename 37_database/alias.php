<?php
// using ALIAS `fieldname` AS `aliasname`
//statistical functions
require_once('./connect.php');
$sql="SELECT `brand`,avg(`price`) AS `ap``FROM `car_info` GROUP BY `brand` ORDER BY `ap` ASC";
$db->query($sql);
if(!result){
	exit('error');
}

while($array = $result->fetch_array()){
	echo "The average price of ".$array['brand']." is ".$array['ap']."hr/>";
}

?>