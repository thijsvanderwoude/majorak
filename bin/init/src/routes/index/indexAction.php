<?php

namespace App\Index;

use Majorak\Component\Action;
use Majorak\Component\Domain;
use Majorak\Component\Responder;
use Majorak\Http\Request;
use Majorak\Http\Response;

class indexAction extends Action {
    public function execute() {
        echo "It works!\n";
    }
}

$request = new Request;
$domain = new Domain;
$responder = new Responder;
$action = new indexAction($request, $domain, $responder);

$action->execute();

?>
