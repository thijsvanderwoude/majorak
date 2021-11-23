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
 * !! TO DO: WRITE TOOL THAT MANAGES SETTINGS
 */
switch (file_exists("generated/settings.php")) {
    case 0:
        echo "No settings found. Please run:<br><br><code>php bin/majorak generate</code>";
        die();
    case 1:
        include_once("generated/settings.php");
}

/*
 * Router
 * !! TO DO: WRITE TOOL THAT GENERATES THE ROUTES
 */
switch (file_exists("generated/routes.php")) {
    case 0:
        echo "No routes found. Please run:<br><br><code>php bin/majorak generate</code>";
        die();
    case 1:
        include_once("generated/routes.php");

}

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



ob_start();
$eval = eval(file_get_contents("templates/example/ExampleTemplate.php"));
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
