# Validator

Validator is a small library that allow you to validate lots of data like integer, string, boolean, array and DateTime.
Validator is simply to use, just call the method which correspond to your validation wishes and see if you're good or not.
All methods return true if the validation is validate and false if it isn't.

## How it works

```php
<?php
// Simply create a new variable $validation to see the result of the validation
// Choose the validation method you care about
// You're done :)

// Here we check if the integer is positive
$validation = \JB\Validator\IntegerValidator::isPositive($integer);

// Debug $validation to see the result
var_dump($validation);

```

### Hope you enjoy it !
