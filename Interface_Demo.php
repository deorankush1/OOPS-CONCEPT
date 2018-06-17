<?php
interface Race{
	public function path($start, $finish);
}

class Car implements Race{
	public function path($start, $finish){
	  echo "Race from car $start to $finish.";
	}	
}

class MotorCycle implements Race{
	public function path($start, $finish){
	  echo "Race from bike $start to $finish.";
	}	
}


function travel(Race $something_i_can_drive) {
    $something_i_can_drive->path("India", "Germany");
}

    $mercedes = new Car();
	travel($mercedes);

	//Why not in a Motorcycle.
	$kawasaki = new MotorCycle();
	travel($kawasaki);