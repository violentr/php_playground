<?php
class Application {
  private $routes;

  public function __construct($routes){
    $this->routes = $routes;
  }

  public function run(){
    $uri = $_SERVER["REQUEST_URI"];

    foreach($this->routes as $item){
      var_dump($item);
      list($route, $handler) = $item;
      /* puts a backslash in front of every character that is part of the regular expression*/
      $prepared_route = preg_quote($route, '/');

      if (preg_match("/^{$prepared_route}$/i", $uri)){
        echo $handler();
        return;
      }else {
        echo "This url does not exist";
        break;
      }
    }
  }

}

?>
