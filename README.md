# Validator

*Validator is a small library that allow you to validate lots of data like integer, string, boolean, array and DateTime.
Validator is simply to use, just call the method which correspond to your validation wishes and see if you're good or not.*

*All methods return true if the validation is validate and false if it isn't.*

## How it works

### IntegerValidator
List of IntegerValidator methods :
  - isEqual()
  - isSuperior()
  - isInferior()
  - isBetween()
  - isNegative()
  - isPositive()

```php
<?php
// Simply create a new variable $validation to see the result of the validation
// Choose the validation method you care about
// Pass the $integer you want to validate into the parameter of the method
// You're done :)

// Here we check if the integer is positive
$validation = \JB\Validator\IntegerValidator::isPositive($integer);

// Debug $validation to see the result
var_dump($validation);

```

### BooleanValidator

```php
<?php
// Simply create a new variable $validation to see the result of the validation
// Choose the validation method you care about
// Pass the $boolean you want to validate into the parameter of the method
// You're done :)

// Here we check if the boolean is true
$validation = \JB\Validator\BooleanValidator::isTrue($boolean);

// Debug $validation to see the result
var_dump($validation);

```

### Hope you enjoy it !
