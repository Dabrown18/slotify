<?php
class Account {

	private $errorArray;

	public function __construct() {
		$this -> errorArray = array();
	}

	public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
		$this -> validateUsername($un);
		$this -> validateFirstName($fn);
		$this -> validateLastName($ln);
		$this -> validateEmails($em, $em2);
		$this -> validatePasswords($pw, $pw2);

		if(empty($this->errorArray)) {
			// Insert into database
			return true;
		} else {
			return false;
		}
	}

	private function validateUsername($input) {
		// Checks the length of username
		if(strlen($input) > 25 || strlen($input) < 5) {
			array_push($this->errorArray, "Your username must be between 5 and 25 characters");
			return;
		}
		// TODO: Check if user name exist
	}

	private function validateFirstName($input) {
		if(strlen($input) > 25 || strlen($input) < 2) {
			array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
			return;
		}
	}

	private function validateLastName($input) {
		if(strlen($input) > 25 || strlen($input) < 2) {
			array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
			return;
		}
	}

	private function validateEmails($email, $email2) {
		// Makes sure emails match
		if($email !== $email2) {
			array_push($this->errorArray, "Your emails do not match");
			return;
		}
		// Checks if email has a valid format
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($this->errorArray, "Email is invalid");
			return;
		}

		// TODO: Check if username hasn't already been used.
	}

	private function validatePasswords($password, $password2) {
		// Makes sure passwords match
		if($password !== $password2) {
			array_push($this->errorArray, "Your passwords do not match");
			return;
		}
		// Password can only contain numbers and letters
		if(preg_match('/[^A-Za-z0-9]/', $password)) {
			array_push($this->errorArray, "Your password can only contain numbers and letters");
			return;
		}
		// Checks password length
		if(strlen($password) > 25 || strlen($password) < 5) {
			array_push($this->errorArray, "Your last name must be between 5 and 25 characters");
			return;
		}
	}
}
?>