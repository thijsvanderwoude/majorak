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

$request = new Request();

d($request);
die();

$response = new Response();
$response->setContent("Hello from Majorak!")->send();

?>
