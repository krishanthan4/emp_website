<?php
$routes = require_once "routes.php";
require_once "function.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// dd($uri);

function abort($value = "404"){
    http_response_code($value);
    require_once "./views/pages/status-codes/{$value}.php";

}

function pathToRoute($uri,$routes){

   if(array_key_exists($uri,$routes)){
    require_once($routes[$uri]);
   }else{
abort();
   }
}

 pathToRoute($uri,$routes);
?>