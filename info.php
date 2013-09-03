<?php
	$name = trim($_POST['firstName']);
	$lName = trim($_POST['lastName']);
	$myID = trim($_POST['id']);
	$myGender = trim($_POST['gender']);
	$myEmail = trim($_POST['email']);
	$myContact = trim($_POST['contact']);
	$myPassord = trim($_POST['password']);
	$verifyPassord = trim($_POST['verify']);
	
	
	if(!$name || !$lName || !$myID || !$myGender || !$myEmail || !$myContact || !$myPassord)
	{
		echo "Fill in all the required fields";	
			
	}
	if (!preg_match("/^[A-Za-z]/", $name))
	echo "First name:remove invalid character entered";
	
	if (!preg_match("/^[A-Za-z ]/", $lName))
	echo "Last name:remove invalid character entered";
	
	if (!preg_match("/[0-9]{13}/", $myID))
	echo "Your id must contain only 13 numeric values";
	
	if (!preg_match("/M|m|F|f/", $myGender))
	echo "Your gender format is not valid, the ryt format is (F or M)";
	
	if (!preg_match("/^0[0-9]{9}/", $myContact))
	echo "Your contacts must between 0 - 9 and and it must be 10 digits";
	
	if (!preg_match("/^[a-zA-Z0-9\-.]+@[a-zA-Z0-9\-]+.[a-zA-Z0-9\-.]+$/", $myEmail))
	echo "Invalid email address enetered the correct format: nemasanzhet@yahoo.com";
	
	if (!preg_match("/^[a-zA-Z0-9@\$]{6,13}/",$myPassord))
	echo "Your password must cotain minimu of 6 charatcers and maximum of 13";
	
?>
