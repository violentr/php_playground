<?php
namespace Theory;

function handle($url){
  if ('/' === $url){
    return "<p> Welcome to PHP</p>";
  }else if ('/about' === $url){
    return "About company";
  }else if ('/server' === $url){
    print_r($_SERVER);
  }else{
    return "Route was not found";
  }
}

echo handle($_SERVER['REQUEST_URI']);



?>

