<?php
/*
 * majorak/Component/Action.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Action {
    protected $domain, $responder, $request;

    function __construct($request, $domain, $responder) {
        $this->domain = $domain;
        $this->responder = $responder;
        $this->request = $request;
    }
}

?>
