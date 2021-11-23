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
 * !! TO DO: WRITE TOOL THAT GENERATES THE ROUTES
 */

$routes = [
    "" => "home",
    "/about" => "about",
    "/404" => "404"
];

$request = new Request();
$url = $request->getUrl();

$response = new Response();



ob_start();
$eval = eval(file_get_contents("templates/template.php"));
$result = ob_get_contents();
ob_end_clean();

$response->setContent($result)->send();

/*

// write majorak tool that generates a switch and includes it here
switch($url) {
    case "":
        $response->setContent("Hello from Majorak!<br><a href=\"/404\">Click here for 404!</a>")->send();
        exit(0);
    case "/404":
        $response->setContent("Error 404, page not found!<br><a href=\"/\">Click here for /!</a>")->send();
        exit(0);
}

exit(0);
*/
?>
