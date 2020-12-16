<?php
// Variable, Constants, & DATA TYPES
echo "Hello World";
print "Hello world";

// Single Line Comment
# Single Line 
/*
Muliti Line
*/

/*
    - Prefix $
    - Start with a letter or an underscore
    - Letter or numbers and underscores
    - Case Sensitive
*/
$output = 'Hello world';
echo $output;


#DATA TYPES
/*
    String
    Integer
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
*/

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = "Hello";
$string2 = "World";
$greeting = $string1 . ' ' .  $string2 . ' !';
$greeting2 = "$string1 $string2";
echo $greeting2;
//escape squence
$string3 = 'They \re Here';
$string3 = "They're Here";
echo "<br/>";
//constants
define('GREETING', 'HEllo Everyone');
define('MY_CASE', 'HEllo Everyone', true); #case insensitive
echo GREETING;
