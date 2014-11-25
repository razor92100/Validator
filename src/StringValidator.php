<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 17:59
 */

namespace JB\Validator;


/**
 * Class StringValidator
 * @package JB\Validator
 */
class StringValidator
{
    /**
     * @param string $string
     * @param int $length
     * @return bool
     */
    public static function lengthIsEqualTo($string, $length)
    {
        if ($length === mb_strlen($string)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $limit
     * @return bool
     */
    public static function lengthIsSuperiorTo($string, $limit)
    {
        $length = mb_strlen($string);
        if ($limit < $length) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $limit
     * @return bool
     */
    public static function lengthIsInferiorTo($string, $limit)
    {
        $length = mb_strlen($string);
        if ($limit > $length) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     * @return bool
     */
    public static function lengthBetween($string, $min, $max)
    {
        $length = mb_strlen($string);
        if ($min <= $length) {
            if ($max >= $length) {
                return true;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noWhiteSpaceBeginAndEnd($string)
    {
        $firstChar = substr($string, 0, 1);
        $lastChar = substr($string, -1);
        if (ctype_space($firstChar) && ctype_space($lastChar)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public static function noWhiteSpace($string)
    {
        if (strpos($string, ' ') == false) {
            return true;
        }else {
            return false;
        }
    }
} 