<?php
/*
 * Request.php
 * -----------
 * blabla -- fill this in
 */
namespace Majorak\Http;

class Request {
    public function getUrl() {
        if(array_key_exists("PHP_SELF", $_SERVER)) {
            return $_SERVER["PHP_SELF"];
        }
        return "";
    }
}

?>
