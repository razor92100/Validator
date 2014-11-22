<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 17:59
 */

namespace JB\Validator;


class StringValidator
{
    public static function lengthIsEqualTo($string, $length){
        if( $length === mb_strlen($string) ){
            return true;
        }else{
            return false;
        }
    }
    public static function lengthIsSuperiorTo($string, $limit){
        $length = mb_strlen($string);
        if( $limit < $length){
            return true;
        }else{
            return false;
        }
    }
    public static function lengthIsInferiorTo($string, $limit){
        $length = mb_strlen($string);
        if( $limit > $length){
            return true;
        }else{
            return false;
        }
    }
} 