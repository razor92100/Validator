<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 16:18
 */

namespace JB\Validator;

/**
 * Class IntegerValidator
 * @package JB\Validator
 */
class IntegerValidator
{
    /**
     * @param int $nb1
     * @param int $nb2
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isEqual($nb1, $nb2)
    {
        if (!is_int($nb1) || !is_int($nb2)) {
            throw new \Exception('$nb1 and $nb2 must be integers');
        }else {
            if ((int)$nb1 === (int)$nb2) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isSuperior($nb1, $nb2)
    {
        if (!is_int($nb1) || !is_int($nb2)) {
            throw new \Exception('$nb1 and $nb2 must be integers');
        }else {
            if ((int)$nb1 > (int)$nb2) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isInferior($nb1, $nb2)
    {
        if (!is_int($nb1) || !is_int($nb2)) {
            throw new \Exception('$nb1 and $nb2 must be integers');
        }else {
            if ((int)$nb1 < (int)$nb2) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param int $nb
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isBetween($nb, $min, $max)
    {
        if (!is_int($nb) || !is_int($min) || !is_int($max)) {
            throw new \Exception('$nb, $min and $max must be integers');
        }else {
            if ((int)$nb >= (int)$min) {
                if ((int)$nb <= (int)$max) {
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
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isNegative($nb)
    {
        if (!is_int($nb)) {
            throw new \Exception('$nb must be an integer');
        }else {
            if (0 >= (int)$nb) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param int $nb
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isPositive($nb)
    {
        if (!is_int($nb)) {
            throw new \Exception('$nb must be an integer');
        }else {
            if (0 <= (int)$nb) {
                return true;
            } else {
                return false;
            }
        }
    }
} 