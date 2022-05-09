<?php

namespace Majorak\Templatery;

class Renderer{
    public function __invoke (string $template, array $payload = []) {
        include($_SERVER["DOCUMENT_ROOT"] . "/src/templates/" . $template . ".php");
    }
}

?>
