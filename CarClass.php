<?php
// declare the class
class CarClass {
 
  // property
  public $comp; 
  public $color = 'beige';
  public $hasSunRoof = true;
 
  public function hello()
  {
    return "beep";
  }
}
 
// Creates objects
$bmw = new CarClass ();
$mercedes = new CarClass ();
 
echo $bmw -> color; // beige
echo "<br />";
echo $mercedes -> color; // beige
echo "<hr />";
 
// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
 
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";
 
// Use the methods to get a beep
echo $bmw -> hello(); // beep
echo "<br />";
echo $mercedes -> hello(); // beep