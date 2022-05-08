<?php
/*
 * Request.php
 * -----------
 * A class that exists solely to pass along the request data.
 */
namespace Majorak\Http;

class Request {
    public $get, $post, $server;

    public function __construct() {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->server = $_SERVER;
    }
}

?>
