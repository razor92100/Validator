<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 25/11/14
 * Time: 11:10
 */

namespace Tests\JB\Validator;

use JB\Validator;

/**
 * Class BooleanValidatorTest
 * @package Tests\JB\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsTrue()
    {
        $boolean = true;
        $test = Validator\BooleanValidator::isTrue($boolean);

        $this->assertEquals($boolean, $test);
    }

    /**
     *
     */
    public function testIsFalse()
    {
        $boolean = false;
        $test = Validator\BooleanValidator::isFalse($boolean);

        $this->assertEquals(true, $test);
    }
} 