<?php
  $date = new DateTime;

  $string = "2020-02-28";
  /* format date
  https://www.php.net/manual/en/datetime.createfromformat.php
  */
  $date_format = DateTime::createFromFormat('Y-m-d', $string);

  // dump contents behaves like console.log
  echo '<br />' . var_dump($date);

  // call method format on date object
  echo '<br /> Current date: ' . $date->format('dS M Y');

  echo '<br /> Current Timestamp: ' . $date->getTimestamp();

  // Methods could be chained
  echo '<br />' . 'TimeZone: ' . $date->getTimezone()->getName();

  // string concatenation
  echo '<br /> Date: ' . $string;

  // Strict type comparison, use it always when you want to check the value
  // PHP does type casting behind the scenes like
  echo '<pre>', var_dump((int) $isAvailable), '</pre>';

  $isAvailable = '1false';
  if ($isAvailable){
    echo '<br />Book a table';
  } // will print message

  if ($isAvailable === true){
    echo '<br />Book a table';
  } // will not print message

  // Strict type comparison always use ===
  $uploaded = 1;
  if ($uploaded === true) {
    $url = "https://www.google.co.uk";
    echo '<br /><a href='. $url .'>Google</a><br />';
    echo '<strong>Strict type checking </strong><br />';
  }
  elseif ($uploaded) {
    $url = "https://www.google.co.uk";
    echo '<br /><a href='. $url .'>Google</a><br />';
  }

  //Arrays
  $names = ['Bil', 'David', 'Martha'];
  $names = array('Bil', 'David', 'Martha');

  // add new item to the array
  $names[] = 'Josh';
  var_dump($names);

  // Associative array
  $people = [
    'alex' => ['age' => 26],
    'bil' => ['age' => '23'],
    'martha' => ['age' => 28]
  ];

  $bil= $people['bil'];
  echo '<pre>', var_dump($people), '</pre>';
  echo '<br /> Bil is '. $bil['age'] . ' years old';

  // when you dant know what is the initial value
  $name = null;

  // String interpolation must be double quotes
  $alex= $people['alex'];
  echo "<br /> Alex is {$alex[age]}  years old";
  echo "<br /> Alex is $alex[age]  years old";

  //Loops
  //For Loop
  echo "<br />Pagination: <br />";
  for($i=1;$i<=10; $i++){
    echo "<a href='?page=$i'> $i </a>";
  }
  //Foreach loop
  echo '<br />';
  echo '<strong> Users: </strong>';
  echo '<ul>';
  foreach($names as $index => $name){
    $nr = $index + 1;
    echo '<li>' . $nr . ": " . $name . '</li>';
  };
  echo '</ul>';

  //Dumping, state of the variable
  echo '<pre>', print_r($names) , '</pre>';
  echo '<pre>', var_dump($names) , '</pre>';

  //Functions

  // Optional params leave at the end
  function fullName($firstName, $lastName, $separator=" "){
    return "{$firstName}{$separator}{$lastName} <br />";
  };
  // Function assigned to variable
  $var_fullname = function ($firstName, $lastName, $separator=" "){
    return "{$firstName}{$separator}{$lastName} <br />";
  };

  echo fullName("Alexander", "Perret");
  echo $var_fullname("Alexander", "Paraout");
?>
