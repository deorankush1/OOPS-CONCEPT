<?php include "function.php" ;?>		
<!DOCTYPE html>
<html>
<head>
	<title> Simple Calculator </title>
</head>
	<body>
		<form action="" method="post">
			<table>

				<tr>
					<td>Enter the first number</td>
					<td><input type = "number" name ="num1" /></td>
				</tr>

				<tr>
					<td>Enter the Second number</td>
					<td><input type = "number" name ="num2" /></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="calculation" 
	         		 value="Calculate" /></td>
	 			</tr>

			</table>
		</form>
	</body>
</html>
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