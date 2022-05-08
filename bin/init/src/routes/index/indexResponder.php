<?php

namespace App;

use Majorak\Component\Responder;

class AppResponder extends Responder {
    public function __invoke() {
        $page = "
        <!DOCTYPE html>
        <html>
            <head>
                <title>Majorak!</title>
            </head>
            <body>
                <h1>It works!</h1>
                <p>If you're seeing this, Majorak is working correctly.</p>
                <p>This app served by: " . $this->payload["server"] . " @ " . $this->payload["host"] . "<br><br>
            </body>
        </html>
        ";

        return $this->response->setContent($page);
    }
}

?>
