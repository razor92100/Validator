<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 25/11/14
 * Time: 11:11
 */

namespace Tests\JB\Validator;

use JB\Validator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmpty()
    {
        $array = array();

        $test = Validator\ArrayValidator::isEmpty($array);

        $this->assertTrue($test);
    }
} 