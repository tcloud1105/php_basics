<?php
/*
// how to create a class
// how to access property from inside a method
// how to assign value to class property
// how to call class method
*/
/* 
create a class store:
one property $shopping_cart
two methods broadcast(), shopping()
*/
class store {
	$shopping_cart ="default value";
	
	function broadcast(){
		echo "welcome";
	}
	
	function shopping($customer){
		$this->broadcast();
		echo $customer." can use ".$this->shopping_cart;
	}
}
?>