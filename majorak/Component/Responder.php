<?php
/*
 * majorak/Component/Responder.php
 * -----------
 * Class that handles rendering, then returns a Response object.
 */

namespace Majorak\Component;

class Responder {
    protected $payload, $response;

    public function __construct(
        \Majorak\Http\Response $response,
        \Majorak\Component\Payload $payload = new \Majorak\Component\Payload
    ) {
        $this->payload = $payload->stack;
        $this->response = $response;
    }
}

?>
