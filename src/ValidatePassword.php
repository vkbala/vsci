<?php

class ValidatePassword {

	const MIN_LENGTH = 6;
	const MAX_LENGTH = 10;

	public function validLength($password) {
		$passLength = strlen($password);

		if($passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH) {
			return true;
		} else {
			return false;	
		}	
	}
}