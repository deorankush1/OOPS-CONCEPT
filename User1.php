<?php
class User1 {
  public $firstName;
 
  public function hello()
  {
    echo "hello, " .  $this -> firstName;

    return $this;
  }
 
   public function register()
  {
    echo " >> registered";
    return $this;
  }
 
  public function mail()
  {
    echo " >> email sent";
  }
}
 
$user1 = new User1();
$user1 -> firstName = "Jane";
// $user1 -> hello();
// Chain the methods hello then register then mail.
 $user1 -> hello() -> register() -> mail();
// example the chaining method.
