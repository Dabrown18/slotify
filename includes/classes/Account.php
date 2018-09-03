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
	}

	private function validateUsername($input) {
		// Checks the length of username
		if(strlen($input) > 25 || strlen($input) < 5) {
			array_push($this->errorArray, "Your username must be between 5 and 25 characters");
		}
		// TODO: Check if user name exist
	}

	private function validateFirstName($input) {
		if(strlen($input) > 25 || strlen($input) < 2) {
			array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
		}
	}

	private function validateLastName($input) {
		if(strlen($input) > 25 || strlen($input) < 2) {
			array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
		}
	}

	private function validateEmails($email, $email2) {

	}

	private function validatePasswords($password, $password2) {

	}

}
?>