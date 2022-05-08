<?php

namespace App;

use Majorak\Component\Action;

include("indexDomain.php");
include("indexResponder.php");

class AppAction extends Action {
    public function __invoke() {
        $domain = new AppDomain($this->request);
        $payload = $domain();

        $responder = new AppResponder(new \Majorak\Http\Response);
        return $responder();
    }
}

?>
