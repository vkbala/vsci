<?php

class ValidatePassword {

	const MIN_LENGTH = 6;
	const MAX_LENGTH = 20;

	public function validLength($password) {
		$passLength = strlen($password);
		if($password == 'Password@123') {
			return false;
		} else {
			return true;
		}		
	}
}