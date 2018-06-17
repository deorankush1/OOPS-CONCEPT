<?php
class ConstructCar{
  
    private $model = '';
  
  //__construct
  public function __construct($model = null)
  {
    if($model) 
    { 
      $this -> model = $model;
    }
  }
   
  public function getCarModel()
  {
    //We use the __CLASS__ magic constant in order to get the class name
  
    return " The <b>" . __FILE__ . "</b> model is: " . $this -> model;  //__FILE__, __CLASS__, __METHOD__, __LINE__ are the magic method.
  }
}
  
$car1 = new ConstructCar('Range Rover Velar
2.0L 247HP Turbocharged 4-cylinder');
  
echo $car1 -> getCarModel();

