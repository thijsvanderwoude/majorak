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

    public function getServerName() {
        return $this->server['SERVER_NAME'];
    }

    public function getServerPort() {
        return $this->server['SERVER_PORT'];
    }

    public function getRequestUri() {
        return $this->server['REQUEST_URI'];
    }

    public function getHttpHost() {
        return $this->server['HTTP_HOST'];
    }
}

?>
