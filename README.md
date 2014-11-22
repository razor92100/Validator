# Validator

*Validator is a small library that allow you to validate lots of data like integer, string, boolean, array and DateTime.
Validator is simply to use, just call the method which correspond to your validation wishes and see if you're good or not.*

*All methods return true if the validation is validate and false if it isn't.*

## How it works
Some usage examples of the library

********************************************
#### IntegerValidator
********************************************
List of IntegerValidator methods :
  - isEqual()
  - isSuperior()
  - isInferior()
  - isBetween()
  - isNegative()
  - isPositive()

```php
<?php
// Here we check if the integer is equal to number 13
$validation = \JB\Validator\IntegerValidator::isEqual($integer, 13);

// Here we check if the integer is superior to number 50
$validation = \JB\Validator\IntegerValidator::isSuperior($integer, 50);

// Here we check if the integer is inferior to number 200
$validation = \JB\Validator\IntegerValidator::isInferior($integer, 200);

// Here we check if the integer is between number 10 and 100
$validation = \JB\Validator\IntegerValidator::isInferior($integer, 10, 100);

// Here we check if the integer is positive
$validation = \JB\Validator\IntegerValidator::isPositive($integer);

// Here we check if the integer is negative
$validation = \JB\Validator\IntegerValidator::isNegative($integer);

// Debug $validation to see the result
var_dump($validation);

```
***********************************************
#### BooleanValidator
***********************************************
List of BooleanValidator methods :
  - isTrue()
  - isFalse()

```php
<?php

// Here we check if the boolean is true
$validation = \JB\Validator\BooleanValidator::isTrue($boolean);

// Here we check if the boolean is false
$validation = \JB\Validator\BooleanValidator::isTrue($boolean);

// Debug $validation to see the result
var_dump($validation);

```
*************************************************
#### StringValidator
*************************************************
List of StringValidator methods :
  - lengthIsEqualTo()
  - lengthIsSuperiorTo()
  - lengthIsInferiorTo()
  - lengthBetween()
  - noWhiteSpaceBeginAndEnd()
  - noWhiteSpace()

```php
<?php

// Here we check if the string length is equal to 120
$validation = \JB\Validator\StringValidator::lengthIsSuperiorTo($string, 120);

// Here we check if the string length is between 30 and 100
$validation = \JB\Validator\StringValidator::lengthIsSuperiorTo($string, 30, 100);

// Here we check if the string length is superior to 25
$validation = \JB\Validator\StringValidator::lengthIsSuperiorTo($string, 25);

// Here we check if the string length is inferior to 30
$validation = \JB\Validator\StringValidator::lengthIsInferiorTo($string, 30);

// Here we check if the string has not whitespaces at the beginning and at the end
$validation = \JB\Validator\StringValidator::noWhiteSpaceBeginAndEnd($string);

// Here we check if the string has not whitespaces
$validation = \JB\Validator\StringValidator::noWhiteSpace($string);

// Debug $validation to see the result
var_dump($validation);

```

### Hope you enjoy it !
*******************************************************