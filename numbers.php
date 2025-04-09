<?php
/*
PHP data types
String
Boolean
Array
Object
NULL
Resource
Integer
Float (floating point numbers - also called double)
// We will also discuss:
Number Strings
Infinity
NaN

To find out the data type we will use var_dump(variable)
*/
$numInt = 3;
$numFloat = 1.2;
$numString = "25";
var_dump($numInt);
var_dump($numFloat);
var_dump($numString);
var_dump((int)$numString);

/////////// Addition, Subtraction, Multiplication, and Division ////////////
echo 2+2;
echo "\n";
echo 2.3 + 2.3;
echo "\n";
// I'm going to create some variables so I can copy and paste
$num1 = 37;
$num2 = 55;
echo '$num1 + $num2 = '.  $num1 + $num2 . "\n";
echo '$num2 + $num1 = '.  $num2 + $num1 . "\n";
echo '$num1 - $num2 = '.  $num1 - $num2 . "\n";
echo '$num2 - $num1 = '.  $num2 - $num1 . "\n";
echo '$num1 * $num2 = '.  $num1 * $num2 . "\n";
echo '$num2 * $num1 = '.  $num2 * $num1 . "\n";
echo '$num1 / $num2 = '.  $num1 / $num2 . "\n";
echo '$num2 / $num1 = '.  $num2 / $num1 . "\n";
var_dump($num1);
var_dump($num1);
var_dump($num1 / $num2);

///////////// Exponents ///////////////////
echo 2 ** 2; // 2 squared
echo "\n";

//////////// Modulo (Mod or Modulus) /////////////
// returns the remainder
echo 9 % 4;
echo "\n";

//////////// Order of Operations ////////////////
/// PEMDAS
// Parentheses
// Exponents
// Multiplication and division
// Addition and subtraction

/*
I’m trying to figure out how much money I should have. At the start of the day I had $94.

I spent $4.25 on coffee
A friend gave me $7 that he owed me
I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
Some friends and I found $20 on the ground and split it four ways
I think that’s everything.

Use a single chained operation to get your result!
*/

echo 94 - 4.25 + 7 - (23.50 * 1.2) + (20 / 4);
echo "\n";

/////////////////////// Shorthand assignment operators ///////////////////////

$savings = 800;
$bike_cost = 75;
$savings = $savings - $bike_cost;
echo $savings; // Prints: 725

$savings = 800;
$bike_cost = 75;
$savings -= $bike_cost;
echo $savings; // Prints: 725

$age = 89; 
$age++;
echo $age; // Prints: 90

$days_til_vacation = 7; 
$days_til_vacation--;
echo $days_til_vacation; // Prints: 6


////////////////// other things we may encounter working with numbers /////////////////////
echo PHP_FLOAT_MAX;
echo "\n";
?>