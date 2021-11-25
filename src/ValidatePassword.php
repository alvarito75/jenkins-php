<?php

class ValidatePassword {
    const MIN_LENGTH = 6;
    const MAX_LENGTH = 20;

    /**
     * Good password should be between 6 and 20 characters.
     *
     * @param $password
     * @return bool
     */
    public function validateLength($password) {
        $passwordLength =  strlen($password);
        return $passwordLength >= self::MIN_LENGTH && $passwordLength <= self::MAX_LENGTH;
    }
}
