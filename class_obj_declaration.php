<?php
//Write what you think should be the class name, the names of the properties for the first and last name, and the name of the method that returns hello.
class User{ //declaring the class name using class keyword
	public $firstname ="ankush";
	public $lastname ="sachin"; 
	private $middlename = "kumar ";      //declare the name of property in a class

	public function hello(){
		return "hello";
	}
	
	public function __construct(){           // if we cannot define the property of a 												//class then it will autocompile in the 											//	construct method by the compiler.

	  echo $this -> middlename;
	}									
	public function getFirstname(){															//declare the method that access the default value by using the this keyword
		return $this -> firstname;
	}

	public function setLastname($lname){
		$this->lastname = $lname;
	}

	public function getLastname(){
		return $this->lastname;
	}

}

$user1 = new User();
//echo $user1-> hello();
// $user1->setFirstname();
echo $user1->getFirstname();

$user1->setLastname(" deora");
echo $user1->getlastname();


