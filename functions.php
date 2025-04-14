<?php
/*
Warm-up Discussion:

“What are functions? How did we use them in JavaScript?”

Highlight the purpose of functions: reusability, modularity, clarity.

Open ChatGPT, Gemini, or other favorite AI chat. Ask "Please compare and contrast functions in PHP and javaScript. I am learning PHP and I know some javaScript"
*/
//////////// Add this after output starts running together

function lb() {
    echo "\n";
}
/*  
function currencyExchange(currency, num1, num2) {
    return `{currency} converted to US dollars: 
}
*/
function currEx($type, $amount, $exchange) {
    $usd = $amount * $exchange;
    echo "$type converted to US dolars: $usd USD";
}
currEx("yen", 405, .0065);
lb();
/*
Syntax Overview:
*/

function greet() {
    echo "Hello, world!";
}
greet(); // Call the function
lb();
/*
    Same function in javaScript
function greet() {
  console.log("Hello, world!");
}
greet();
*/
///// Parameters
function greetUser($name) {
    echo "Hello, $name!";
}
greetUser("Sofia");
lb();
////// Multiple Parameters
function add($a, $b) {
    return $a + $b;
}
echo add(3, 5); // Outputs: 8
lb();
/////// Return Statements & Values
function square($num) {
    return $num * $num;
}
$result = square(4); // $result is 16
echo $result;
lb();
//////// If no return statment is given, PHP returns NULL
function sayHi() {
    echo "Hi!";
}
$greeting = sayHi(); // $greeting is NULL
lb();
var_dump($greeting);

/////////////////// Default Parameters
/*
I just learned that javaScript allows for this as well, never used them there before.
*/
function greetPerson($name = "Guest") {
    echo "Hello, $name!";
}
greetPerson(); // Hello, Guest
lb();
greetPerson("Jamal"); // Hello, Jamal
lb();

/////////// Pass by reference (not a js feature)
function double(&$num) {
    $num = $num * 2;
}
$value = 10;
double($value);
echo $value; // Outputs: 20
lb();
///// The & means this function modifies the original variable, not a copy.
function doubleWOref($num) {
    $num = $num * 2;
    echo $num;
}
$value = 10;
doubleWOref($value);
lb();
echo $value; // Outputs: 20
lb();

////////// Scope
/*
Scope refers to where a variable can be accessed or used in your code.
There are two main types of scope in PHP:
Global Scope
Local Scope
And there are keywords like global and static that can help bridge or extend scope.
*/
////////// Global scope
$globalVar = "I'm outside!";

function testScope() {
    global $globalVar;  // remove to demonstrate error
    echo $globalVar;
}
testScope(); // Outputs: I'm outside!
lb();
/////// Local Scope
function greetLocal() {
    $message = "Hi there!";
    echo $message;
}

greetLocal(); // Works fine
lb();
echo $message; // ❌ Error: $message is undefined
lb();
/////// function parameters are local too

//////// Static
/*
Normally, a local variable disappears after the function ends.
You can use static to make a variable “remember” its value between function calls.
*/
function countCalls() {
    static $count = 0; // keeps value between calls
    $count++;
    echo "Called $count times";
}

countCalls(); // Called 1 times
lb();
countCalls(); // Called 2 times
lb();
countCalls(); // Called 3 times
lb();
?>