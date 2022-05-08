<?php

namespace App;

use Majorak\Component\Domain;
use Majorak\Component\DomainPayload;

class AppDomain extends Domain {
    public function __invoke() {
        $payload = new DomainPayload;
        
        $payload->addItem(["data" => $_SERVER["SERVER_SOFTWARE"]]);

        return $payload;
    }
}

?>
