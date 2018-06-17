<?php
//Your practice code
 class User{
     public $firstname;
     public $lastname;
     
     public function hello(){
         return "hello ". $this-> firstname;
     }
 }
$user1= new User();
$user1 -> firstname = "Ankush";
echo "lastname = " .$user1-> lastname = "Deora ";
echo $user1 -> hello();