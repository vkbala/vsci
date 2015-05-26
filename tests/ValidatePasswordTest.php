<?php

class ValidatePasswordTest extends PHPUnit_Framework_TestCase {

	public function testValidateLength() {
		$valPass = new ValidatePassword();
		//fwrite(STDOUT, __METHOD__ . "\n");
		$this->assertTrue($valPass->validLength('Password@123'));
	}	

	public function testValidatePassword() {
		$valPass = new ValidatePassword();
		//fwrite(STDOUT, __METHOD__ . "\n");
		//$this->assertFalse($valPass->validPassword('Password@123'));
		$this->assertTrue($valPass->validPassword('Password@123'));
	}		
}