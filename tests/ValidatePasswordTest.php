<?php


use \PHPUnit\Framework\TestCase;


/**
 * Class ValidatePasswordTest
 */
class ValidatePasswordTest extends TestCase {

    /**
     * testValidateLength
     */
    public function testValidateLength() {
        // Create the test.
        $validatePass = new ValidatePassword();
        $this->assertFalse($validatePass->validateLength('1'));
    }
}
