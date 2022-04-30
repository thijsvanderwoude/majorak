<?php
/*
 * Request.php
 * -----------
 * Code that deals with request data.
 */
namespace Majorak\Http;

class Request {
    protected $get, $post, $server;

    function __construct() {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->server = $_SERVER;
    }
}

?>
