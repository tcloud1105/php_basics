<?php
  class car_info{
	  public $engine;
	  public $gearbox;
	  public $door_number;
	  public $age;
	  public $mileage;
	  
	   function __construct($engine,$gearbox,$door_number,$age,$mileage){
		  $this->engine=$engine;
		  $this->gearbox=$gearbox;
		  $this->door_number=$door_number;
		  $this->age=$age;
		  $this->mileage=$mileage;
	  }
	  //function super_assign($engine,$gearbox,$door_number,$age,$mileage){
		  //$this->engine=$engine;
		  //$this->gearbox=$gearbox;
		  //$this->door_number=$door_number;
		  //$this->age=$age;
		  //$this->mileage=$mileage;
	  //}
	 function car($brand){
		 echo "the engine of this ".$brand." is ".$this->engine."<br>";
		 echo "the car is ".$this->gearbox." and has ".$this->door_number." doors.<br/>";
		 echo "le mileage of the car is ".$this->mileage."<br/>";
		 echo "the car's age  is ". $this->age."<br/>";
	 }
  }
?>