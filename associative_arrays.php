<?php
namespace Codecademy;

//EX1
//3 key => value pairs 
//using shorthand array syntax 
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
//note: using implode will only return the values 
echo print_r($my_array);
echo "\n";
echo "\n";

//EX2
//using array() function 
$about_me = array(
    "fullname" => "Aisle Nevertell",
    "social" => 123456789
);
echo print_r($about_me);
echo "\n";
echo "\n";

// Write your code below:
//using array() function 
$php_array = array("language" => "PHP", "creator" => "Rasmus Lerdorf", "year_created" => 1995, "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]);
echo print_r($php_array);
echo "\n";
echo "\n";

//using short hand array syntax 
$php_short = ["language" => "PHP", "creator" => "Rasmus Lerdorf", "year_created" => 1995, "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]];
echo print_r($php_short);






// OUTPUT
//   Array
// (
//     [panda] => very cute
//     [lizard] => cute
//     [cockroach] => not very cute
// )
// 1

// Array
// (
//     [fullname] => Aisle Nevertell
//     [social] => 123456789
// )
// 1

// Array
// (
//     [language] => PHP
//     [creator] => Rasmus Lerdorf
//     [year_created] => 1995
//     [filename_extensions] => Array
//         (
//             [0] => .php
//             [1] => .phtml
//             [2] => .php3
//             [3] => .php4
//             [4] => .php5
//             [5] => .php7
//             [6] => .phps
//             [7] => .php-s
//             [8] => .pht
//             [9] => .phar
//         )

// )
// 1

// Array
// (
//     [language] => PHP
//     [creator] => Rasmus Lerdorf
//     [year_created] => 1995
//     [filename_extensions] => Array
//         (
//             [0] => .php
//             [1] => .phtml
//             [2] => .php3
//             [3] => .php4
//             [4] => .php5
//             [5] => .php7
//             [6] => .phps
//             [7] => .php-s
//             [8] => .pht
//             [9] => .phar
//         )

// )
// 1 
