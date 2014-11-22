<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';

$test = true;

$validation = \JB\Validator\BooleanValidator::isFalse($test);
var_dump($validation);