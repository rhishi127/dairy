<?php

namespace Custom\Utility\String;

class EmailChecker
{
    /**
     * @param string|null $email
     * @return bool
     */
    public static function isEmailValid($email):bool
    {
        $isValid = true;
        if ($email == null) {
            return false;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return $isValid;
    }
}
