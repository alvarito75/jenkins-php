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
        // Create the test 1.
        $firstTest = new ValidatePassword();
        $this->assertFalse($firstTest->validateLength('12345678911245464789416485'));

        // Create the test 2.
        $secondTest = new ValidatePassword();
        $this->assertFalse($secondTest->validateLength('123'));

        // Create the test 3.
        $thirdTest = new ValidatePassword();
        $this->assertTrue($thirdTest->validateLength('123456'));

        // Create the test 4.
        $fourthTest = new ValidatePassword();
        $this->assertTrue($fourthTest->validateLength('12345678901234567890'));

        // Create the test 4.
        $fifthTest = new ValidatePassword();
        $this->assertTrue($fifthTest->validateLength('cochabamba'));
    }
}
