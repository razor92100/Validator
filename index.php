<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 22/11/14
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';

$test = 'abcdefghijl';

$validation = \JB\Validator\StringValidator::lengthIsSuperiorTo($test,15);
var_dump($validation);