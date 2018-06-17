<?php
class UtiliStatic {
  static public $numCars = 0;
 
  static public function addToNumCars($int)
  {
    $int = (int)$int;
    self::$numCars += $int;
  }
}
echo UtiliStatic::$numCars;

UtiliStatic::addToNumCars(2);
echo "<br> ". UtiliStatic::$numCars;