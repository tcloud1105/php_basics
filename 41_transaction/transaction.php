<?php
// transaction 
// success together or fail together
// $db->rollback() revoke changes done to data.
// $db->autocommit(false/true) turn it back on in th very end
// make sure the storage engine is INNODB
require_once('./connect.php');
$db->autocommit(false);
$sql="UPDATE `account` SET `balance`=`balance`-1000 WHERE `user`='send'"
$result_send = $db->query($sql);

$sql="UPDATE `account` SET `balance`=`balance`-1000 WHERE `user`='receive'"
$result_receive = $db->query($sql);

if($result_send && $result_receive){
	$db->commit();
	echo "Transaction Sucessfull";
}else{
	$db->rollback();
	echo "Transaction Failed and Aborted";
}
$db->autocommit(true);
$db->close();
?>