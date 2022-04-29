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


include "kint.phar";

require_once "majorak/require.php";

use Majorak\Http\Request;
use Majorak\Http\Response;

$request = new Request();
$url = $request->getUrl();

$response = new Response();

/*
 * Check
 */
$route = "routes" . $url . "/page.php";

switch (file_exists($route)) {
    case 0:
        echo 
        header("Location: /404");
        exit();
    case 1:
        ob_start();
        $eval = eval(file_get_contents($route));
        $result = ob_get_contents();
        ob_end_clean();

        $response->setContent($result)->send();
}

?>
