<?php


use \PHPUnit\Framework\TestCase;


class ValidatePasswordTest extends TestCase {

    public function testValidateLength() {
        $validatePass = new ValidatePassword();
        $this->assertFalse($validatePass->validateLength('12345'));
    }
}
