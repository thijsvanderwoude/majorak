<?php

namespace App;

function render(string $template, array $payload = []) {
    include($_SERVER["DOCUMENT_ROOT"] . "/src/templates/" . $template . ".php");
}

?>
