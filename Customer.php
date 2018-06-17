<?php
class Customer{
 
  private $firstName;
 
  public function setFirstName($str)
  {
    $this -> firstName = $str;
  }
 
  public function getFirstName()
  { 
    return $this -> firstName;
  }
}
 
$customer1 = new Customer();
$customer1 -> setFirstName("ankush");
echo $customer1 -> getFirstName();

