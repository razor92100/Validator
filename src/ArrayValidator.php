<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 23/11/14
 * Time: 00:55
 */

namespace JB\Validator;


/**
 * Class ArrayValidator
 * @package JB\Validator
 */
/**
 * Class ArrayValidator
 * @package JB\Validator
 */
class ArrayValidator
{
    /**
     * @param array $array
     * @return bool
     */
    public static function isEmpty($array) {
        if (empty($array)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param array $array
     */
    public static function numberElements($array) {
        $nbElements = count($array);
        echo $nbElements;
    }

    /**
     * @param array $array
     * @param $from
     * @param $to
     * @return bool
     */
    public static function getElementsBetween($array, $from, $to) {
        if (count($array) > $from) {
            if (count($array) < $to) {
                return true;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }

    /**
     * @param array $array
     * @param $key
     * @return bool
     */
    public static function keyExists($array, $key) {
        if (array_key_exists($key, $array)) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * @param array $array
     * @param $value
     * @return bool
     */
    public static function valueExists($array, $value) {
        if (in_array($value, $array)) {
            return true;
        }else {
            return false;
        }
    }
} 