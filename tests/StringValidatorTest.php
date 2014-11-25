<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 25/11/14
 * Time: 11:09
 */

namespace Tests\JB\Validator;

use JB\Validator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testLengthIsEqualTo()
    {
        $string = 'ceci est mon texte de test';
        $expected = mb_strlen($string);

        $test = Validator\StringValidator::lengthIsEqualTo($string, $expected);
        $this->assertTrue($test);
    }
    public function testLengthIsSuperiorTo()
    {
        $string = 'test';
        $nb = 3;

        $test = Validator\StringValidator::lengthIsSuperiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthIsInferiorTo()
    {
        $string = 'test';
        $nb = 10;

        $test = Validator\StringValidator::lengthIsInferiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthBetween()
    {
        $string = 'test';
        $min = 1;
        $max = 10;

        $test = Validator\StringValidator::lengthBetween($string, $min, $max);
        $this->assertTrue($test);
    }
    public function testNoWhiteSpaceBeginAndEnd()
    {
        $string = 'No space';

        $test = Validator\StringValidator::noWhiteSpaceBeginAndEnd($string);

        $this->assertTrue($test);
    }
    public function testNoWhiteSpace()
    {
        $string = 'noSpaceHere';

        $test = Validator\StringValidator::noWhiteSpace($string);

        $this->assertTrue($test);
    }
} 