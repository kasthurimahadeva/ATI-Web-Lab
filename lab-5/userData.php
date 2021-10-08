<?php

	include ("functions.php");
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$age = $_POST["age"];

	insertUserData($firstname, $lastname, $email, $address, $age);
	
?>