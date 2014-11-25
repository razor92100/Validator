<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 25/11/14
 * Time: 11:00
 */

namespace Tests\JB\Validator;

use JB\Validator;

/**
 * Class IntegerValidatorTest
 * @package Tests\JB\Validator
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsEqual()
    {
        $a = $b = 2;
        $expected = true;
        $test = Validator\IntegerValidator::isEqual($a, $b);

        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsSuperior()
    {
        $a = 10;
        $b = 5;
        $expected = true;

        $test = Validator\IntegerValidator::isSuperior($a, $b);

        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function  testIsInferior()
    {
        $a = 5;
        $b = 10;
        $expected = true;

        $test = Validator\IntegerValidator::isInferior($a, $b);

        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsBetween()
    {
        $min = 1;
        $max = 10;
        $nb = 5;
        $expected = true;

        $test = Validator\IntegerValidator::isBetween($nb, $min, $max);

        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsNegative()
    {
        $nb = -5;
        $expected = true;

        $test = Validator\IntegerValidator::isNegative($nb);

        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsPositive()
    {
        $nb = 5;
        $expected = true;

        $test = Validator\IntegerValidator::isPositive($nb);

        $this->assertEquals($expected, $test);
    }
} 