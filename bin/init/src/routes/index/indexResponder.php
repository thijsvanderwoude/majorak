<?php

namespace App;

use Majorak\Component\Responder;
use Majorak\Templatery\Renderer;

class AppResponder extends Responder {
    public function __invoke() {
        $payload = $this->payload;

        $render = new Renderer;
        $render("indexTemplate", $payload);

        return $this->response;
    }
}

?>
