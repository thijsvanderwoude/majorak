<?php

namespace App\Index;

use Majorak\Component\Action;
use Majorak\Http\Response;

class IndexAction extends Action {
    public function execute() {
        echo $_SERVER["QUERY_STRING"];
    }
}

?>
