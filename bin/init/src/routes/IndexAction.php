<?php

namespace App\Index;

use Majorak\Component\Action;
use Majorak\Http\Request;

class IndexAction extends Action {
    public function execute() {
        echo $_SERVER["QUERY_STRING"];
    }
}

$request = new Request;
$action = new IndexAction($request);

$action->execute();

?>
