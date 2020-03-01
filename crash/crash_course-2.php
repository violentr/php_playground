<?php

$numbers = [5, 10, 20];

function add(array $numbers){
  $result = 0;
  foreach($numbers as $number){
    $result += $number;
  };
  return $result;
}

// echo add($numbers);
//echo add(5); return error as it expects array as input

// func_get_args
function add2(){
  //var_dump(func_get_args);
  $result = 0;
  foreach(func_get_args() as $number){
    if (!is_numeric($number)){
      echo "Not a number: {$number} <br />";
      continue;
    }
    $result += $number;
  }
  return $result;
}

// array_sum
function add3(){
  return array_sum(func_get_args());
}

$summ = add2(5, 10, 10, '1true');
echo "Sum of all numbers: ${summ}";

// will return 26 as last item is type casted to integer
echo '<br /> Another sum of numbers ' . add3(5, 10, 10, '1true');

/*---------------------------
 * Scope
 */
$config = [
  'separator' => '_'
];

// Using global scope
function fullName($firstName, $lastName) {
  global $config;
  return "$firstName $config[separator] $lastName";
};

echo '<br />'.fullName('Alexander', 'Parrout');

/* include files in a project
// stop execution if not found
require 'functions/info.php'
require_once 'functions/info.php'

// do not stop execution if not found
include 'functions/info.php'
include_once 'functions/info.php'
 */

/* Global variables $_GET; $_POST
domain/index.php?slug=learn-php
*/
if (isset($_GET['slug'])){
  echo '<br / >' . $_GET['slug'];
}

// Ternary operator
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
// same as above
$page = $_GET['page'] ?: 1;
// same as above works for PHP 7
$page = $_GET['page'] ?? 1;
echo '<br />Page: ' . $page;

/* use die() when you want to terminate execution
  after statement die() nothing is executed
*/

// Help: Using PHP  php.net

// Working with files
$directory = opendir('.');
$exclude_dirs = [".", "..", ".DS_Store"];
echo "<p>List files in current folder: </p>";
echo "<ul>";
while (($image_file = readdir($directory)) !== false){
  if (!in_array($image_file, $exclude_dirs)){
    echo '<li>' . $image_file . '</li>';
  }
}
echo "</ul>";
?>



