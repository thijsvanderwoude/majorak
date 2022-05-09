<?php

namespace App;

use Majorak\Component\Responder;
use Majorak\Templatery\Render;

class AppResponder extends Responder {
    public function __invoke() {
        $payload = $this->payload;

        $render = new Render;
        $render("indexTemplate", $payload);

        return $this->response;
    }
}

?>
