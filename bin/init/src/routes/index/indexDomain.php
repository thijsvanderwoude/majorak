<?php

use Majorak\Component\Domain;
use Majorak\Component\DomainPayload;

class AppDomain extends Domain {
    public function __invoke() {
        $payload = new DomainPayload;
        //$payload->add();
        return $payload;
    }
}

?>
