<?php	
//here we declare without abstract method or property in abstract class and atleast one abstract method is essential.
abstract class Abstract_Demo{	
	public $firstname ="ankush";
	static public $Uname = "ankush";  
	abstract public function FirstName();
	
}
echo Abstract_Demo::$Uname;
class User extends Abstract_Demo{
	public function FirstName(){
		echo $this->firstname;
	}
}
$user1 = new User();
$user1 -> FirstName(); 