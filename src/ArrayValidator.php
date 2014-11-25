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
class ArrayValidator
{

    /**
     * @param array $array
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEmpty($array)
    {
        if (!is_array($array)) {
            throw new \Exception('$array must be an array');
        }else {
            if (empty($array)) {
                return true;
            }else {
                return false;
            }
        }
    }

    /**
     * @param $array
     *
     * @return int
     *
     * @throws \Exception
     */
    public static function numberElements($array)
    {
        if (false === is_array($array)) {
            throw new \Exception('$array must be an array');
        }else {
            $nbElements = count($array);
            return $nbElements;
        }
    }

    /**
     * @param array $array
     * @param int $from
     * @param int $to
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function getElementsBetween($array, $from, $to)
    {
        if( false === is_array($array) || false === is_int($from) || false === is_int($to)) {
            throw new \Exception('$array must be an array and $from, $to must be integer');
        }else {
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
    }

    /**
     * @param array $array
     * @param $key
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function keyExists($array, $key)
    {
        if( false === is_array($array)) {
            throw new \Exception('$array must be an array');
        }else {
            if (array_key_exists($key, $array)) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param array $array
     * @param $value
     *
     * @return bool
     *
     *  @throws \Exception
     */
    public static function valueExists($array, $value)
    {
        if( false === is_array($array)) {
            throw new \Exception('$array must be an array');
        }else {
            if (in_array($value, $array)) {
                return true;
            } else {
                return false;
            }
        }
    }
} 