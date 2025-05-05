<?php

// 🟢 1. Indexed Arrays
// Indexed arrays use numeric indexes starting at 0.

// php
// Copy
// Edit
// <?php
// $colors = array("red", "green", "blue");
// echo $colors[0]; // Outputs: red
// ?>
// You can also use the short syntax:

// php
// Copy
// Edit
// <?php
// $fruits = ["apple", "banana", "cherry"];
// echo $fruits[2]; // Outputs: cherry
// ?>
// 🟢 2. Looping Through an Indexed Array
// php
// Copy
// Edit
// <?php
// $animals = ["dog", "cat", "elephant"];
// foreach ($animals as $animal) {
//     echo $animal . "<br>";
// }
// ?>
// 🟢 3. Associative Arrays
// Associative arrays use named keys.

// php
// Copy
// Edit
// <?php
// $student = ["name" => "Liam", "grade" => 11];
// echo $student["name"]; // Outputs: Liam
// ?>
// 🟢 4. Looping Through an Associative Array
// php
// Copy
// Edit
// <?php
// $person = ["name" => "Ava", "age" => 17, "city" => "Trenton"];
// foreach ($person as $key => $value) {
//     echo "$key: $value<br>";
// }
// ?>
// 🟢 5. Modifying Arrays
// php
// Copy
// Edit
// <?php
// $colors = ["red", "green"];
// $colors[] = "blue"; // Add to the end
// $colors[0] = "yellow"; // Change first item
// print_r($colors);
// ?>
// 🟢 6. Counting Elements
// php
// Copy
// Edit
// <?php
// $foods = ["pizza", "sushi", "tacos"];
// echo count($foods); // Outputs: 3
// ?>
// 🟢 7. Check if Key Exists in Associative Array
// php
// Copy
// Edit
// <?php
// $user = ["username" => "alex"];
// if (array_key_exists("username", $user)) {
//     echo "Username is set.";
// }
// ?>



?>