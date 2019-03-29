<?php
	//Jaimy Koster GD1B
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$age = $_GET['age'];
	$email = $_GET['email'];

	echo "<h2>Response Demo Form</h2><h3> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Name: Lastname <strong> $firstName  $lastName</strong></li>";
	echo "<li>Age: <strong> $age</strong></li>";
	echo "<li>E-mail: <strong> $email</strong></li>";
	echo "</li></ul></h3>";
?>
