<?php

namespace App\_404;

use Majorak\Component\Action;

class _404Action extends Action {
    public function execute() {
        echo $_SERVER["QUERY_STRING"];
    }
}


$action = new _404Action($request);

$action->execute();

?>
