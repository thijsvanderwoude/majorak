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
        \Majorak\Component\DomainPayload $payload = new \Majorak\Component\DomainPayload
    ) {
        $this->payload = $payload;
        $this->response = $response;
    }
}

?>
