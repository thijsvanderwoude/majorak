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

$url = $_SERVER["PHP_SELF"];

/*
 * Check if there is a route.
 */
$path = "src/routes" . $url;

$directory = scandir($path);
$potentialRoute = $path . "/" . $directory[2];

$routeWildcard = $path . "*Action.php";

switch (fnmatch($routeWildcard, $potentialRoute)) {
    case 0:
        echo 
        header("Location: /404");
        exit();
    case 1:
        include($potentialRoute);

        /*
        ob_start();
        $eval = eval(file_get_contents($potentialRoute));
        $result = ob_get_contents();
        ob_end_clean();

        $response->setContent($result)->send();
        */
}

?>
