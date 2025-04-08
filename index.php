<?php
/* DO NOT DELETE THIS COMMENT
    To run php in codespaces
    Open terminal
    Type: php -S localhost:8000
    Hit enter
    If it does not open in browser, go to new tab and type URL http://localhost:8000/index.php
*/


// Single line comment
# Single line comment
/*
    Multi line comment
    This is a multi line comment
    This is a multi line comment
*/

echo "Hello World!"; // Output Hello World
// in terminal, php index.php
echo "\nHello World!\n"; // Output Hello World with new line for easier reading
// in terminal, php index.php
$name = "Alice";
echo "Hello, $name!\n"; // Output Hello, Alice
echo 'Hello, $name!\n'; // Output Hello, $name! (no variable substitution) \n is not interpreted
// in terminal, php index.php
// in PHP we should default to using double quotes for strings
$firstName = "George";
$lastName = "Washington";
// Concatenation
// Concatenation is the process of joining two or more strings together
// In PHP, you can concatenate strings using the dot (.) operator
$fullName = $firstName . " " . $lastName;
echo "$fullName\n"; // Outputs: George Washington
/*
    Remember += from javascript? we can do the same thing in PHP using the .= operator
    + is only used for addition in PHP
*/
$message = "Hello";
$message .= ", world!"; // Equivalent to: $message = $message . ", world!";
echo $message . "\n"; // Outputs: Hello, world!

$age = 18;
echo "You are $age years old.\n"; // Variable parsing  
$age = 19; // Reassigning  
echo "Now, you are $age years old.\n"; 

// Assinging by reference
// In PHP, you can assign a variable by reference using the & operator
// This means that both variables will point to the same value in memory
// We are not able to do this in javascript

$a = 10;
$b = &$a;
$a = 20;
echo $b; // Outputs: 20  

// Why would we want to do this?

// 1. Memory efficiency: If you have large data structures, using references can save memory.
// 2. Performance: If you are passing large data structures to functions, using references can improve performance.
// 3. Shared state: If you want multiple variables to share the same value, using references can be useful.

$b += 10; // This will change the value of $a to 30
echo $a; // Outputs: 30
// $b is also changed to 30 because it is a reference to $a
?>