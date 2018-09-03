<?php
// Sanitizes user input
function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText); // strip_tag = prevents html elements
	$inputText = str_replace(" ", "", $inputText); // removes spaces
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

// Sanitizes password
function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText); // strip_tag = prevents html elements
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

// Registration button
if(isset($_POST["registerButton"])) {
	$username  = sanitizeFormString($_POST["username"]);
	$firstName = sanitizeFormString($_POST["firstName"]);
	$lastName  = sanitizeFormString($_POST["lastName"]);
	$email     = sanitizeFormString($_POST["email"]);
	$email2    = sanitizeFormString($_POST["email2"]);
	$password  = sanitizeFormPassword($_POST["password"]);
	$password2 = sanitizeFormPassword($_POST["password2"]);

	$wasSuccessful = $account -> register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful) {
		// If registration is successful user is redirected to index
		header("Location: index.php");
	}
}

?>