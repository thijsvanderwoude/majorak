<?php
/*
 * index.php
 * ---------
 * Main entry point where all pages come from. Handles routing, and then jumps
 * to an action at that route or 404's.
 */

// For now we just hardcode any error reporting on.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
 * We have to set the include path right for include()/require()... to function.
 */
$cwd = getcwd() . '/';
set_include_path($cwd);

// Includes (should probably be replaced with dependancy injection at some point)
require "kint.phar";
require_once "majorak/Requires.php";

/*
 * Check if there is a route.
 */

$url = $_SERVER["PHP_SELF"];

$path = "src/routes" . $url;

if($path == "src/routes/") {
    $path .= "index";
}

$doesRouteExist = chdir($path);

switch($doesRouteExist) {
    case false:
        break;
    case true:
        include($path . substr($path, strrpos($path, "/")) . "Action.php");
        $returnResponse = $action->execute();
        
        $response = new \Majorak\Http\Response;

        $response->setContent($returnResponse)->send();
}

?>
