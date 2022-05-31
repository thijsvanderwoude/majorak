<?php

namespace App;

use Majorak\Component\Domain;
use Majorak\Component\Payload;

class AppDomain extends Domain {
    public function __invoke() {
        $payload = new Payload;
        $payload->addItem(["server" => $this->request->server["SERVER_SOFTWARE"]]);
        $payload->addItem(["host" => $this->request->server["HTTP_HOST"]]);
        return $payload;
    }
}

?>
