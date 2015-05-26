<?php

class ValidatePasswordTest extends PHPUnit_Framework_TestCase {

	public function testValidateLength() {
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validLength('Password@123'));
	}	
}