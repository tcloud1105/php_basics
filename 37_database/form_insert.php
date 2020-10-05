<?php

if(!empty($_POST['submit'])){
	if(empty($_POST['engine'])||empty($_POST['transmission'])||empty($_POST['door_no'])||empty($_POST['age'])){
		exit("please fill up all of the forms.<a href='./form_insert.php'></a>");
	}
	// always escape your value to avoid SQL Injection
	$_POST['engine'] = addslashes($_POST['engine']);
	$_POST['transmission'] = addslashes($_POST['transmission']);
	$_POST['door_no'] = addslashes($_POST['door_no']);
	$_POST['age'] = addslashes($_POST['age']);
	$sql="INSERT INTO `car_info` SET `engine`='{$_POST['engine']}',`transmission`='{$_POST['transmission']}',`door_no`='{$_POST['door_no']}',`age`='{$_POST['age']}'";
  require_once('./connect.php');
  $result = $db->query($sql);
  if($result){
	 echo "new row added successfully.<br>";  
  }else{
	  echo "error.<br/>";
  }
}
?>

<form>
  engine:<input name="engine" type="text" value=""/><br/>
  transmission:<input name="transmission" type="text" value=""/><br/>
  door_no:<input name="door_no" type="text" value=""/><br/>
  age:<input name="age" type="text" value=""/><br/>
  <input name="submit" type="submit" value="submit"/><br/>
</form>