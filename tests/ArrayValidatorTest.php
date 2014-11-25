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
    public function testNumberElements()
    {
        $array = array('item1', 'item2', 'item3');
        $expected = 3;

        $test = Validator\ArrayValidator::numberElements($array);

        $this->assertEquals($expected, $test);
    }
    public function testKeyExists()
    {
        $array = array('key1' => 'item1', 'key2' => 'item2');
        $key = 'key2';

        $test = Validator\ArrayValidator::keyExists($array, $key);

        $this->assertTrue($test);
    }
    public function testValueExists()
    {
        $array = array('key1' => 'item1', 'key2' => 'item2');
        $value = 'item1';

        $test = Validator\ArrayValidator::valueExists($array, $value);

        $this->assertTrue($test);
    }
} 