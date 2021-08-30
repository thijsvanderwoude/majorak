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

    public function getUrl() {
        if(array_key_exists("REDIRECT_URL", $this->server)) {
            return $this->server["REDIRECT_URL"];
        }
        return "";
    }
}

?>
