<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$string = 'This is a test.';
$delimiter = '\n';
$return = stringToDecimalRepresentation($string, $delimiter);
var_dump($return);