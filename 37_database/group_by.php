<?php
   require_once('./connect.php');
   $sql = "SELECT `car_brand`,sum(`mileage`) FROM `group_by` WHERE `car_brand`='TOYOTA' GROUP BY `car_brand`";
   $result = $db->query($sql);
   $array = $result->fetch_array();
   var_dump($array);
   echo "total mileage of the TOYOTA is ".$array['sum(`mileage`)']."<br/>";
?>