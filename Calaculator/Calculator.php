<?php include "function.php" ;?>		
<?php
if (isset($_POST['calculation'])){
	$numOne = $_POST['num1'];
   	$numTwo = $_POST['num2'];
   	if(empty($numOne) or empty($numTwo)){
   		echo "Field must not be empty.<br>";
 	}else{
 		echo "First Number is: ".$numOne. " Second Number is ".$numTwo."<br/>";
 		$cal =new Calculation();
 		echo  "Addition is = " . $cal->Add($numOne, $numTwo)."<br>";
 		echo  "Subtraction is = " . $cal->Sub($numOne, $numTwo)."<br>";
 		echo  "Multiplication is = " . $cal->Mul($numOne, $numTwo)."<br>";
 		echo  "Division is = " . $cal->Div($numOne, $numTwo)."<br>";
 	}
 }
 ?>


