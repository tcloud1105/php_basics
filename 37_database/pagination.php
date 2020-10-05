<?php
// LIMIT $m, $n
// $m: starting point
// $n: number of rows displayed per page | set by user_error
// $page: current page number | collected from user
// $m = ($page - 1)*$n

require_once('./connect.php');
$n = 5; // 5 rows per page

// how many buttons 
$sql="SELECT count(*) FROM `car_info`";
$result = $db->query($sql);

if(!result){
	exit('ERROR!');
}

$array= $result->fetch_array();
$result->free();
$total_row_number = $array['count(*)'];

$total_button_number = ceil($total_row_number)/$n;
for($i=1;$i<=$total_button_number:$i++){
	echo "<a href='./pagination.php?current_page={$i}'>".$i."</a>";
}


if(empty($_GET['current_page'])){
	$page = 1;
}else{
	$_GET['current_page']=(int)$_GET['current_page'];
	if($_GET['current_page']>0 && $_GET['current_page']<$total_button_number){
		$page = $_GET['current_page'];
	}else{
		$page = 1;
	}
}

$m = ($page - 1)*$n;
$sql = "SELECT * FROM `car_info` LIMIT $m,$n";
$result = $db->query($sql);
if(!result){
	exit("ERROR!");
}
while($array=$result->fetch_array()){
	echo "The price of ".$array['brand']." ".$array['model']." is ".$array['price']."<br>";
}
$result->free();
$db->close();
?>