<?php
/*
 * majorak/Component/Responder.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Responder {
    protected $response;

    public function __construct(\Majorak\Http\Response $response) {
        $this->response = $response;
    }
}

?>
