<?php
/*
 * Main entry point where all pages come from.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'kint.phar';
require_once "majorak/require.php";

use Majorak\Http\Request;
use Majorak\Http\Response;
use Majorak\Templater\Template;

$response = new Response();

/*
 * Router
 */

$routes = [
    "" => "home",
    "/404" => "404"
];

$request = new Request();
$url = $request->getUrl();

// write majorak tool that generates a switch and includes it here

foreach($routes as $route) {
    d($route);
    if($route = "home") {
        
        $response->setContent("Hello from Majorak!")->send();
        //exit(0);
    }
}

// If we make it to this point, we don't know what has been requested. Thusly, 404.
$response->setContent("Error 404, page not found!")->setStatus(404)->send();

?>
