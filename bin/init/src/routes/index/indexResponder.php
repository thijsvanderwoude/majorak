<?php

use Majorak\Component\Responder;

class AppResponder extends Responder {
    public function __invoke() {
        return $this->response->setContent("<!DOCTYPE html><html><head><title>Majorak!</title></head><body><h1>It works!</h1><p>If you're seeing this, Majorak is working correctly.</p></body></html>");
    }
}

?>
