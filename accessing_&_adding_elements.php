<?php
namespace Codecademy;
$assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];

$assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];

$assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];

$student_name = "Alex";
// Write your code below:
$assignment_two["Sara"] = 65;
echo print_r($assignment_two);
echo "\n";
$assignment_three["Kat"] = 97;
echo print_r($assignment_three);
echo "\n";

$dans_grades = [$assignment_one["Dan"], $assignment_two["Dan"], $assignment_three["Dan"]];
echo print_r($dans_grades);
echo "\n";

echo print_r($assignment_two[$student_name]);
echo "\n";



//NOTES:
//EX1:
//accessing values by putting key point in brackets []
$my_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
echo $my_array["panda"]; 
echo "\n";
// Prints: very cute

//Add new elements to an associative array 
$my_array["capybara"] = "cutest";
echo $my_array["capybara"]; 
echo "\n";
// Prints: cutest

//EX2:
$favorites = ["favorite_food"=>"pizza", "favorite_place"=>"my dreams", "FAVORITE_CASE"=>"CAPS","favorite_person"=>"myself"];
 
echo  $favorites["favorite" . "_" . "food"]; 
echo "\n";
// Prints: pizza
 
$key =  "favorite_place";
echo  $favorites[$key];
echo "\n";  
// Prints: my dreams
 
echo $favorites[strtoupper("favorite_case")];
echo "\n";
// Prints: CAPS

//OUTPUT
// Array
// (
//     [Alex] => 91
//     [Kenny] => 99
//     [Natalia] => 100
//     [Lily] => 61
//     [Dan] => 88
//     [Kat] => 90
//     [Sara] => 65
// )
// 1
// Array
// (
//     [Alex] => 78
//     [Kenny] => 92
//     [Natalia] => 94
//     [Lily] => 79
//     [Dan] => 73
//     [Sara] => 61
//     [Kat] => 97
// )
// 1
// Array
// (
//     [0] => 81
//     [1] => 88
//     [2] => 73
// )
// 1
// 911
// very cute
// cutest
// pizza
// my dreams
// CAPS
