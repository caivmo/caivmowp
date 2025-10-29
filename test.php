<?php

echo "Hello, World!\n";

// Test variable
$message = "This is a test PHP file";
echo $message . "\n";

// Test array
$items = ['apple', 'banana', 'orange'];
foreach ($items as $item) {
    echo "- " . $item . "\n";
}

// Test function
function greet($name) {
    return "Hello, " . $name . "!";
}

echo greet("Developer") . "\n";
