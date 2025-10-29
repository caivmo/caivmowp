<?php
/**
 * Simple PHP Test File
 * Basic tests for PHP functionality
 */

echo "=== PHP Test Suite ===\n\n";

// 1. Basic output test
echo "1. Hello World Test: ";
echo "Hello, PHP!\n\n";

// 2. Variables test
echo "2. Variables Test:\n";
$name = "Developer";
$age = 25;
$price = 19.99;

echo "Name: $name\n";
echo "Age: $age\n";
echo "Price: $" . number_format($price, 2) . "\n\n";

// 3. Arrays test
echo "3. Arrays Test:\n";
$fruits = ["Apple", "Banana", "Orange", "Grape"];
$numbers = [1, 2, 3, 4, 5];

echo "Fruits: " . implode(", ", $fruits) . "\n";
echo "Numbers: " . implode(" + ", $numbers) . " = " . array_sum($numbers) . "\n\n";

// 4. Loops test
echo "4. Loops Test:\n";
echo "Counting to 5: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "\n\n";

// 5. Functions test
echo "5. Functions Test:\n";

function greet($name) {
    return "Hello, " . $name . "!";
}

function calculate($a, $b, $operation = 'add') {
    switch ($operation) {
        case 'add': return $a + $b;
        case 'subtract': return $a - $b;
        case 'multiply': return $a * $b;
        case 'divide':
            if ($b == 0 || (is_numeric($b) && abs((float)$b) < PHP_FLOAT_EPSILON)) {
                return null; // or return 0 to keep numeric type, based on requirements
            }
            return $a / $b;
        default:
            return null;
    }
}

echo greet("World") . "\n";
echo "5 + 3 = " . calculate(5, 3) . "\n";
echo "10 - 4 = " . calculate(10, 4, 'subtract') . "\n";
echo "6 * 7 = " . calculate(6, 7, 'multiply') . "\n\n";

// 6. Conditionals test
echo "6. Conditionals Test:\n";
$score = 85;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} else {
    echo "Grade: F\n";
}

$day = date('l');
echo "Today is: $day\n\n";

// 7. String manipulation test
echo "7. String Test:\n";
$text = "Hello, PHP World!";
echo "Original: $text\n";
echo "Length: " . strlen($text) . "\n";
echo "Uppercase: " . strtoupper($text) . "\n";
echo "Lowercase: " . strtolower($text) . "\n";
echo "Reversed: " . strrev($text) . "\n\n";

// 8. Date/Time test
echo "8. Date/Time Test:\n";
echo "Current date: " . date('Y-m-d') . "\n";
echo "Current time: " . date('H:i:s') . "\n";
echo "Timestamp: " . time() . "\n\n";

echo "=== All Tests Completed ===\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "\n";
