<?php
/*
 * Main entry point where all pages come from.
 */

require_once "core/require.php";

use Majorak\Http\Response;

$response = new Response();
$response->setContent("Hello from Majorak 1!<br>")->setStatus(200)->send();

?>
