<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';

$validation = \JB\Validator\IntegerValidator::isPositive(-0,2);
var_dump($validation);