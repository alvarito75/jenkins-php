<?php


use \PHPUnit\Framework\TestCase;


/**
 * Class ValidatePasswordTest
 */
class ValidatePasswordTest extends TestCase {

    public function testValidateLength() {
        $validatePass = new ValidatePassword();
        $this->assertFalse($validatePass->validateLength('1234'));
    }
}
