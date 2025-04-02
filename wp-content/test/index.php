<?php

// Syntax error (missing semicolon)
echo "Hello, WordPress!"

// Undefined variable
echo $undefinedVar;

// Function with incorrect parameter usage
function addNumbers(int $a, int $b) {
    return $a + $b;
}

// Calling function with incorrect types (should be integers)
$result = addNumbers("10", "20");

// Using an undefined function
nonExistentFunction();
