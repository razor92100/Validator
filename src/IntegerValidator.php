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
     * @return bool
     */
    public static function isEqual($nb1, $nb2) {
        if ((int) $nb1 === (int) $nb2) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     * @return bool
     */
    public static function isSuperior($nb1, $nb2) {
        if ((int) $nb1 > (int) $nb2) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb1
     * @param int $nb2
     * @return bool
     */
    public static function isInferior($nb1, $nb2) {
        if ((int) $nb1 < (int) $nb2) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb
     * @param int $min
     * @param int $max
     * @return bool
     */
    public static function isBetween($nb, $min, $max) {
        if ((int) $nb >= (int) $min){
            if ((int) $nb <= (int) $max) {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param int $nb
     * @return bool
     */
    public static function isNegative($nb) {
        if (0 >= (int) $nb) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param int $nb
     * @return bool
     */
    public static function isPositive($nb) {
        if (0 <= (int) $nb) {
            return true;
        }else{
            return false;
        }
    }
} 