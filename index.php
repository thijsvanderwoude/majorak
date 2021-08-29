<?php
/*
 * Main entry point where all pages come from.
 */

require_once "core/require.php";

use Majorak\Http\Response;
use Majorak\Templater\Template;

$response = new Response("<!DOCTYPE html><html><head><title>Majorak</title></head><body><p>Hello from Majorak!</p></body></html>");

$template = new Template();

$response->send();

?>
