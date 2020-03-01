<?php
//namespace Theory;
require_once 'Application.php';

$routes = [
  ['/' , function(){
    return '<p> Main page</p>';
  }],
  ['/about', function(){
    return '<p> About Company </p>';
  }],
  ['/server', function(){
    print_r($_SERVER);
    return '<p> Server Stats</p>';
  }]
];

$app = new Application($routes);
$app->run();
?>

