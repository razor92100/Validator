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
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthIsEqualTo($string, $length)
    {
        if (!is_string($string) || !is_int($length)) {
            throw new \Exception('$string must be a string and $length an integer');
        }else {
            if ($length === mb_strlen($string)) {
                return true;
            }else {
                return false;
            }
        }
    }

    /**
     * @param string $string
     * @param int $limit
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthIsSuperiorTo($string, $limit)
    {
        if (!is_string($string) || !is_int($limit)) {
            throw new \Exception('$string must be a string and $limit an integer');
        }else {
            $length = mb_strlen($string);
            if ($limit < $length) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $string
     * @param int $limit
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthIsInferiorTo($string, $limit)
    {
        if (!is_string($string) || !is_int($limit)) {
            throw new \Exception('$string must be a string and $limit an integer');
        }else {
            $length = mb_strlen($string);
            if ($limit > $length) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $string
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function lengthBetween($string, $min, $max)
    {
        if (!is_string($string) || !is_int($min) || !is_int($max)) {
            throw new \Exception('$string must be a string and $min / $max an integer');
        }else {
            $length = mb_strlen($string);
            if ($min <= $length) {
                if ($max >= $length) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpaceBeginAndEnd($string)
    {
        if (!is_string($string)) {
            throw new \Exception('$string must be a string');
        }else {
            $firstChar = substr($string, 0, 1);
            $lastChar = substr($string, -1);
            if (!ctype_space($firstChar) && !ctype_space($lastChar)) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function noWhiteSpace($string)
    {
        if (!is_string($string)) {
            throw new \Exception('$string must be a string');
        }else {
            if (strpos($string, ' ') == false) {
                return true;
            } else {
                return false;
            }
        }
    }
} 