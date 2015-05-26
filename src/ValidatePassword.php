<?php

class ValidatePassword {

	const MIN_LENGTH = 6;
	const MAX_LENGTH = 20;

	public function validLength($password) {
		$passLength = strlen($password);

		if($passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH) {
			return TRUE;
		} else {
			return FALSE;
		}		
	}

	public function validPassword($password) {
		if(isset($password) && $password == 'Password@123') {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}