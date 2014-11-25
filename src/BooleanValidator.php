<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 17:28
 */

namespace JB\Validator;


/**
 * Class BooleanValidator
 * @package JB\Validator
 */
/**
 * Class BooleanValidator
 * @package JB\Validator
 */
class BooleanValidator
{
    /**
     * @param bool $boolean
     * @return bool
     */
    public static function isTrue($boolean)
    {
        if( filter_var($boolean, FILTER_VALIDATE_BOOLEAN) ) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param bool $boolean
     * @return bool
     */
    public static function isFalse($boolean)
    {
        if( !filter_var($boolean, FILTER_VALIDATE_BOOLEAN, [ 'flags' => FILTER_NULL_ON_FAILURE]) ) {
            return true;
        }else{
            return false;
        }
    }
}