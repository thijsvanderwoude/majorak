<?php

namespace App\Index;

use Majorak\Component\Action;
use Majorak\Http\Request;

include("indexDomain.php");
include("indexResponder.php");

class indexAction extends Action {
    public function execute() {
        // $domainResponse = $this->domain->setRequest($request);
        return "yes";
    }
}

$request = new Request;
$domain = new indexDomain;
$responder = new indexResponder;
$action = new indexAction($request, $domain, $responder);

?>
