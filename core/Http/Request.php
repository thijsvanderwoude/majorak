<?php
/*
 * Request.php
 * -----------
 * blabla -- fill this in
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
