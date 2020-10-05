<?php
// dealing with two table simultaneously
// give each table an ALIAS
// prefix table name with ALIAS
// there are some methods you can use to deal with two or more tables
// simultaneously, such as UNION, UNION ALL, all kinds of JOIN

require_once('./connect.php');
$sql="SELECT s.`seller_id`, s.`seller_name`, c.`commodity_id`,c.`commodity_name`,c.`seller_id` "
      +"FROM `seller` AS `s`,`commodity` AS `c` "
	  +"WHERE s.`seller_id`=c.`seller_id` AND c.`seller_id`=1" ;
$result=$db->query($sql);
if(!$result){
	exit('ERROR!');
}

while($array = $result->fetch_array()){
	echo $array['seller_name']." selles ".$array['commodity_name']."<hr/>";
}
?>