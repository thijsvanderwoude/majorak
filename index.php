<?php
/*
 * index.php
 * ---------
 * Main entry point where all pages come from.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 * We have to set the include path right for include()/require()... to function.
 */
$cwd = getcwd() . '/';
set_include_path($cwd);

/*
 * Settings
 */
include_once("config.php");
include "kint.phar";

/*
 * Templates
 * !! TO DO: WRITE TOOL THAT GENERATES TEMPLATE TABLE
 */
switch (file_exists("generated/templates.php")) {
    case 0:
        echo "No routes found. Please run:<br><br><code>php bin/majorak generate</code>";
        die();
    case 1:
        include_once("generated/templates.php");

}

require_once "majorak/require.php";

use Majorak\Http\Request;
use Majorak\Http\Response;
use Majorak\Templater\Template;

$request = new Request();
$url = $request->getUrl();

$response = new Response();
$route = "routes" . $url . "/index.php";

d($request);
die;

switch (file_exists($route)) {
    case 0:
        echo 
        header('Location: ' . $siteName . "/404");
        exit();
    case 1:
        ob_start();
        $eval = eval(file_get_contents($route));
        $result = ob_get_contents();
        ob_end_clean();

        $response->setContent($result)->send();
}

/*

// write majorak tool that generates a switch and includes it here
switch($url) {
    case "":
        $response->setContent("Hello from Majorak!<br><a href=\"/404\">Click here for 404!</a>")->send();
        exit(0);
    case "/404":
        $response->setContent("Error 404, page not found!<br><a href=\"/\">Click here for /!</a>")->send();
        exit(0);
echo "hello world!";
die();
exit(0);
*/
?>
