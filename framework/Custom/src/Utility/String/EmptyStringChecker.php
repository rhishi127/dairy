<?php

namespace Custom\Utility\String;

class EmptyStringChecker
{

    public static function isEmpty(string $str):bool
    {
        $isEmpty = false;
        if ($str === "0") {
            return false;
        }
        if (empty($str) || strlen(trim($str)) === 0) {
            return true;
        }
        return $isEmpty;
    }
}
