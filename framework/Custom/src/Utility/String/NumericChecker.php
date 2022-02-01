<?php

namespace Custom\Utility\String;

class NumericChecker
{
    /**
     * @param int|float $str
     * @return bool
     */
    public static function isPositiveInteger($str):bool
    {
        return (is_numeric($str) && $str > 0 && $str == round($str));
    }

    /**
     * @param int|float $str
     * @return bool
     */
    public static function isPositiveIntegerWithZero($str):bool
    {
        return (is_numeric($str) && $str >= 0 && $str == round($str));
    }

    /**
     * @param int|float $str
     * @return bool
     */
    public static function isPositiveNumericWithZero($str):bool
    {
        return (is_numeric($str) && $str >= 0);
    }
}
