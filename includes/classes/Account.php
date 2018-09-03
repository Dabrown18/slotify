<?php
class Account {

	public function __construct() {

	}

	public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
		$this -> validateUsername($un);
		$this -> validateFirstName($fn);
		$this -> validateLastName($ln);
		$this -> validateEmails($em, $em2);
		$this -> validatePasswords($pw, $pw2);
	}

	private function validateUsername($input) {

	}

	private function validateFirstName($input) {

	}

	private function validateLastName($input) {

	}

	private function validateEmails($email, $email2) {

	}

	private function validatePasswords($password, $password2) {

	}

}
?>