<?php

// FUNCTION - BLOCK of code that can be repeated
/*
Camel Caase = myFunction
Lower Case = my_function
Pascal Case - MyFunction :: major used for classes
*/


// Create Simple Function
function simpleFunction()
{
}

// Run Simple Function
simpleFunction()();


function sumNumbers($name)
{
    echo "HEllo $name";
}


function sayHello($name = 'Test Default Paras')
{
    echo "HEllo $name";
}
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}
addNumbers(2, 3);


// By Refernce
function addFive($num)
{
    $num += 5;
}
function addTen(&$num)
{
    $num += 10;
}
