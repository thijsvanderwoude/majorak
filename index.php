<?php
/*
 * index.php
 * ---------
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

/*
 * Router
 */

$routes = [
    "" => "home",
    "/about" => "about",
    "/404" => "404"
];

$request = new Request();
$url = $request->getUrl();

$response = new Response();

// write majorak tool that generates a switch and includes it here
switch($url) {
    case "":
        $response->setContent("Hello from Majorak!")->send();
        exit(0);
}

$response->setContent("Error 404, page not found!")->setStatus(404)->send();
exit(0);

?>
