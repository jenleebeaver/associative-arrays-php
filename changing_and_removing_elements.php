<?php
namespace Codecademy;

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);
echo "\n";
echo "\n";

// Write your code below:
$my_car["oil"] = "new and premium";
echo print_r($my_car); 
echo "\n";
echo "\n";

$my_car["tires"] = "new with deep treads";
echo print_r($my_car);
echo "\n";
echo "\n";

unset($my_car["filth"]);
echo print_r($my_car);
echo "\n";
echo "\n";


//NOTES
//EX1
$new_arr = ["first" => "I am first!", "second" => "I am second!"]; 
 
$new_arr["third"] = "I am third!";
 
echo $new_arr["third"]; // Prints: I am third!
 echo "\n";

$new_arr["third"] = "I am the *NEW* third!";
 
echo $new_arr["third"]; // Prints: I am the *NEW* third!
echo "\n";

//EX2
$nums = ["one" => 1,"two"=> 2];
 
echo implode(", ", $nums); // Prints: 1, 2

//removes the first key => value pair in $nums
unset($nums["one"]);
echo "\n";

echo implode(", ", $nums); 
// Prints: 2
echo print_r($nums);
