<?php

namespace Custom\Utility\Token;

class SaltGenerator
{
    /**
     * Generate a salt used in password
     *
     * @param  int $length the length of the salt
     * @return string
     */
    public static function generateSalt($length)
    {
        if ($length <= 0) {
            return '';
        }
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%';
        $randStringLen = $length;
        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }
        return $randString;
    }

    /**
     * Generate token used in tokenized authorization
     *
     * @param  int $length the length of the token
     * @return string
     */
    public static function generateToken($length)
    {
        if ($length <= 0) {
            return '';
        }
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randStringLen = $length;
        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }
        return $randString;
    }

    /**
     * Generate token consist of only alphabetic letters
     *
     * @param  int $length the length of the token
     * @return string
     */
    public static function generateAlphabeticToken($length)
    {
        if ($length <= 0) {
            return '';
        }
        $charset = 'abcdefghijklmnopqrstuvwxyz';
        $randStringLen = $length;
        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }
        return $randString;
    }
}