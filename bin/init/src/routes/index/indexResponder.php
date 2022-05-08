<?php

namespace App;

use Majorak\Component\Responder;

class AppResponder extends Responder {
    public function __invoke() {
        return $this->response->setContent("<!DOCTYPE html><html><head><title>Majorak!</title></head><body><h1>It works!</h1><p>If you're seeing this, Majorak is working correctly.</p><a target=\"_blank\" href=\"https://github.com/thijsvanderwoude/majorak\">GitHub</a> <a target=\"_blank\" href=\"https://github.com/thijsvanderwoude/majorak/blob/main/LICENSE\">License</a></body></html>");
    }
}

?>
