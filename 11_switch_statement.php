<?php
// fruit store price management system
/*
apple: 20rand/kg
peach: 30rand/kg
strawberry: 30rand/kg
orange: 40rand/kg
*/

$fruit = "apple";
switch($fruit){
	case "apple":
	    echo "apple costs 20rand/kg";
		break;
	case "peach":
	    echo "peach costs 30rand/kg";
		break;
	case "strawbeery":
	    echo "strawberry costs 30rand/kg";
		break;
	case "orange":
	    echo "apple costs 40rand/kg";
		break;
	default:
	    echo "not in stock";
}
?>