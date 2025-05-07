<?php

// 🟢 1. Indexed Arrays
// Indexed arrays use numeric indexes starting at 0.


$colors = array("red", "green", "blue");
echo $colors[0] . "\n"; // Outputs: red

// You can also use the short syntax:


$fruits = ["apple", "banana", "cherry"];
echo $fruits[2] . "\n"; // Outputs: cherry



// 🟢 2. Looping Through an Indexed Array
//  THIS IS FOR LOOPS TOMORROW
// $animals = ["dog", "cat", "elephant"];
// foreach ($animals as $animal) {
//     echo $animal . "\n";
// }
// 
// 🟢 3. Associative Arrays
// Associative arrays use named keys.


$student = ["name" => "Liam", "grade" => 11];
echo $student["name"] . "\n"; // Outputs: Liam

// 
// 🟢 4. Looping Through an Associative Array

// $person = ["name" => "Ava", "age" => 17, "city" => "Trenton"];
// foreach ($person as $key => $value) {
//     echo "$key: $value\n";
// }

$fruits = [0=>"apple", 1=>"banana", 2=>"cherry"];
echo $fruits[2] . "\n"; // Outputs: cherry
// 
// 🟢 5. Modifying Arrays

$colors = ["red", "green"];
$colors[] = "blue"; // Add to the end
$colors[0] = "yellow"; // Change first item
print_r($colors) . "\n";
// 
// 🟢 6. Counting Elements

$foods = ["pizza", "sushi", "tacos"];
echo count($foods) . "\n"; // Outputs: 3
// 
// 🟢 7. Check if Key Exists in Associative Array


// echo $student["grade"];
// lb();

if (array_key_exists("grade", $student)) {
    echo "Student has a grade.";
} else {
    echo "Student does not have a grade.";
}

lb();

$teacher = ["name"=> "Ms. Cavallero", "favoriteColor"=>"purple", "favCandy"=>"kitKat", "pet", "favStudent"];
print_r($teacher);

$arr = ["a", "b", "c"];
echo implode("~", $arr);

lb();

$states = ["New Jersey", "New York", "Pennsylvania"];
$capitals = ["Trenton", "Albany", "Harrisburg"];
$birds = ["Eastern Goldfinch", "Eastern Bluebird", "Ruffed Grouse"];
$flowers = ["Violet", "Rose", "Mountain Laurel"];

echo "The capital of $states[0] is $capitals[0].\n";
echo "The capital of $states[1] is $capitals[1].\n";
echo "The capital of $states[2] is $capitals[2].\n";

$stsAndCaps = ["NJ"=>["New Jersey", "Trenton"], "NY"=>["New York", "Albany"], "PA"=>["Pennsylvania", "Harrisburg"]];
echo "The capital of " . $stsAndCaps["NJ"][0] ." is " . $stsAndCaps["NJ"][1]. ".\n";




?>